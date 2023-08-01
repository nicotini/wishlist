<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wishlist extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'wishlists';
    protected $guarded = false;
    protected $fillable = ['title'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'wishlist_products', 'wishlist_id', 'product_id');
    }
}
