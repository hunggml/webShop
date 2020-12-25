@extends('back-end.master.master_admin')
@section('title','Edit Product')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Edit Product</h1>
            <hr>
            <form enctype="multipart/form-data"
                  method="post"
                  action="{{ route('product.update', $product->id) }}">
                @csrf
                <div class="form-group">
                    <label>Image Name</label>
                    <input type="file" name="image"
                           value="{{ $product->image }}">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="name"
                           value="{{ $product->name }}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <lable><b>Type</b></lable>
                    <br>
                    <br>
                    <select class="form-control" name="type">
                        @foreach($type as $value)
                            <option value="{{$value->name}}">{{$value->name}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status"
                           value="{{ $product->status }}">
                    @error('status')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price"
                           value="{{ $product->price }}">
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>DES</label>
                    <textarea type="text" class="form-control" name="note" >{{$product->note}}</textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{route('product.index')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div>

@endsection
