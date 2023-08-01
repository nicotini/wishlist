<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wishlist\StoreRequest;
use App\Models\Wishlist;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Wishlist::firstOrCreate($data);
        return redirect()->route('index');
    }
}
