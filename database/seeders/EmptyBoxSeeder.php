<?php

namespace Database\Seeders;

use App\Models\CustomBox;
use App\Models\Product;
use Illuminate\Database\Seeder;

class EmptyBoxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Votre box personnalisée',
            'short_description' => '<div>Une box à personnaliser selon vos envies</div>', 
            'price' => '0.0000',
            'qty' => '50000', 
            'qty_in' => 'kg', 
            'sku' => '05', 
            'category_id' => '27', 
            'slug' => 'FRUITIBOX-À-PERSONNALISER',
            'display_as' => 'trending',
            'image' => '312.jpg',

        ]);
    }
}
