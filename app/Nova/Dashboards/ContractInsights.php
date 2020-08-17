<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\ContractsCount;
use Laravel\Nova\Dashboard;

class ContractInsights extends Dashboard
{
    /**
     * Get the displayable name of the dashboard.
     *
     * @return string
     */
    public static function label()
    {
        return 'Informații despre contracte';
    }

    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new ContractsCount()
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey()
    {
        return 'contract-insights';
    }
}
