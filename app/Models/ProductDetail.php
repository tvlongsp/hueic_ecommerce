<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price',
        'size',
        'quantity',
        'color',
        'description',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
