<?php

namespace Database\Seeders;

use App\Models\assignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class assignmentsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        assignment::factory(2)->create();
    }
}
