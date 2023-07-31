<?php 
namespace App\Http\Controllers\Wishlist;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;

class DestroyController extends Controller 
{
    public function __invoke(Wishlist $wishlist) 
    {
        
        $wishlist->delete();
       
        return redirect()->route('index');
    }
}