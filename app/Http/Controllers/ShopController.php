<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;

class ShopController extends Controller
{
    public function get_all_products()
    {
        $all_products = ShopModel::all();
        return view("all_products", compact('all_products'));
    }

    public function delete($product)
    {
        $single_product = ShopModel::where(['id' => $product])->first();
        
        if($single_product === null)
        {
            die("OVAJ PROIZVOD NE POSTOJI!");
        }
        else
        {
            $single_product->delete();
        }

        return redirect()->back();


    }

    
}
