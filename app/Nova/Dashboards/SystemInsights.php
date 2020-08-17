<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\UsersCount;
use Laravel\Nova\Dashboard;

class SystemInsights extends Dashboard
{
    /**
     * Get the displayable name of the dashboard.
     *
     * @return string
     */
    public static function label()
    {
        return 'Informații despre sistem ';
    }

    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new UsersCount(),
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'system-insights';
    }
}
