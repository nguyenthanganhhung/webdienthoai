@extends('admin.layout.master')
@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">comment
                            <small>{{$comment->id}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                         @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                <strong>{{$err}}</strong><br>
                            @endforeach
                        </div>
                    @endif

                    <!-- Thông báo công việc đã được thực hiện -->
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            <strong>{{session('thongbao')}}</strong>
                        </div>
                    @endif
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Content</label>
                                <input class="form-control" name="content" placeholder="Please Enter content" value="{{$comment->content}}" />
                            </div>

                            <div class="form-group">
                                <label>user name</label>
                                <input class="form-control" name="user_id" placeholder="Please Enter user name" value="{{$comment->user_id}}" />
                            </div>

                            <div class="form-group">
                                <label>product name</label>
                                <input class="form-control" name="product_id" placeholder="Please Enter product name" value="{{$comment->product_id}}" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection