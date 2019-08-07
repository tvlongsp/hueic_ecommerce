<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'is_hot_trend',
        'slug',
        'name',
        'description',
        'thumbnail',
        'rating',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class, 'product_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id','id');
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class, 'product_id','id');
    }
}
