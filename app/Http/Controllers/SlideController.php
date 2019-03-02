<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class slideController extends Controller
{   
    protected $slide;

    public function getlist()
    {
        $slide = slide::all();
        return view('admin.slide.list', ['slide'=>$slide]);
    }

    public function getadd()
    {
        return view('admin.slide.add');
    }

    public function postadd(Request $request)
    {   
        //echo $request->name;
        $this->validate($request,
            [
                'name' => 'required|min:1|max:100|unique:slides,name'
            ],
            [
                'name.required' => 'ban chua nhap slide name',
                'name.unique' => 'name da ton tai',
                'name.min' => 'slide name loai phai co do dai tu 2 den 100 ky tu',
                'name.max' => 'slide name phai co do dai tu 2 den 100 ky tu',
            ]);
        $slide = new slide;
        $slide->name = $request->name;
        $slide->url = $request->url;
        $slide->name = changeTitle($request->name);
        $slide->save();

        return redirect('admin/slide/add')->with('thongbao', 'them thanh cong');
    }

    public function getedit($id)
    {   
        $slide = slide::find($id);

        return view('admin.slide.edit', ['slide' => $slide]);
    }

    public function getdelete($id)
    {
        $slide = slide::find($id);
        $slide->delete();
        return redirect('admin/slide/list')->with('thongbao', ' ban da xoa thanh cong');
    }

    public function postedit(Request $request,$id)
    {
        $slide = slide::find($id);
        $this->validate($request,
        [
            'name' => 'required|unique:slides,name|min:1|max:100'
        ],
        [
            'name.required' => 'ban chua nhap slide name',
            'name.unique' => 'name da ton tai',
            'name.min' => 'slide name phai co do dai tu 2 cho den 100 ky tu',
            'name.max' => 'slide name phai co do dai tu 2 cho den 100 ky tu',
        ]
        );
        $slide->name = $request->name;
        $slide->url = $request->url;
        $slide->name = changeTitle($request->name);
        $slide->save();

        return redirect('admin/slide/edit/'.$slide->id)->with('thongbao', 'edit thanh cong');
    }
}