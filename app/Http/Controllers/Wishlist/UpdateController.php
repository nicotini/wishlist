<?php

namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wishlist\UpdateRequest;
use App\Models\Wishlist;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Wishlist $wishlist)
    {
        $data = $request->validated();
        $wishlist->update($data);
        return redirect()->route('index');
    }
}
