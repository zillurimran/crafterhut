<?php

namespace Database\Seeders;

use App\Models\TendanceDernier as ModelsTendanceDernier;
use Illuminate\Database\Seeder;

class TendanceDernier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsTendanceDernier::create([
            'tendance'=> 'yes',
            'dernier'=> 'yes',
        ]);
    }
}
