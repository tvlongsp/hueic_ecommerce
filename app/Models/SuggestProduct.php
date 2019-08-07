<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuggestProduct extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'suggest_products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'admin_id',
        'status',
        'reply',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
