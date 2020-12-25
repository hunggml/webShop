@extends('back-end.master.master_admin')
@section('title',"Admin Customer")
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
                                    <h3 class="card-title">Customer List</h3>
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
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($customer as $key => $value)
                                            <tr>
                                                <th scope="row">{{ ++$key }}</th>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->dob }}</td>
                                                <td>{{ $value->phone }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->address }}</td>
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
