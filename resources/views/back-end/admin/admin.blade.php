@extends('back-end.master.master_admin')
@section('title','Admin')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper" style="background-image: url({{asset('img/backkkk.jpg')}}) ; background-size: cover">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="far fa-chart-bar"></i>
                                    Pie Chart
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 col-md-3 text-center">
                                        <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2"
                                               data-width="90"
                                               data-height="90" data-fgColor="#3c8dbc" >

                                        <div class="knob-label">Product</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2"
                                               data-width="120"
                                               data-height="120" data-fgColor="#f56954">

                                        <div class="knob-label">Customer</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <input type="text" class="knob" value="10" data-skin="tron" data-thickness="0.1"
                                               data-width="90"
                                               data-height="90" data-fgColor="#00a65a">

                                        <div class="knob-label">Bum</div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-6 col-md-3 text-center">
                                        <input type="text" class="knob" value="100" data-skin="tron"
                                               data-thickness="0.2"
                                               data-angleArc="250" data-angleOffset="-125" data-width="120"
                                               data-height="120"
                                               data-fgColor="#00c0ef">

                                        <div class="knob-label">Pem</div>
                                    </div>
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </section>
        </div>
    </div>
@endsection
