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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order()
    {
        return $this->belongsTo(InfoDelivery::class, 'info_delivery_id');
    }
}
