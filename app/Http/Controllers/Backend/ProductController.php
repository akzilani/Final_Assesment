<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Backend\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){

        $data['products']=Product::all();
        return view('Backend.products.index',$data);

    }
    public function create(){
        return view('Backend.products.create');
    }
    public function  store(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'category_name '=>'required',
        //     'brand_name'=>'required',
        //     'status'=>'required',
        //     'description'=>'required',
        //     'image'=>'required',
        // ]);

        $data=new Product();
            $input = $request->all();
            $image = $request->image;
                if($image){

                    @unlink($data->image);
                    $uniqname = uniqid();
                    $ext = strtolower($image->getClientOriginalExtension());
                    $filepath = 'uploads/products/';
                    $imagename = $filepath.$uniqname.'.'.$ext;
                    $image->move($filepath,$imagename);


                    $input['image'] = $imagename;

                }

                $data->fill($input)->save();

       // return view('Backend.products.create');
        return redirect()->route('admin');
    }


    public function edit($id){
        $data['products']=Product::find($id);
        return view('Backend.products.edit',$data);
    }


    public function update(Request $request,$id){

        $data=Product::find($id);
        $input = $request->all();
        $image = $request->image;
            if($image){

                @unlink($data->image);
                $uniqname = uniqid();
                $ext = strtolower($image->getClientOriginalExtension());
                $filepath = 'uploads/products/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $image->move($filepath,$imagename);


                $input['image'] = $imagename;

            }

            $data->fill($input)->save();

            return redirect()->route('admin');

    }

    public function delete($id){

        $product = Product::find($id);
        // if(File::exists("backend/images/".$product->pic)){
        //     File::delete("backend/images/".$product->pic);
        // }
        $product->delete();
        return redirect()->route('admin');
    }
}
