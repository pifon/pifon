<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipes')->insert(values: [
            [
                'slug' => 'pizza',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Pizza',
                'description' => null,
                'cuisine_id' => 1,
                'type_id' => 1
            ],
            [
                'slug' => 'pasta',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Pasta',
                'description' => null,
                'cuisine_id' => 1,
                'type_id' => 1
            ],
            [
                'slug' => 'spaghetti',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Spaghetti',
                'description' => null,
                'cuisine_id' => 1,
                'type_id' => 1
            ],
            [
                'slug' => 'risotto',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Risotto',
                'description' => null,
                'cuisine_id' => 1,
                'type_id' => 1
            ],
            [
                'slug' => 'gelato',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Gelato',
                'description' => null,
                'cuisine_id' => 1,
                'type_id' => 6
            ],
            [
                'slug' => 'tiramisu',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Tiramisu',
                'description' => null,
                'cuisine_id' => 1,
                'type_id' => 6
            ],
            [
                'slug' => 'dumplings',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Dumplings',
                'description' => null,
                'cuisine_id' => 14,
                'type_id' => 1
            ],
            [
                'slug' => 'sweet-and-sour-pork',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Sweet and Sour Pork',
                'description' => null,
                'cuisine_id' => 14,
                'type_id' => 1
            ],
            [
                'slug' => 'fried-rice',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Fried Rice',
                'description' => null,
                'cuisine_id' => 14,
                'type_id' => 1
            ],
            [
                'slug' => 'peking-duck',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Peking Duck',
                'description' => null,
                'cuisine_id' => 14,
                'type_id' => 1
            ],
            [
                'slug' => 'kung-pao-chicken',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Kung Pao Chicken',
                'description' => null,
                'cuisine_id' => 14,
                'type_id' => 1
            ],
            [
                'slug' => 'butter-chicken',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Butter Chicken',
                'description' => null,
                'cuisine_id' => 27,
                'type_id' => 1
            ],
            [
                'slug' => 'biryani',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Biryani',
                'description' => null,
                'cuisine_id' => 27,
                'type_id' => 1
            ],
            [
                'slug' => 'samosas',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Samosas',
                'description' => null,
                'cuisine_id' => 27,
                'type_id' => 1
            ],
            [
                'slug' => 'naan',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Naan',
                'description' => null,
                'cuisine_id' => 27,
                'type_id' => 1
            ],
            [
                'slug' => 'tikka-masala',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Tikka Masala',
                'description' => null,
                'cuisine_id' => 27,
                'type_id' => 1
            ],
            [
                'slug' => 'taco',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Taco',
                'description' => null,
                'cuisine_id' => 41,
                'type_id' => 1
            ],
            [
                'slug' => 'buritto',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Burrito',
                'description' => null,
                'cuisine_id' => 41,
                'type_id' => 1
            ],
            [
                'slug' => 'enchilada',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Enchilada',
                'description' => null,
                'cuisine_id' => 41,
                'type_id' => 1
            ],
            [
                'slug' => 'guacamole',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Guacamole',
                'description' => null,
                'cuisine_id' => 41,
                'type_id' => 1
            ],
            [
                'slug' => 'mexican-churros',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Mexican Churros',
                'description' => null,
                'cuisine_id' => 41,
                'type_id' => 1
            ],
            [
                'slug' => 'sushi',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Sushi',
                'description' => null,
                'cuisine_id' => 53,
                'type_id' => 17
            ],
            [
                'slug' => 'sashimi',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Sashimi',
                'description' => null,
                'cuisine_id' => 53,
                'type_id' => 17
            ],
            [
                'slug' => 'ramen',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Ramen',
                'description' => null,
                'cuisine_id' => 53,
                'type_id' => 15
            ],
            [
                'slug' => 'tempura',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Tempura',
                'description' => null,
                'cuisine_id' => 53,
                'type_id' => 1
            ],
            [
                'slug' => 'miso',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Miso',
                'description' => null,
                'cuisine_id' => 53,
                'type_id' => 15
            ],
            [
                'slug' => 'burger',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Burger',
                'description' => null,
                'cuisine_id' => 54,
                'type_id' => 18
            ],
            [
                'slug' => 'bbq-ribs',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'BBQ Ribs',
                'description' => null,
                'cuisine_id' => 54,
                'type_id' => 1
            ],
            [
                'slug' => 'apple-pie',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Apple Pie',
                'description' => null,
                'cuisine_id' => 54,
                'type_id' => 6
            ],
            [
                'slug' => 'coq-au-vin',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Coq Au Vin',
                'description' => null,
                'cuisine_id' => 55,
                'type_id' => 14
            ],
            [
                'slug' => 'creme-brulee',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Creme Brulee',
                'description' => null,
                'cuisine_id' => 55,
                'type_id' => 6
            ],
            [
                'slug' => 'pad-thai',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Pad Thai',
                'description' => null,
                'cuisine_id' => 64,
                'type_id' => 14
            ],
            [
                'slug' => 'green-curry',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Green Curry',
                'description' => null,
                'cuisine_id' => 64,
                'type_id' => 14
            ],
            [
                'slug' => 'tom-yum',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Tom Yum',
                'description' => null,
                'cuisine_id' => 64,
                'type_id' => 15
            ],
            [
                'slug' => 'mango-sticky-rice',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Mango Sticky Rice',
                'description' => null,
                'cuisine_id' => 64,
                'type_id' => 14
            ],
            [
                'slug' => 'paella',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Paella',
                'description' => null,
                'cuisine_id' => 69,
                'type_id' => 14
            ],
            [
                'slug' => 'churros',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Churros',
                'description' => null,
                'cuisine_id' => 69,
                'type_id' => 2
            ],
            [
                'slug' => 'gazpacho',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Gazpacho',
                'description' => null,
                'cuisine_id' => 69,
                'type_id' => 14
            ],
            [
                'slug' => 'jamon-iberico',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Jamon Iberico',
                'description' => null,
                'cuisine_id' => 69,
                'type_id' => 14
            ],
            [
                'slug' => 'hummus',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Hummus',
                'description' => null,
                'cuisine_id' => 76,
                'type_id' => 16
            ],
            [
                'slug' => 'falafel',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Falafel',
                'description' => null,
                'cuisine_id' => 76,
                'type_id' => 14
            ],
            [
                'slug' => 'tabouleh',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Tabbouleh',
                'description' => null,
                'cuisine_id' => 76,
                'type_id' => 14
            ],
            [
                'slug' => 'kimchi',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Kimchi',
                'description' => null,
                'cuisine_id' => 83,
                'type_id' => 22
            ],
            [
                'slug' => 'bulgogi',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Bulgogi',
                'description' => null,
                'cuisine_id' => 83,
                'type_id' => 14
            ],
            [
                'slug' => 'bibimbap',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Bibimbap',
                'description' => null,
                'cuisine_id' => 83,
                'type_id' => 14
            ],
            [
                'slug' => 'tteokbokki',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Tteokbokki',
                'description' => null,
                'cuisine_id' => 83,
                'type_id' => 14
            ],
            [
                'slug' => 'moussaka',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Moussaka',
                'description' => null,
                'cuisine_id' => 88,
                'type_id' => 14
            ],
            [
                'slug' => 'souvlaki',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Souvlaki',
                'description' => null,
                'cuisine_id' => 88,
                'type_id' => 14
            ],
            [
                'slug' => 'tzatziki',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Tzatziki',
                'description' => null,
                'cuisine_id' => 88,
                'type_id' => 12
            ],
            [
                'slug' => 'baklava',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Baklava',
                'description' => null,
                'cuisine_id' => 88,
                'type_id' => 23
            ],
            [
                'slug' => 'greek-salad',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Greek Salad',
                'description' => null,
                'cuisine_id' => 88,
                'type_id' => 10
            ],
            [
                'slug' => 'shawarma',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Shawarma',
                'description' => null,
                'cuisine_id' => 94,
                'type_id' => 18
            ],
            [
                'slug' => 'kebab',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Kebab',
                'description' => null,
                'cuisine_id' => 94,
                'type_id' => 18
            ],
            [
                'slug' => 'pho',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Pho',
                'description' => null,
                'cuisine_id' => 100,
                'type_id' => 15
            ],
            [
                'slug' => 'banh-mi',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Banh Mi',
                'description' => null,
                'cuisine_id' => 100,
                'type_id' => 18
            ],
            [
                'slug' => 'spring-rolls',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Spring Rolls',
                'description' => null,
                'cuisine_id' => 100,
                'type_id' => 11
            ],
            [
                'slug' => 'bun-cha',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Bun Cha',
                'description' => null,
                'cuisine_id' => 100,
                'type_id' => 14
            ],
            [
                'slug' => 'baba-ganoush',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Baba Ganoush',
                'description' => null,
                'cuisine_id' => 104,
                'type_id' => 13
            ],
            [
                'slug' => 'fattoush',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Fattoush',
                'description' => null,
                'cuisine_id' => 104,
                'type_id' => 10
            ],
            [
                'slug' => 'risotto-lombardy',
                'variant_id' => 4,
                'author_id' => 1,
                'title' => 'Risotto',
                'description' => 'From Lombardy',
                'cuisine_id' => 2,
                'type_id' => 14
            ],
            [
                'slug' => 'ossobuco',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Ossobuco',
                'description' => 'Braised veal shanks',
                'cuisine_id' => 2,
                'type_id' => 24
            ],
            [
                'slug' => 'polenta',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Polenta',
                'description' => 'Cornmeal dish',
                'cuisine_id' => 2,
                'type_id' => 11
            ],
            [
                'slug' => 'panna-cotta',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Panna Cotta',
                'description' => 'desert',
                'cuisine_id' => 2,
                'type_id' => 6
            ],
            [
                'slug' => 'agnolotti',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Agnolotti',
                'description' => 'Stuffed pasta from Piedmont',
                'cuisine_id' => 2,
                'type_id' => 14
            ],
            [
                'slug' => 'margherita',
                'variant_id' => 1,
                'author_id' => 2,
                'title' => 'Pizza Margherita',
                'description' => 'From Naples',
                'cuisine_id' => 3,
                'type_id' => 14
            ],
            [
                'slug' => 'pasta-alla-norma',
                'variant_id' => 2,
                'author_id' => 1,
                'title' => 'Pasta alla Norma',
                'description' => 'From Sicily',
                'cuisine_id' => 3,
                'type_id' => 14
            ],
            [
                'slug' => 'caponata',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Caponata',
                'description' => 'Sicilian eggplant dish',
                'cuisine_id' => 3,
                'type_id' => 11
            ],
            [
                'slug' => 'parmigiana-di-melanzane',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Parmigiana di Melanzane',
                'description' => 'Eggplant Parmesan',
                'cuisine_id' => 3,
                'type_id' => 14
            ],
            [
                'slug' => 'focaccia',
                'variant_id' => null,
                'author_id' => 1,
                'title' => 'Focaccia',
                'description' => 'Flatbread',
                'cuisine_id' => 3,
                'type_id' => 26
            ],
        ]);
    }
}
