<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    /**
     * A district has many cities
     *
     * @return HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
