<?php

namespace Database\Seeders;

use App\Models\Child;
use Illuminate\Database\Seeder;
class ChildrenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Child::factory()->count(50)->create();
    }
}
