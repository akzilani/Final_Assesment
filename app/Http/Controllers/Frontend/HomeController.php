<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $products= Product::where("status",1)->get();
          return view('Frontend.products.index',compact('products'));

    }
    public function show($id){
        $data['products']=Product::find($id);
        return view('Frontend.products.show',$data);
    }

}
