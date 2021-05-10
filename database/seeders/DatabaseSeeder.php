<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);

    }
}
