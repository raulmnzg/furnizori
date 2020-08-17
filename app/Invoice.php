<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{

    protected $dates = [
        'issue_date', 'due_date',
    ];

    /**
     * An Invoice has many Files
     *
     * @return HasMany
     */
    public function files()
    {
        return $this->hasMany(InvoiceFile::class);
    }
}
