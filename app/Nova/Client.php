<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Client extends Resource
{
    /**
     * Resource Label
     *
     * @return string
     */
    public static function label()
    {
        return 'Clienți';
    }

    /**
     * Resource Label
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Client';
    }

    public static $group = 'Clienți';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Client::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('CLC', 'clc'),
            Text::make('Nume', 'name'),

            BelongsTo::make('Judet/Sector', 'district', 'App\Nova\District'),
            BelongsTo::make('Localitate', 'city', 'App\Nova\City'),

            Text::make('Strada', 'street'),
            Text::make('Numar strada', 'number'),
            Text::make('Bloc / Etaj / Apartament:', 'street2')->hideFromIndex(),

            Boolean::make('Client SCADA	', 'scada'),
            BelongsTo::make('Categorie consum', 'category', 'App\Nova\ConsumptionCategory'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
