<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;

class orderController extends Controller
{   
    protected $order;

    public function getlist()
    {   
        $user = user::all();
        $order = order::all();
        return view('admin.order.list', compact('order'),compact('user'));
    }

    public function getedit($id)
    {   
        $order = order::find($id);
        $user = user::all();
        return view('admin.order.edit', ['order' => $order],compact("user"));
    }

    public function getdelete($id)
    {
        $order = order::find($id);
        $order->delete();
        return redirect('admin/order/list')->with('thongbao', ' ban da xoa thanh cong');
    }

    public function postedit(Request $request,$id)
    {
        $order = order::find($id);
        $this->validate($request,
        [
            'fullname' => 'required|unique:orders,fullname|min:1|max:100'
        ],
        [
            'fullname.required' => 'ban chua nhap order fullname',
            'fullname.unique' => 'fullname da ton tai',
            'fullname.min' => 'order fullname phai co do dai tu 2 cho den 100 ky tu',
            'fullname.max' => 'order fullname phai co do dai tu 2 cho den 100 ky tu',
        ]
        );
        $order->fullname = $request->fullname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->payment = $request->payment;
        $order->status = $request->status;
        $order->user_id = $request->user_id;
        $order->fullname = changeTitle($request->fullname);
        $order->save();

        return redirect('admin/order/edit/'.$order->id)->with('thongbao', 'edit thanh cong');
    }
}