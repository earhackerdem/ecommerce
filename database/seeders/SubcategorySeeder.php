<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Subcategory;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories=[
                // Celulares y tablets
                [
                    'category_id' => 1,
                    'name' => 'Celulares y smartphones',
                    'slug' => Str::slug('Celulares y smartphones'),
                    'color' => true
                ],
                [
                    'category_id' => 1,
                    'name' => 'Accesorios para celulares',
                    'slug' => Str::slug('Accesorios para celulares'),
                ],
                [
                    'category_id' => 1,
                    'name' => 'Smartwatches',
                    'slug' => Str::slug('Smartwatches'),
                ],
                //TV, audio y video
                [
                    'category_id' => 2,
                    'name' => 'TV y audio',
                    'slug' => Str::slug('TV y audio'),
                ],
                [
                    'category_id' => 2,
                    'name' => 'Audios',
                    'slug' => Str::slug('Audios'),
                ],
                [
                    'category_id' => 2,
                    'name' => 'Audio para autos',
                    'slug' => Str::slug('Audio para autos'),
                ],
                //Consola y videojuegos
                [
                    'category_id' => 3,
                    'name' => 'Xbox',
                    'slug' => Str::slug('Xbox'),
                ],
                [
                    'category_id' => 3,
                    'name' => 'Play Station',
                    'slug' => Str::slug('Play Station'),
                ],
                [
                    'category_id' => 3,
                    'name' => 'Videjuegos para pc',
                    'slug' => Str::slug('Videjuegos para pc'),
                ],
                [
                    'category_id' => 3,
                    'name' => 'Nintento',
                    'slug' => Str::slug('Nintento'),
                ],

                //Computación
                [
                    'category_id' => 4,
                    'name' => 'Portatiles',
                    'slug' => Str::slug('Portatiles'),
                ],
                [
                    'category_id' => 4,
                    'name' => 'PC escritorio',
                    'slug' => Str::slug('PC escritorio'),
                ],
                [
                    'category_id' => 4,
                    'name' => 'Almacenamiento',
                    'slug' => Str::slug('Almacenamiento'),
                ],
                [
                    'category_id' => 4,
                    'name' => 'Accesorios computadoras',
                    'slug' => Str::slug('Accesorios computadoras'),
                ],
                //Modas
                [
                    'category_id' => 5,
                    'name' => 'Mujeres',
                    'slug' => Str::slug('Mujeres'),
                ],
                [
                    'category_id' => 5,
                    'name' => 'Hombres',
                    'slug' => Str::slug('Hombres'),
                ],
                [
                    'category_id' => 5,
                    'name' => 'Lentes',
                    'slug' => Str::slug('Lentes'),
                ],
                [
                    'category_id' => 5,
                    'name' => 'Relojes',
                    'slug' => Str::slug('Relojes'),
                ],
                
        ];

        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
