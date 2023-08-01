<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $wishlists = Wishlist::factory(3)->create();
        $produсts = Product::factory(10)->create();

        foreach ($wishlists as $wishlist) {
            $productIds = $produсts->random(3)->pluck('id');
            $wishlist->products()->attach($productIds);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
