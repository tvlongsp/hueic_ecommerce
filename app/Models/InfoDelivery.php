<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InfoDelivery extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'info_deliveries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'phone',
        'note',
    ];

}
