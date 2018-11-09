<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\ProductCategory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 10; $i++) {
            $product_category = new ProductCategory;
            $product_category->name = $faker->word;
            $product_category->save();
        }
        for ($i = 0; $i < 1000; $i++) {
            $product = new Product;
            $product->name = $faker->word;
            $product->description = $faker->sentence;
            $product->price = $faker->randomFloat;
            $product->image = $faker->imageUrl(320, 240, 'cats');
            $product->category_id = ProductCategory::inRandomOrder()->first()->id;
            $product->save();
        }
    }
}
