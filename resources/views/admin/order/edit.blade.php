@extends('admin.layout.master')
@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">order
                            <small>{{$order->id}}</small>
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
                                <label>fullname</label>
                                <input class="form-control" name="fullname" placeholder="Please Enter fullname" value="{{$order->users->name}}" />
                            </div>

                            <div class="form-group">
                                <label>email</label>
                                <input class="form-control" name="email" placeholder="Please Enter email" value="{{$order->users->email}}" />
                            </div>

                            <div class="form-group">
                                <label>phone</label>
                                <input class="form-control" name="phone" placeholder="Please Enter phone" value="{{$order->users->phone}}" />
                            </div>

                            <div class="form-group">
                                <label>address</label>
                                <input class="form-control" name="address" placeholder="Please Enter address" value="{{$order->users->address}}" />
                            </div>

                            <div class="form-group">
                                <label>payment</label>
                                <input class="form-control" name="payment" placeholder="Please Enter payment" value="{{$order->payment}}" />
                            </div>

                            <div class="form-group">
                                <label>status</label>
                                <input class="form-control" name="status" placeholder="Please Enter status" value="{{$order->status}}" />
                            </div>

                            <div class="form-group">
                                <label>user name</label>
                                <input class="form-control" name="user_id" placeholder="Please Enter user name" value="{{$order->user_id}}" />
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