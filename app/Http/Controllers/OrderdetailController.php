<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\orderDetail;

class orderdetailController extends Controller
{   
    protected $orderdetail;

    public function getlist()
    {   
        $product = product::all();
        $orderdetail = orderdetail::all();
        return view('admin.order.orderdetails_list', compact('orderdetail'),compact('product'));
    }

    public function getedit($id)
    {   $order = order::all();
        $orderdetail = orderDetail::find($id);
        $product = product::all();
        return view('admin.order.orderdetail_edit', ['orderdetail' => $orderdetail],compact("product"),compact("order"));
    }

    public function getdelete($id)
    {
        $orderdetail = orderdetail::find($id);
        $orderdetail->delete();
        return redirect('admin/order/orderdetails_list')->with('thongbao', ' ban da xoa thanh cong');
    }

    public function postedit(Request $request,$id)
    {
        $orderdetail = orderdetail::find($id);
        $this->validate($request,
        [
            'product_name' => 'required|unique:order_details,product_name|min:1|max:100'
        ],
        [
            'product_name.required' => 'ban chua nhap orderdetail product_name',
            'product_name.unique' => 'product_name da ton tai',
            'product_name.min' => 'orderdetail product_name phai co do dai tu 2 cho den 100 ky tu',
            'product_name.max' => 'orderdetail product_name phai co do dai tu 2 cho den 100 ky tu',
        ]
        );
        $orderdetail->product_name = $request->product_name;
        $orderdetail->quantity_price = $request->quantity_price;
        $orderdetail->price = $request->prrice;
        $orderdetail->product_id = $request->product_id;
        $orderdetail->order_id = $request->order_id;
        $orderdetail->product_name = changeTitle($request->product_name);
        $orderdetail->save();

        return redirect('admin/order/orderdetail_edit/'.$orderdetail->id)->with('thongbao', 'edit thanh cong');
    }
}