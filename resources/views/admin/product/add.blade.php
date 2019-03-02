@extends('admin.layout.master')
@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">product
                            <small>Add</small>
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
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Name" />
                            </div>

                           <div class="form-group">
                                <label>title</label>
                                <input class="form-control" name="title" placeholder="Please Enter title" />
                            </div>

                            <div class="form-group">
                                <label>description</label>
                                <input class="form-control" name="desciption" placeholder="Please Enter description" />
                            </div>

                            <div class="form-group">
                                <label>size</label>
                                <input class="form-control" name="size" placeholder="Please Enter size" />
                            </div>

                            <div class="form-group">
                                <label>memory</label>
                                <input class="form-control" name="memory" placeholder="Please Enter memory" />
                            </div>

                            <div class="form-group">
                                <label>Weights</label>
                                <input class="form-control" name="weights" placeholder="Please Enter weights" />
                            </div>

                            <div class="form-group">
                                <label>color</label>
                                <input class="form-control" name="color" placeholder="Please Enter color" />
                            </div>

                            <div class="form-group">
                                <label>cpu</label>
                                <input class="form-control" name="cpu" placeholder="Please Enter cpu" />
                            </div>

                            <div class="form-group">
                                <label>ram</label>
                                <input class="form-control" name="ram" placeholder="Please Enter ram" />
                            </div>

                            <div class="form-group">
                                <label>screen</label>
                                <input class="form-control" name="screen" placeholder="Please Enter screen" />
                            </div>

                            <div class="form-group">
                                <label>battery</label>
                                <input class="form-control" name="battery" placeholder="Please Enter battery" />
                            </div>

                            <div class="form-group">
                                <label>bluetooth</label>
                                <input class="form-control" name="bluetooth" placeholder="Please Enter bluetooth" />
                            </div>

                            <div class="form-group">
                                <label>camera_primary</label>
                                <input class="form-control" name="camera_primary" placeholder="Please Enter camera_primary" />
                            </div>

                            <div class="form-group">
                                <label>camera_secondary</label>
                                <input class="form-control" name="camera_secondary" placeholder="Please Enter camera_secondary" />
                            </div>

                            <div class="form-group">
                                <label>image</label>
                                <input class="form-control" name="image" placeholder="Please Enter image" />
                            </div>

                            <div class="form-group">
                                <label>status</label>
                                <input class="form-control" name="status" placeholder="Please Enter status" />
                            </div>

                            <div class="form-group">
                                <label>quantity</label>
                                <input class="form-control" name="quantity" placeholder="Please Enter quantity" />
                            </div>

                            <div class="form-group">
                                <label>price</label>
                                <input class="form-control" name="price" placeholder="Please Enter price" />
                            </div>

                            <div class="form-group">
                                <label>promotion_price</label>
                                <input class="form-control" name="promotion_price" placeholder="Please Enter promotion_price" />
                            </div>

                            <div class="form-group">
                                <label>Category name</label>
                                <select class="form-control" name="category_id">
                                    @foreach($category as $tl)
                                    <option value="{{$tl->id}}" >{{$tl->name}}</option>
                                    @endforeach
                                </select>
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