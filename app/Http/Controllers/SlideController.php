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
        if($request->hasFile('url')) // Kiểm tra xem người dùng có upload hình hay không
        {
            $img_file = $request->file('url'); // Nhận file hình ảnh người dùng upload lên server
            
            $img_file_extension = $img_file->getClientOriginalExtension(); // Lấy đuôi của file hình ảnh

            if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg')
            {
                return redirect('admin/slide/add')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
            }

            $img_file_name = $img_file->getClientOriginalName(); // Lấy tên của file hình ảnh

            $random_file_name = str_random(4).'_'.$img_file_name; // Random tên file để tránh trường hợp trùng với tên hình ảnh khác trong CSDL
            while(file_exists('upload/anh/'.$random_file_name)) // Trường hợp trên gán với 4 ký tự random nhưng vẫn có thể xảy ra trường hợp bị trùng, nên bỏ vào vòng lặp while để kiểm tra với tên tất cả các file hình trong CSDL, nếu bị trùng thì sẽ random 1 tên khác đến khi nào ko trùng nữa thì thoát vòng lặp
            {
                $random_file_name = str_random(4).'_'.$img_file_name;
            }
            echo $random_file_name;

            $img_file->move('upload/anh',$random_file_name); // file hình được upload sẽ chuyển vào thư mục có đường dẫn như trên
            $slide->url = $random_file_name;
        }
        else{
            $slide->url = ''; // Nếu người dùng không upload hình thì sẽ gán đường dẫn là rỗng
        }
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