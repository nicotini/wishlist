<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'products';
    protected $guarded = false;
    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class, 'wishlist_products', 'product_id', 'wishlist_id');
    }
}
