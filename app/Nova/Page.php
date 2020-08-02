<?php

namespace App\Nova;

use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Page extends Resource
{
    /**
     * Resource Label
     *
     * @return string
     */
    public static function label()
    {
        return 'Pagini';
    }

    /**
     * Resource Label
     *
     * @return string
     */
    public static function singularLabel()
    {
        return 'Pagină';
    }

    public static $group = 'Administrare';

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Page::class;

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

            TextWithSlug::make('Nume', 'name')
                ->sortable()
                ->slug('slug')
                ->rules('required'),

            Slug::make('URL', 'slug')
                ->rules('required'),

            Trix::make('Conţinut', 'content')
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
