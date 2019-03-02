@extends('admin.layout.master')        

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>title</th>
                                <th>description</th>
                                <th>size</th>
                                <th>memory</th>
                                <th>weights</th>
                                <th>color</th>
                                <th>cpu</th>
                                <th>ram</th>
                                <th>screen</th>
                                <th>battery</th>
                                <th>bluetooth</th>
                                <th>camera_primary</th>
                                <th>camera_secondary</th>
                                <th>image</th>
                                <th>quantity</th>
                                <th>price</th>
                                <th>promotion_price</th>
                                <th>status</th>
                                <th>category_name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $tl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tl->id}}</td>
                                <td>{{$tl->name}}</td>
                                <td>{{$tl->title}}</td>
                                <td>{{$tl->description}}</td>
                                <td>{{$tl->size}}</td>
                                <td>{{$tl->memory}}</td>
                                <td>{{$tl->weights}}</td>
                                <td>{{$tl->color}}</td>
                                <td>{{$tl->cpu}}</td>
                                <td>{{$tl->ram}}</td>
                                <td>{{$tl->screen}}</td>
                                <td>{{$tl->battery}}</td>
                                <td>{{$tl->bluetooth}}</td>
                                <td>{{$tl->camera_primary}}</td>
                                <td>{{$tl->camera_secondary}}</td>
                                <td>{{$tl->image}}</td>
                                <td>{{$tl->quantity}}</td>
                                <td>{{$tl->price}}</td>
                                <td>{{$tl->promotion_price}}</td>
                                <td>{{$tl->status}}</td>
                                <td>{{$tl->categories->name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{url('admin/product/delete/'.$tl->id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url('admin/product/edit/'.$tl->id)}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

@endsection