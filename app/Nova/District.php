<?php

namespace App\Nova;

use App\Nova\Metrics\DistrictsCount;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Saumini\Count\RelationshipCount;

class District extends Resource
{
    /**
     * Resource Label
     *
     * @return string
     */
    public static function label()
    {
        return 'Județe';
    }

    /**
     * Resource Label
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Judet/Sector';
    }

    public static $group = 'Clienți';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\District::class;

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
     * @param Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Nume', 'name')->rules('required'),

            RelationshipCount::make('Clienți', 'clients'),

            HasMany::make('Localitate', 'cities', 'App\Nova\City'),
            HasMany::make('Clienți', 'clients', 'App\Nova\Client'),
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
            new DistrictsCount()
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
