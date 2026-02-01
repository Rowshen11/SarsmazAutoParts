<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $brands = ['Bosch', 'Brembo', 'NGK', 'Kayaba', 'Lemforder'];
        foreach ($brands as $brandName) {
            Brand::create([
                'name' => $brandName,
                'slug' => Str::slug($brandName)
            ]);
        }
        $categories = [
            'Tormoz ulgamy' => ['Tormoz diskalar', 'Kolodkalar', 'Şlanglar'],
            'Dwigatel' => ['Porşenler', 'Kolsalar', 'Prokladkalar'],
            'Podweskalar' => ['Amortizatorlar', 'Ryçaglar', 'Saýlentbloklar'],
        ];
        foreach ($categories as $parentName => $subCategories) {
            $parent = Category::create([
                'name' => $parentName,
                'slug' => Str::slug($parentName)
            ]);
            foreach ($subCategories as $subName) {
                Category::create([
                    'name' => $subName,
                    'slug' => Str::slug($subName),
                    'parent_id' => $parent->id

                ]);
            }
        }
        Product::factory(100)->create();
    }
}
