<?php 
namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;

class IndexController extends Controller 
{
    public function __invoke() 
    {

        $wishlists = Wishlist::all();
        return view('main.index', compact('wishlists'));
    }
}