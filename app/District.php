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

    /**
     * A district has many clients
     *
     * @return HasMany
     */
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
