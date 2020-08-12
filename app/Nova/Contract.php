<?php

namespace App\Nova;

use App\Nova\Metrics\ContractsCount;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Contract extends Resource
{
    /**
     * Resource Label
     *
     * @return string
     */
    public static function label()
    {
        return 'Contracte';
    }

    /**
     * Resource Label
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Contract';
    }

    public static $group = 'Acces la Sistemul de Distribuție';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Contract::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Nume', 'name')
                ->rules('required'),

            Text::make('E-mail', 'email')
                ->rules('nullable'),

            Text::make('Tel', 'phone')
                ->rules('required'),

            Text::make('CNP', 'cnp')
                ->hideFromIndex()
                ->rules('required'),

            Text::make('CI Seria', 'ci_seria')
                ->hideFromIndex()
                ->rules('required'),

            Text::make('CI NR', 'ci_nr')
                ->hideFromIndex()
                ->rules('required'),

            Text::make('Eliberat De', 'eliberat_de')
                ->hideFromIndex()
                ->rules('nullable'),

            Text::make('Furnizor Actual', 'catre')
                ->hideFromIndex()
                ->rules('required'),

            Number::make('Consum', 'consume')
                ->hideFromIndex()
                ->rules('required'),

            Text::make('CLC', 'clc')
                ->hideFromIndex()
                ->rules('required'),

            Text::make('Serie Contor', 'serie_contor')
                ->hideFromIndex()
                ->rules('required'),

            Text::make('Categorie Consum', 'categorie_consum')->rules('required'),

            Text::make('Localitate Consum', 'city')->rules('required')
                ->hideFromIndex(),
            Text::make('Domiciliul', 'address')
                ->hideFromIndex()
                ->rules('required')->hideFromIndex(),
            Text::make('Judet / Sector', 'district')
                ->hideFromIndex()
                ->rules('required')->hideFromIndex(),
            Text::make('Loc Consum', 'location')
                ->hideFromIndex()
                ->rules('required')->hideFromIndex(),

            Number::make('Număr contract manual','id_by_day')
                ->default(function ($request) {
                    $contract = new \App\Contract();
                    return $contract->getCountPerDay();})
                ->creationRules('unique:contracts,id_by_day')
                ->updateRules('unique:contracts,id_by_day,{{resourceId}}'),

            Select::make('Tarife', 'price')->options([
                "113,68" => "Otopeni - 113,68",
                "130,00" => "Bragadiru Cornetu - 130 | Rest localități - 130",
                "145,00" => "Snagov - 145",
                "125,00" => "Mehedinti și Nord - 125",
            ])->hideFromIndex(),

            HasMany::make('Files', 'files', 'App\Nova\File'),

            Date::make('Data informare FN și OD', 'data_informare')
                ->rules('nullable')
                ->hideWhenCreating(),

            Date::make('Data Primire Contract semnat', 'data_primire')
                ->rules('nullable')
                ->hideWhenCreating(),

            Date::make('Creat la manual', 'created_at')
                ->rules('required')
                ->hideFromIndex(),

            Date::make('Actualizat la', 'updated_at')
                ->hideWhenCreating()
                ->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [
            new ContractsCount()
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
