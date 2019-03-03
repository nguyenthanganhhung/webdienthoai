@extends('admin.layout.master')        

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">orderdetail
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>productname</th>
                                <th>quantity_price</th>
                                <th>price</th>
                                <th>product_id</th>
                                <th>order_id</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderdetail as $tl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tl->id}}</td>
                                <td>{{$tl->products->name}}</td>
                                <td>{{$tl->quantiry_price}}</td>
                                <td>{{$tl->products->price}}</td>
                                <td>{{$tl->products->id}}</td>
                                <td>{{$tl->orders->id}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{url('admin/order/orderdetail_delete/'.$tl->id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url('admin/order/orderdetail_edit/'.$tl->id)}}">Edit</a></td>
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