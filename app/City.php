<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    /**
     * A city belongs to a district
     *
     * @return BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    /**
     * A city has many clients
     *
     * @return HasMany
     */
    public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
