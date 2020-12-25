@extends('back-end.master.master_admin')
@section('title','Product Detail')
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
                                    <h3 class="card-title">Product Detail</h3>
                                </div>
                                <div class="error-message">
                                    @if ($errors->any())
                                        @foreach($errors->all() as $nameError)
                                            <p style="color:red">{{ $nameError }}</p>
                                        @endforeach
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <a style="color: white" class="btn btn-primary mb-2 ml-2"
                                       href="{{route('productDetail.create')}}">Add
                                        Product Detail</a>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Product-Id</th>
                                            <th>Product-Name</th>
                                            <th>Size</th>
                                            <th>RAM(G)</th>
                                            <th>Capacity(G)</th>
                                            <th>SIM</th>
                                            <th>Screen-Size</th>
                                            <th>CPU</th>
                                            <th>GPU</th>
                                            <th>PIN</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productDetail as $key => $value)
                                            <tr>
                                                <td>{{$value->product_id}}</td>
                                                <td>{{$value->product_name}}</td>
                                                <td>{{ $value->size }}</td>
                                                <td>{{ $value->ram }}</td>
                                                <td>{{ $value->capacity }}</td>
                                                <td>{{ $value->sim }}</td>
                                                <td>{{ $value->screen_size }}</td>
                                                <td>{{ $value->cpu }}</td>
                                                <td>{{ $value->gpu }}</td>
                                                <td>{{ $value->pin }}</td>
                                                <td><a class="btn btn-success"
                                                       href="{{ route('productDetail.edit',$value->product_id)}}"><i class="far fa-edit"></i></a>

                                                    <a href="{{ route('productDetail.destroy', $value->product_id) }}"
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
