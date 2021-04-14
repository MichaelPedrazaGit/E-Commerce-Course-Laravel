<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class AddProducts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $arrayProducts = [
            "product1" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "name" => "Shirt",
                "description" => "Red T-shirt With Black Logo",
                "price" => 89900,
                "score" => 4,
                "available" => 1,
            ),
            "product2" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "name" => "Hublot",
                "description" => "Hublot Automatic chronograph watch, gold color",
                "price" => 9442658,
                "score" => 3,
                "available" => 1,
            ),
            "product3" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "name" => "Apple MacBook Air 2020",
                "description" => "Apple MacBook Air 2020 with Apple M1 Chip (13-inch, 8GB RAM, 256GB SSD Storage) - Gold",
                "price" => 4999999,
                "score" => 4,
                "available" => 1,
            ),
            "product4" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "name" => "Xbox Series S",
                "description" => "Xbox Series X, the fastest, most powerful Xbox ever. Play thousands of titles from four Generations of Consoles",
                "price" => 2259900,
                "score" => 4,
                "available" => 1,
            )
        ];
        foreach ($arrayProducts as $product){
            $productAdd = new Product();
            if (is_array($product)) {
                foreach ($product as $key => $value){
                    $productAdd -> $key = $value;
                }
                $productAdd -> save();
            }
        }
    }
}