<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class AddImages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::factory()->count(3)->create();
    }
}
