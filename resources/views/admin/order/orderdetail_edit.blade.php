@extends('admin.layout.master')
@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">orderdetail
                            <small>{{$orderdetail->id}}</small>
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
                                <label>productname</label>
                                <input class="form-control" name="product_name" placeholder="Please Enter product_name" value="{{$orderdetail->product_name}}" />
                            </div>

                            <div class="form-group">
                                <label>quantity_price</label>
                                <input class="form-control" name="quantity_price" placeholder="Please Enter quantity_price" value="{{$orderdetail->quantity_price}}" />
                            </div>

                            <div class="form-group">
                                <label>price</label>
                                <input class="form-control" name="price" placeholder="Please Enter price" value="{{$orderdetail->products->price}}" />
                            </div>

                            <div class="form-group">
                                <label>product_id</label>
                                <input class="form-control" name="product_id" placeholder="Please Enter product_id" value="{{$orderdetail->product_id}}" />
                            </div>

                            <div class="form-group">
                                <label>order_id</label>
                                <input class="form-control" name="order_id" placeholder="Please Enter order_id" value="{{$orderdetail->order_id}}" />
                            </div>

                            <button type="submit" class="btn btn-default">edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection