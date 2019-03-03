@extends('admin.layout.master')        

@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">order
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>fullname</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>address</th>
                                <th>payment</th>
                                <th>status</th>
                                <th>user_id</th>
                                <th>orderdetail</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $tl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tl->id}}</td>
                                <td>{{$tl->users->name}}</td>
                                <td>{{$tl->users->email}}</td>
                                <td>{{$tl->users->phone}}</td>
                                <td>{{$tl->users->address}}</td>
                                <td>@if($tl->payment == 0)
                                        {{ 'Vietteenbank' }}
                                    @elseif($tl->payment == 1)
                                        {{ 'Agribank' }}
                                    @else
                                    {{'megabank'}}
                                    @endif</td>
                                <td>@if($tl->status == 0)
                                        {{ 'Không' }}
                                    @else
                                        {{ 'Có' }}
                                    @endif</td>
                                <td>{{$tl->users->id}}</td>
                               <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url('admin/order/orderdetails_list/'.$tl->id)}}">orderdetail</a></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{url('admin/order/delete/'.$tl->id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url('admin/order/edit/'.$tl->id)}}">Edit</a></td>
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