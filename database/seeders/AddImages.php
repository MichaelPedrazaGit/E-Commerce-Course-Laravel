<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Product;
use PhpParser\Node\Stmt\Switch_;
use Illuminate\Support\Facades\DB;

class AddImages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    $product_id_Shirt = DB::table('products')->where('name', 'Shirt')->first();
    $product_id_Hublot = DB::table('products')->where('name', 'Hublot')->first();
    $product_id_Apple = DB::table('products')->where('name', 'Apple MacBook Air 2020')->first();
    $product_id_Xbox = DB::table('products')->where('name', 'Xbox Series S')->first();

        $arrayImages = [
            "images1" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "product_id" => $product_id_Shirt->id,
                "url" => array(
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/shirt1.jpg?alt=media&token=be65c850-8110-489c-826a-5c00b6d8facd",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/shirt2.jpg?alt=media&token=d409f070-3d51-4532-8ae7-d97eda816650",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/shirt3.jpg?alt=media&token=3ad21c9f-4a4c-4c8b-be47-b62b17e064ac",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/shirt4.jpg?alt=media&token=94762639-068b-4ba3-bc5c-107364c3ac1b",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/shirt5.jpg?alt=media&token=112e7c1e-d3a5-4628-bcab-6d14ce68f4cd",       
                ),
            ),
            "images2" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "product_id" => $product_id_Hublot->id,
                "url" => array(
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/watch1.jpg?alt=media&token=9048dba6-46fb-4044-ac30-2f42497ece05",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/watch2.jpg?alt=media&token=80b21522-aeb4-4562-b577-554e047dc55e",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/watch3.jpg?alt=media&token=c3f91930-7fb4-4494-8ce2-2fa33e13f78d",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/watch4.jpg?alt=media&token=20f6b57b-3376-4563-8c89-b37ff1bd20e9",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/watch5.jpg?alt=media&token=5cd08ef1-7e89-4017-a9b6-c497d565857c",                     
                ),
            ),
            "images3" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "product_id" => $product_id_Apple->id,
                "url" => array(
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/macBook1.jpg?alt=media&token=e5562fbc-8bbb-4222-9838-f65272004dfe",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/macBook2.jpg?alt=media&token=a6c9708c-b9d6-4634-8b62-9f1b373610da",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/macBook3.jpg?alt=media&token=dfee7104-a561-4f5a-9b71-8ddd75136f6e",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/macBook4.jpg?alt=media&token=d78dbb87-a202-4ffa-a050-4a78e1ca6d97",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/macBook5.jpg?alt=media&token=44c27a31-c6e8-4e49-905b-d3276694bfce",
                ),
            ),
            "images4" => array(
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s'),
                "product_id" => $product_id_Xbox->id,
                "url" => array(
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/xboxSX1.jpg?alt=media&token=bbc5d3f0-43d2-4cbd-b22d-5ec7a9afcd45",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/xboxSX2.jpg?alt=media&token=3692a66e-75bb-467d-877e-a1cf54e9b758",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/xboxSX3.jpg?alt=media&token=d12a6ba7-592e-410f-9419-4af442000000",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/xboxSX4.jpg?alt=media&token=a549890b-a8b7-4edb-9720-c76aa3554bdb",
                    "https://firebasestorage.googleapis.com/v0/b/e-commerce-la.appspot.com/o/xboxSX5.jpg?alt=media&token=3374f563-90a1-40c0-945e-7215909a6dc4",   
                ),
            )

        ];
        foreach ($arrayImages as $image){
            $created_at = 0;
            $updated_at = 0;
            $product_id = 0;
            if (is_array($image)) {
                foreach ($image as $keyImage => $valueImage){
                    switch ($keyImage) {
                        case 'created_at':
                            $created_at = $valueImage;
                            break;
                        case 'updated_at':
                            $updated_at = $valueImage;
                            break;
                        case 'product_id':
                            $product_id = $valueImage;
                            break;
                        case 'url':
                            if (is_array($valueImage)){
                                foreach ($valueImage as $keyUrl => $valueUrl) {
                                    $imagesAdd = new Image();
                                    $imagesAdd -> url = $valueUrl;
                                    $imagesAdd -> created_at = $created_at;
                                    $imagesAdd -> updated_at = $updated_at;
                                    $imagesAdd -> product_id = $product_id;
                                    $imagesAdd -> save();
                                }
                            }
                            break;
                            default:
                            break;
                    }
                }
            }
        }
    }
}
