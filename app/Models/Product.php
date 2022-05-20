<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function products (){
        return [
            0=> [
                'id'=> 1,
                'category_id' => 1,
                'name' => 'T-shirt',
                'image' => 'asset/img/tshirt.jpg',
                'price' => '280',
                'description' => 'this is a pure tshirt for you',
            ],
            1=> [
                'id'=> 2,
                'category_id' => 2,
                'name' => 'shirt',
                'image' => 'asset/img/shirtjpg.jpg',
                'price' => '290',
                'description' => 'This shirt is a pure cotton',
            ],
            2=> [
                'id'=> 3,
                'category_id' => 1,
                'name' => 'Pant',
                'image' => 'asset/img/pant.jpg',
                'price' => '290',
                'description' => 'This Pant is a pure cotton',
            ],
        ];
    }
}
