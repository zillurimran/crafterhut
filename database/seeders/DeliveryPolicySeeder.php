<?php

namespace Database\Seeders;

use App\Models\DeliveryPolicy;
use Illuminate\Database\Seeder;

class DeliveryPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryPolicy::create([
            'category_id' => '1',
            'delivery_time' => '2-5 days',
            'delivery_type' => 'available',
            'return_time' => '7 days',
            'warranty' => 'not available',
            'delivery_areas' => 'dhaka, banani'
        ]);
        DeliveryPolicy::create([
            'category_id' => '2',
            'delivery_time' => '2-5 days',
            'delivery_type' => 'available',
            'return_time' => '7 days',
            'warranty' => 'not available',
            'delivery_areas' => 'dhaka, banani'
        ]);
        DeliveryPolicy::create([
            'category_id' => '6',
            'delivery_time' => '2-5 days',
            'delivery_type' => 'available',
            'return_time' => '7 days',
            'warranty' => 'not available',
            'delivery_areas' => 'dhaka, banani'
        ]);
        DeliveryPolicy::create([
            'category_id' => '7',
            'delivery_time' => '2-5 days',
            'delivery_type' => 'available',
            'return_time' => '7 days',
            'warranty' => 'not available',
            'delivery_areas' => 'dhaka, banani'
        ]);
    }
}
