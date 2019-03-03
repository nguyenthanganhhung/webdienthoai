<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{   
    protected $category;

    public function getlist()
    {
        $category = category::all();
        return view('admin.category.list', ['category'=>$category]);
    }

    public function getadd()
    {
        return view('admin.category.add');
    }

    public function postadd(Request $request)
    {   
        //echo $request->name;
        $this->validate($request,
            [
                'name' => 'required|min:1|max:100|unique:categories,name'
            ],
            [
                'name.required' => 'ban chua nhap category name',
                'name.unique' => 'name da ton tai',
                'name.min' => 'category name loai phai co do dai tu 2 den 100 ky tu',
                'name.max' => 'category name phai co do dai tu 2 den 100 ky tu',
            ]);
        $category = new category;
        $category->name = $request->name;
        $category->level = $request->level;
        $category->name = changeTitle($request->name);
        $category->save();

        return redirect('admin/category/add')->with('thongbao', 'them thanh cong');
    }

    public function getedit($id)
    {   
        $category = category::find($id);

        return view('admin.category.edit', ['category' => $category]);
    }

    public function getdelete($id)
    {
        $category = category::find($id);
        $category->delete();
        return redirect('admin/category/list')->with('thongbao', ' ban da xoa thanh cong');
    }

    public function postedit(Request $request,$id)
    {
        $category = category::find($id);
        $this->validate($request,
        [
            'name' => 'required|unique:categories,name|min:1|max:100'
        ],
        [
            'name.required' => 'ban chua nhap category name',
            'name.unique' => 'name da ton tai',
            'name.min' => 'category name phai co do dai tu 2 cho den 100 ky tu',
            'name.max' => 'category name phai co do dai tu 2 cho den 100 ky tu',
        ]
        );
        $category->name = $request->name;
        $category->level = $request->level;
        $category->name = changeTitle($request->name);
        $category->save();

        return redirect('admin/category/edit/'.$category->id)->with('thongbao', 'edit thanh cong');
    }
}