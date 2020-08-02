<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * Get Route Key Name
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
