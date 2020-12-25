@extends('back-end.master.master_admin')
@section('title','Add Product')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Add Product</h1>
            <hr>
            <form enctype="multipart/form-data" action="{{route('product.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Image </label>
                    <input type="file"
                           class=" @error('image') border-danger @enderror" name="image">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Product Name </label>
                    <input type="text" value="{{old('name')}}"
                           class="form-control @error('name') border-danger @enderror" name="name"
                           placeholder="Enter Name Product">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <lable><b>Type</b> </lable>
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
                    <input type="text" value="{{old('status')}}"
                           class="form-control @error('status') border-danger @enderror" name="status"
                           placeholder="Enter Status">
                    @error('status')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" value="{{old('price')}}"
                           class="form-control @error('price') border-danger @enderror " name="price"
                           placeholder="Enter Price">
                    @error('price')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>DES</label>
                    <textarea type="text"
                           class="form-control @error('note') border-danger @enderror" name="note"
                              placeholder="Enter Description ">{{old('note')}}</textarea>
                    @error('note')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{route('product.index')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div>

@endsection
