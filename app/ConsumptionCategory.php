<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ConsumptionCategory extends Model
{
    /**
     * A category has many clients
     *
     * @return HasMany
     */
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
