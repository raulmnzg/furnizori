<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Scada extends Resource
{
    /**
     * Resource Label
     *
     * @return string
     */
    public static function label()
    {
        return 'Consumuri SCADA';
    }

    /**
     * Resource Label
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Consum';
    }

    public static $group = 'Date de Consum';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Scada::class;

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

            BelongsTo::make('Client', 'client', 'App\Nova\Client'),

            Text::make('CLC')->rules('required'),

            Text::make('Data Consum SCADA')
                ->rules('required'),

            Text::make('Consum - Valoare initiala [mc]')
                ->rules('required'),

            Text::make('Energie - Valoare initiala [MWh]')
                ->rules('required'),

            Text::make('Consum - Valoare finala [mc]')
                ->rules('required'),

            Text::make('Energie - Valoare finala [MWh]')
                ->rules('required'),

            Text::make('Valoare PCS zilnica [kWh/mc')
                ->rules('required'),

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
