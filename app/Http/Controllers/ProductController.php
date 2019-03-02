<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class productController extends Controller
{   
    protected $product;

    public function getlist()
    {
        $product = product::all();
        return view('admin.product.list', ['product'=>$product]);
    }

    public function getadd()
    {   
        $category = category::all();
        return view('admin.product.add',['category' =>$category]);
    }

    public function postadd(Request $request)
    {   
        //echo $request->name;
        $this->validate($request,
            [
                'name' => 'required|min:1|max:100|unique:products,name'
            ],
            [
                'name.required' => 'ban chua nhap products name',
                'name.unique' => 'name da ton tai',
                'name.min' => 'product name loai phai co do dai tu 2 den 100 ky tu',
                'name.max' => 'product name phai co do dai tu 2 den 100 ky tu',
            ]);
        $product = new product;
        $product->name = $request->name;
        $product->title = $request->title;
        $product->description= $request->description;
        $product->size= $request->size;
        $product->memory= $request->memory;
        $product->weights= $request->weights;
        $product->color= $request->color;
        $product->cpu= $request->cpu;
        $product->ram= $request->ram;
        $product->screen= $request->screen;
        $product->battery= $request->battery;
        $product->bluetooth= $request->bluetooth;
        $product->camera_primary= $request->camera_primary;
        $product->camera_secondary= $request->camera_secondary;
        $product->image= $request->image;
        $product->quantity= $request->quantity;
        $product->price= $request->price;
        $product->promotion_price= $request->promotion_price;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->name = changeTitle($request->name);
        $product->save();

        return redirect('admin/product/add')->with('thongbao', 'them thanh cong');
    }

    public function getedit($id)

    {   $category = category::all();   
        $product = product::find($id);

        return view('admin.product.edit', ['product' => $product],['category'=>$category]);
    }

    public function getdelete($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect('admin/product/list')->with('thongbao', ' ban da xoa thanh cong');
    }

    public function postedit(Request $request,$id)
    {
        $product = product::find($id);
        $this->validate($request,
        [
            'name' => 'required|unique:products,name|min:1|max:100'
        ],
        [
            'name.required' => 'ban chua nhap product name',
            'name.unique' => 'name da ton tai',
            'name.min' => 'product name phai co do dai tu 2 cho den 100 ky tu',
            'name.max' => 'product name phai co do dai tu 2 cho den 100 ky tu',
        ]
        );
        $product->name = $request->name;
        $product->title = $request->title;
        $product->description= $request->description;
        $product->size= $request->size;
        $product->memory= $request->memory;
        $product->weights= $request->weights;
        $product->color= $request->color;
        $product->cpu= $request->cpu;
        $product->ram= $request->ram;
        $product->screen= $request->screen;
        $product->battery= $request->battery;
        $product->bluetooth= $request->bluetooth;
        $product->camera_primary= $request->camera_primary;
        $product->camera_secondary= $request->camera_secondary;
        $product->image= $request->image;
        $product->quantity= $request->quantity;
        $product->price= $request->price;
        $product->promotion_price= $request->promotion_price;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $product->name = changeTitle($request->name);
        $product->save();


        return redirect('admin/product/edit/'.$product->id)->with('thongbao', 'edit thanh cong');
    }
}