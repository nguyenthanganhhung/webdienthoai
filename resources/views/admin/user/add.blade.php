@extends('admin.layout.master')

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">user
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) >0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>

                            @endforeach
                        </div>
                        @endif

                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif

                        <form action="{{action('UserController@postadd')}}" method="POST">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="form-group">
                                <label>user Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter user Name" />
                            </div> 

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Please Enter user email" />
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" placeholder="Please Enter user phone" />
                            </div>

                            <div class="form-group">
                                <label>password</label>
                                <input class="form-control" name="password" placeholder="Please Enter user password" />
                            </div>

                            <div class="form-group">
                                <label>address</label>
                                <input class="form-control" name="address" placeholder="Please Enter user address" />
                            </div>

                            <div class="form-group">
                                <label>level</label>
                                <input class="form-control" name="level" placeholder="Please Enter user level" />
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