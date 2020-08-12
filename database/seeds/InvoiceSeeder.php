<?php

use App\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::create( [
            'id'=>'1',
            'invoice_number'=>'80100004535',
            'issue_date'=>'2020-07-31',
            'due_date'=>'2020-08-17',
            'invoice_value'=>'109.00',
            'amount_due'=>'0.00',
            'created_at'=>'2020-08-12 05:09:07',
            'updated_at'=>'2020-08-12 05:09:07'
        ] );
    }
}
