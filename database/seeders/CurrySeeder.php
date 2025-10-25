<?php

namespace Database\Seeders;

use App\Models\Curry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $curries = [
    [
        'name' => 'Kung Pao Chicken',
        'description' => 'Spicy stir-fried chicken with peanuts, vegetables, and chili peppers.',
        'image' => 'https://i.pinimg.com/736x/cf/e4/71/cfe471e6869f81795cf47534d562b0b2.jpg',
        'price' => 12.99,
        'category' => 'chicken',
    ],
    [
        'name' => 'Beef with Broccoli',
        'description' => 'Tender beef stir-fried with fresh broccoli in a savory sauce.',
        'image' => 'https://i.pinimg.com/736x/5a/26/2e/5a262e3f732f65254b74d19276cb320d.jpg',
        'price' => 13.99,
        'category' => 'beef',
    ],
    [
        'name' => 'Vegetable Curry',
        'description' => 'Mixed vegetables cooked in a rich, aromatic curry sauce.',
        'image' => 'https://i.pinimg.com/736x/00/31/28/00312852ad76629ddff817ad87eafcd3.jpg',
        'price' => 10.50,
        'category' => 'vegetarian',
    ],
    [
        'name' => 'Sweet and Sour Pork',
        'description' => 'Crispy pork pieces in a tangy sweet and sour sauce.',
        'image' => 'https://i.pinimg.com/736x/73/c6/26/73c62643f53559f60a0f665ead3c65d1.jpg',
        'price' => 11.50,
        'category' => 'pork',
    ],
    [
        'name' => 'Green Curry Chicken',
        'description' => 'Chicken simmered in a spicy green curry with coconut milk.',
        'image' => 'https://i.pinimg.com/736x/3d/6e/d7/3d6ed7c1a6f43c2b3055795497523a13.jpg',
        'price' => 13.50,
        'category' => 'chicken',
    ],
    [
        'name' => 'Red Thai Curry Beef',
        'description' => 'Beef cooked in rich red curry sauce with bell peppers.',
        'image' => 'https://i.pinimg.com/736x/f6/7d/13/f67d13f82d372cbf8fe3a4f48f80975e.jpg',
        'price' => 14.00,
        'category' => 'beef',
    ],
    [
        'name' => 'Paneer Butter Masala',
        'description' => 'Cottage cheese cubes in a creamy tomato curry sauce.',
        'image' => 'https://i.pinimg.com/736x/19/22/a7/1922a733e7b674806011e7be08fa3657.jpg',
        'price' => 12.00,
        'category' => 'vegetarian',
    ],
    [
        'name' => 'Spicy Pork Vindaloo',
        'description' => 'Hot and tangy pork curry from Indian cuisine.',
        'image' => 'https://i.pinimg.com/736x/a6/e5/25/a6e525e2e1040bbd4fdc646357ea9123.jpg',
        'price' => 12.75,
        'category' => 'pork',
    ],
    [
        'name' => 'Massaman Curry Chicken',
        'description' => 'Thai curry with chicken, peanuts, and potatoes in coconut milk.',
        'image' => 'https://i.pinimg.com/736x/67/1c/f1/671cf11a8df968e91d3e606b18ea6c83.jpg',
        'price' => 13.99,
        'category' => 'chicken',
    ],
    [
        'name' => 'Beef Rendang',
        'description' => 'Slow-cooked beef in a rich, spiced coconut sauce.',
        'image' => 'https://i.pinimg.com/736x/93/0e/91/930e91e9500bf9814cd2bc003950d940.jpg',
        'price' => 15.00,
        'category' => 'beef',
    ],
    [
        'name' => 'Thai Vegetable Stir-Fry',
        'description' => 'Fresh vegetables stir-fried in a flavorful Thai sauce.',
        'image' => 'https://i.pinimg.com/736x/34/2b/14/342b14b6b718160dfb177ba7f44bd645.jpg',
        'price' => 11.50,
        'category' => 'vegetarian',
    ],
    [
        'name' => 'Pork Adobo',
        'description' => 'Filipino-style pork braised in vinegar, soy sauce, and spices.',
        'image' => 'https://i.pinimg.com/736x/b9/f6/1c/b9f61c263f36783eb5ef06de0fb14488.jpg',
        'price' => 12.50,
        'category' => 'pork',
    ],
    [
        'name' => 'Thai Green Vegetable Curry',
        'description' => 'A healthy mix of vegetables in a creamy Thai green curry sauce.',
        'image' => 'https://i.pinimg.com/736x/aa/0e/a1/aa0ea11c79f26a0918cffe8805cb269d.jpg',
        'price' => 11.99,
        'category' => 'vegetarian',
    ],
];



        foreach ($curries as $curry) {
            Curry::create($curry);
        }
    }
}
