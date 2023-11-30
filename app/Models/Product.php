<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static $product;
    public static function saveInfo($request, $id=null)
    {
        if ($id!=null)
        {
            self::$product = Product::find($id);
        }
        else
        {
            self::$product = new Product();
        }

        self::$product->name = $request->name;
        self::$product->quantity = $request->quantity;
        self::$product->price = $request->price;
        self::$product->save();
    }

    public static function deleteInfo($id)
    {
        self::$product = Product::find($id);
        self::$product->delete();
    }
}

