<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    /**
     * A client belongs to a district
     *
     * @return BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    /**
     * A client belongs to a city
     *
     * @return BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * A client belongs to a category
     *
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ConsumptionCategory::class, 'consumption_category_id');
    }
}
