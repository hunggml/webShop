@extends('back-end.master.master_admin')
@section('title','Edit Order')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Edit Order</h1>
            <hr>
            <form method="post"
                  action="{{ route('Order.update', $order->id) }}">
                @csrf
                <div class="form-group">
                    <label>Shipped Date</label>
                    <input type="date" class="form-control" name="date"
                           value="{{ $order->shippedDate }}">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="shipped">Shipped</option>
                        <option value="xuly">Đang chờ xử lý</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{route('Order.index')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div>

@endsection
