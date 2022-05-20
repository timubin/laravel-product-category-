<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class CategoryController extends Controller
{
    protected $categories;
    protected $products;
    protected $results = [];
    public function index (){
     /*    $cat = new Category();
        $this->categories = $cat->allCategoty(); */

        $this->categories = Category::allCategoty();
        // return $this->categories;
        return view('category.show', ['categories'=>$this->categories]);
    }


    public function allProducts(){
        $this->products = Product::products();
        return view('products.show', ['products'=>$this->products]);
    }

    public function categoryWiseProducts ($id){
        $this->products = Product::products();
        foreach ($this->products as $product){
           if ($product['category_id']== $id){
               array_push($this->results, $product);
           }
        }

        return view ('products.show', ['products' => $this->results]);
    }
}
