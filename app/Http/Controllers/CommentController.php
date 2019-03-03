<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use App\Product;

class commentController extends Controller
{   
    protected $comment;

    public function getlist()
    {   
        $product = product::all();
        $user = user::all();
        $comment = comment::all();
        return view('admin.comment.list', compact('comment'),compact('user'),compact('product'));
    }

    public function getedit($id)
    {   
        $comment = comment::find($id);

        return view('admin.comment.edit', ['comment' => $comment]);
    }

    public function getdelete($id)
    {
        $comment = comment::find($id);
        $comment->delete();
        return redirect('admin/comment/list')->with('thongbao', ' ban da xoa thanh cong');
    }

    public function postedit(Request $request,$id)
    {
        $comment = comment::find($id);
        $this->validate($request,
        [
            'content' => 'required|unique:comments,content|min:1|max:100'
        ],
        [
            'content.required' => 'ban chua nhap comment content',
            'content.unique' => 'content da ton tai',
            'content.min' => 'comment content phai co do dai tu 2 cho den 100 ky tu',
            'content.max' => 'comment content phai co do dai tu 2 cho den 100 ky tu',
        ]
        );
        $comment->content = $request->content;
        $comment->user_id = $request->user_id;
        $comment->product_id =$request->product_id;
        $comment->content = changeTitle($request->content);
        $comment->save();

        return redirect('admin/comment/edit/'.$comment->id)->with('thongbao', 'edit thanh cong');
    }
}