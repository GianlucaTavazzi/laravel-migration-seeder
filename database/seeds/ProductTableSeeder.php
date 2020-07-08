<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $new_product = new Product();
        // $new_product->name='shirt';
        // $new_product->price=49.99;
        // $new_product->save();
        // $dati_product = config('products');
        // foreach ($dati_product as $dato) {
        //     $new_product = new Product();
        //     $new_product->name= $dato['name'];
        //     $new_product->price=$dato['price'];
        //     $new_product->description=$dato['description'];
        //     $new_product->save();
        // }
        for ($i=0; $i < 10; $i++) {
            $new_product = new Product();
            $new_product->name= $faker->sentence(3);
            $new_product->price= $faker->randomFloat(2, 10, 1000);
            $new_product->description= $faker->text(50);
            $new_product->save();
        }
    }
}
