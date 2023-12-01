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

        $request->validate
                    ([
                       'name' => 'required | string | min:5 | max:100',
                       'quantity' => 'required | alpha | min:1 | max:20',
                       'price' => 'required',
                   ],
                   [
                       'name.required' =>  'A Product must have Name',
                       'name.string' => 'Please Give Character Value',
                       'name.min' => 'Product Name must be more then 5 char',
                       'name.max' => 'Product Name must be less then 100 char',
                       'quantity.required' => 'Please give a Quantity',
                       'price.required' => 'Product Price Required',
                   ]);

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

