@extends('back-end.master.master_admin')
@section('title',"Admin Order")
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
                                    <h3 class="card-title">Order List</h3>
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
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>OrderDate</th>
                                            <th>RequiredDate</th>
                                            <th>ShippedDate</th>
                                            <th>Status</th>
                                            <th>Customer_id</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order as $key => $value)
                                            <tr>
                                                <th scope="row">{{ ++$key }}</th>
                                                <td>{{ $value->orderDate }}</td>
                                                <td>{{ $value->requiredDate }}</td>
                                                <td>{{ $value->shippedDate }}</td>
                                                <td>{{ $value->status }}</td>
                                                <td>{{ $value->customer_id }}</td>
                                                <td><a class="btn btn-success"
                                                       href="{{route('Order.edit',$value->id)}}"><i class="far fa-edit"></i></a>
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
