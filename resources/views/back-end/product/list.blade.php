@extends('back-end.master.master_admin')
@section('title','Product List')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Product List</h3>
                                </div>
                                <div class="error-message">
                                    @if ($errors->any())
                                        @foreach($errors->all() as $nameError)
                                            <p style="color:red">{{ $nameError }}</p>
                                        @endforeach
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" >
                                    <a style="color: white" class="btn btn-primary mb-2 ml-2"
                                       href="{{route('product.create')}}">Add
                                        Product</a>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>P-Id</th>
                                            <th>Image</th>
                                            <th>P-Name</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th>Price($)</th>
                                            <th>DES</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($product as $key => $value)
                                            <tr>
                                                <th scope="row">{{ $value->id }}</th>
                                                <td><img style="width: 150px ; height: auto"
                                                         src='{{asset("$value->image")}}' alt="image"></td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->type }}</td>
                                                <td>{{ $value->status }}</td>
                                                <td>{{number_format($value->price,2,",",".")}}</td>
                                                <td>{{ $value->note }}</td>
                                                <td><a class="btn btn-success"
                                                       href="{{ route('product.edit',$value->id)}}"><i class="far fa-edit"></i></a>
                                                    <a href="{{ route('product.destroy', $value->id) }}"
                                                       class="btn btn-danger"
                                                       onclick="return confirm('Are you sure you want to delete?')"><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
@endsection
