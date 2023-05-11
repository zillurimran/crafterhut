<?php

namespace Database\Seeders;

use App\Models\PaymentNumber;
use Illuminate\Database\Seeder;

class PaymentNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentNumber::create([
            'bkash' => '017245688098',
            'nagad' => '017245688098',
            'rocket' => '017245688098',
        ]);
    }
}
