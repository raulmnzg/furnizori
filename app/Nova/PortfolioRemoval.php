<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PortfolioRemoval extends Resource
{
    /**
     * Resource Label
     *
     * @return string
     */
    public static function label()
    {
        return 'Eliminări din portofoliu';
    }

    /**
     * Resource Label
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Portofoliul';
    }

    public static $group = 'Acces la Sistemul de Distribuție';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\PortfolioRemoval::class;

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
        'id', 'clc'
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

            Text::make('Tip Solicitare', 'request_type')->rules('required')->sortable(),
            Text::make('CLC', 'clc')->rules('required')->sortable(),
            Text::make('Nume Client	', 'name')->rules('required')->sortable(),
            Text::make('Stradă', 'city')->rules('required')->sortable(),
            Text::make('Dată Eliminare	', 'date_removed')->rules('required')->sortable(),
            Text::make('Dată Validare DGSR', 'dgsr_validation_date')->rules('required')->sortable(),
            Text::make('Furnizor Solicitant', 'applicant_supplier')->rules('required')->sortable(),
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
        return [];
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
