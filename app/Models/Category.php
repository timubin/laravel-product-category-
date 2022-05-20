<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Category extends Model
{
    use HasFactory;

    public static function allCategoty(){
        return [
            0=> [
                'id'=>1,
                'name'=> 'Man Fashion',
            ],
            1=> [
                'id'=> 2,
                'name' => "Woman Fashion",
            ],

            2 => [
                'id'=>3,
                'name' => "Kids Fashion",
            ],
            3 => [
                'id'=>4,
                'name' => "Electronics",
            ],
        ];
    }
}
