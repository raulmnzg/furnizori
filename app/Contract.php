<?php

namespace App;

use App\Mail\ContractAdmin;
use App\Mail\ContractMail;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $guarded = [];

    protected $dates = [
        'data_informare', 'data_primire',
    ];

    /**
     * A contract has many files
     *
     * @return HasMany
     */
    public function files()
    {
        return $this->hasMany(File::class);
    }

    /**
     * Store submission
     *
     * @param $contractData
     * @return mixed
     */
    public function storeSubmission($contractData)
    {
        $contractData = Contract::create([
            'name' => $contractData['name'],
            'email' => $contractData['email'],
            'phone' => $contractData['phone'],

            'cnp' => $contractData['cnp'],
            'ci_nr' => $contractData['ci_nr'],
            'ci_seria' => $contractData['ci_seria'],

            'clc' => $contractData['clc'],
            'serie_contor' => $contractData['serie_contor'],
            'categorie_consum' => $contractData['categorie_consum'],

            'consume' => $contractData['consume'],

            'city' => $contractData['city'],
            'catre' => $contractData['catre'],
            'address' => $contractData['address'],
            'location' => $contractData['location'],
            'district' => $contractData['district'],
            'id_by_day' => $this->getCountPerDay()

        ]);
        return $contractData;
    }

    /**
     * Generate a Contract
     *
     * @param $contractData
     * @return mixed
     */
    public function generate($contractData)
    {
        $contracts = explode(', ', config('globals.contracts'));
        for ($i=0; $i < count($contracts); $i++) {
            $this->storePDF($contractData, $contracts[$i]);
        }
        return $this->where('id', $contractData->id)->first();
    }

    /**
     * Store a PDF.
     *
     * @param $contractData
     * @param $contractType
     */
    private function storePDF($contractData, $contractType)
    {
        $output = $this->generatePDF($contractData, $contractType);
        $this->savePDF($contractData, $contractType, $output);
    }

    /**
     * Generate a PDF
     *
     * @param $contractData
     * @param $contractType
     * @return mixed
     */
    private function generatePDF($contractData, $contractType)
    {
        $fileContract = explode('- ', $contractType)[0];
        $pdf = App::make('dompdf.wrapper');
        $view =  View::make('pdf.'. $fileContract,
            compact('contractData'))
            ->render();
        $view = mb_convert_encoding($view, 'HTML-ENTITIES', 'UTF-8');
        $pdf->loadHTML($view);
        return $pdf->output();
    }

    /**
     * @return int
     */
    public function getCountPerDay () {
        $count = $this->count() + 1;
        $exist = $this->where("id_by_day", $count)->first();
        if ($exist) {
            $count += 1;
            return $this->getCountNew($count);
        }
        return $count;
    }

    /**
     * @param $count
     * @return mixed
     */
    public function getCountNew ($count) {
        $date =  date("Y-m-d");
        $exist = $this->where("id_by_day", $count)->first();
        if ($exist) {
            $count += 1;
            return $this->getCountNew($count);
        }
        return $count;
    }

    /**
     * Save a PDF
     *
     * @param $contractData
     * @param $contractType
     * @param $output
     */
    private function savePDF($contractData, $contractType, $output)
    {
        $contract = $this->where('id', $contractData->id)->first();
        $fileContract = explode('- ', $contractType)[0];
        $contractName = explode('- ', $contractType)[1];
        $file = new File();
        Storage::put('public/'.$fileContract.strval($contract->id).'.pdf', $output);
        $outputPath = $fileContract . strval($contract->id) . '.pdf';
        $file->contract_id = $contract->id;
        $file->file = $outputPath;
        $file->name = $contractName;
        $file->save();
    }

    /**
     * Send Contract to Customer
     *
     * @param $contractData
     */
    public function sendCustomer($contractData)
    {
        Mail::to($contractData->email)->send(
            new ContractMail($contractData)
        );
    }

    /**
     * Send Contract to Admin
     *
     * @param $contractData
     */
    public function sendAdministrator($contractData) {
        Mail::to(config('mail.from.address'))->send(
            new ContractAdmin($contractData)
        );
    }
}
