@extends('back-end.master.master_admin')
@section('title','Edit Product-Detail')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Add Product-Detail</h1>
            <hr>
            <form  action="{{route('productDetail.update',$productDetail->product_id)}}"
                   method="post">
                @csrf
                <div class="form-group">
                    <lable><b>Product-Name</b> </lable>
                    <br>
                    <br>
                    <select class="form-control" name="product_name">
                        @foreach($product as $value)
                            <option value="{{$value->name}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Size</label>
                    <input type="text" value="{{$productDetail->size}}"
                           class="form-control" name="size">
                    @error('size')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>RAM(G)</label>
                    <input type="text" value="{{$productDetail->ram}}"
                           class="form-control " name="ram">
                    @error('ram')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Capacity(G)</label>
                    <input type="text" value="{{$productDetail->capacity}}"
                           class="form-control " name="capacity">
                    @error('capacity')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>SIM</label>
                    <input type="text" value="{{$productDetail->sim}}"
                           class="form-control " name="sim">
                    @error('sim')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Screen-Size</label>
                    <input type="text" value="{{$productDetail->screen_size}}"
                           class="form-control " name="screen_size">
                    @error('screen_size')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>CPU</label>
                    <input type="text" value="{{$productDetail->cpu}}"
                           class="form-control " name="cpu">

                </div>
                <div class="form-group">
                    <label>GPU</label>
                    <input type="text" value="{{$productDetail->gpu}}"
                           class="form-control " name="gpu">
                </div>
                <div class="form-group">
                    <label>PIN</label>
                    <input type="text" value="{{$productDetail->pin}}"
                           class="form-control " name="pin">
                    @error('pin')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{route('productDetail.index')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div>

@endsection
