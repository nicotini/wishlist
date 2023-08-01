<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wishlist\SubmitRequest;
use App\Models\Wishlist;

class IndexController extends Controller
{
    public function __invoke(SubmitRequest $request)
    {
        $wishlist_id = false;
        $products = false;
        $request->validated();
        $wishlist_id = $request->input('wishlist_id');
        if ($wishlist_id) {
            if ($wishlist = Wishlist::find($wishlist_id)) {
                $products = $wishlist->products;
            }
        }
        $wishlists = Wishlist::all();

        return view('main.index', compact('wishlists', 'wishlist_id', 'products'));
    }
}
