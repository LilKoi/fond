<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Сhildren;
class ChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Сhildren::factory()->count(50)->create();
    }
}
