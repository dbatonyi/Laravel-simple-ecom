<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'images/cinnamon.jpeg',
            'title' => 'Cinnamon',
            'description' => 'Wannabe',
            'price' => 10
        ]);
        $product->save();
    }
}
