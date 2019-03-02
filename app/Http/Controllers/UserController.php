<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{   
    protected $user;

    public function getlist()
    {
        $user = User::all();
        return view('admin.user.list', ['user'=>$user]);
    }

    public function getadd()
    {
        return view('admin.user.add');
    }

    public function postadd(Request $request)
    {   
        //echo $request->name;
        $this->validate($request,
            [
                'name' => 'required|min:1|max:100|unique:users,name'
            ],
            [
                'name.required' => 'ban chua nhap user name',
                'name.unique' => 'name da ton tai',
                'name.min' => 'user name loai phai co do dai tu 2 den 100 ky tu',
                'name.max' => 'user name phai co do dai tu 2 den 100 ky tu',
            ]);
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address= $request->address;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->name = changeTitle($request->name);
        $user->save();

        return redirect('admin/user/add')->with('thongbao', 'them thanh cong');
    }

    public function getedit($id)
    {   
        $user = user::find($id);

        return view('admin.user.edit', ['user' => $user]);
    }

    public function getdelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list')->with('thongbao', ' ban da xoa thanh cong');
    }

    public function postedit(Request $request,$id)
    {
        $user = User::find($id);
        $this->validate($request,
        [
            'name' => 'required|unique:users,name|min:1|max:100'
        ],
        [
            'name.required' => 'ban chua nhap user name',
            'name.unique' => 'name da ton tai',
            'name.min' => 'user name phai co do dai tu 2 cho den 100 ky tu',
            'name.max' => 'user name phai co do dai tu 2 cho den 100 ky tu',
        ]
        );
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address= $request->address;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->name = changeTitle($request->name);
        $user->save();

        return redirect('admin/user/edit/'.$user->id)->with('thongbao', 'edit thanh cong');
    }
}