<?php

namespace Database\Seeders;

use App\Models\Coffe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoffeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coffes = [
            [
                'id_c' => 'c202401',
                'name' => 'Classic Matcha',
                'description' => 'Deeply rooted in the elegance of Japanese
                tea culture, presents a captivating blend of tradition and exquisite flavor.',
                'price' => 15000,
                'c_image' => 'matcha.jpg'
            ],
            [
                'id_c' => 'c202402',
                'name' => 'Matcha Latte',
                'description' => 'Matcha latte is a delightful and vibrant
                beverage that seamlessly blends the rich.',
                'price' => 18000,
                'c_image' => 'matchalat.jpg'
            ],
            [
                'id_c' => 'c202403',
                'name' => 'Clasic Espresso',
                'description' => 'The epitome of coffee craftsmanship, captures the pure essence of finely ground and expertly brewed coffee beans. ',
                'price' => 15000,
                'c_image' => 'espresso.jpg'
            ],
            [
                'id_c' => 'c202404',
                'name' => 'Caramel Latte',
                'description' => 'A sumptuous  
                 beckons with a harmonious blend of rich espresso, creamy steamed milk, and the luscious sweetness of caramel.',
                'price' => 18000,
                'c_image' => 'caralat.jpg'
            ],
            [
                'id_c' => 'c202405',
                'name' => 'Hazelnut Latte',
                'description' => 'A delightful fusion of rich espresso, velvety steamed milk, and the alluring essence of hazelnut.',
                'price' => 18000,
                'c_image' => 'hazelat.jpg'
            ],
            [
                'id_c' => 'c202406',
                'name' => 'Vanilla Latte',
                'description' => 'A timeless and inviting beverage, is a symphony of smooth espresso, velvety steamed milk, and the sweet, comforting essence of vanilla.',
                'price' => 18000,
                'c_image' => 'vanilat.jpg'
            ],
        ];
        foreach ($coffes as $coffe) {
            Coffe::create($coffe);
        }
    }
}
