@extends('back-end.master.master_admin')
@section('title','Add Product-Detail')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Add Product-Detail</h1>
            <hr>
            <form  action="{{route('productDetail.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <lable><b>Product-Id</b> </lable>
                    <br>
                    <br>
                    <select class="form-control" name="product_id">
                        @foreach($product as $value)
                            <option value="{{$value->id}}">{{$value->id}}</option>
                        @endforeach
                    </select>
                </div>
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
                    <input type="text" value="{{old('size')}}"
                           class="form-control @error('size') border-danger @enderror" name="size"
                           placeholder="Enter Size">
                    @error('size')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>RAM(G)</label>
                    <input type="text" value="{{old('ram')}}"
                           class="form-control @error('ram') border-danger @enderror " name="ram"
                           placeholder="Enter RAM">
                    @error('ram')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Capacity(G)</label>
                    <input type="text" value="{{old('capacity')}}"
                              class="form-control @error('capacity') border-danger @enderror" name="capacity"
                              placeholder="Enter Capacity ">
                    @error('capacity')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>SIM</label>
                    <input type="text" value="{{old('sim')}}"
                           class="form-control @error('sim') border-danger @enderror" name="sim"
                           placeholder="Enter SIM ">
                    @error('sim')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Screen-Size</label>
                    <input type="text" value="{{old('screen_size')}}"
                           class="form-control @error('screen_size') border-danger @enderror" name="screen_size"
                           placeholder="Enter Screen Size ">
                    @error('screen_size')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>CPU</label>
                    <input type="text" value="{{old('cpu')}}"
                           class="form-control @error('cpu') border-danger @enderror" name="cpu"
                           placeholder="Enter CPU ">
                    @error('cpu')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>GPU</label>
                    <input type="text" value="{{old('gpu')}}"
                           class="form-control @error('gpu') border-danger @enderror" name="gpu"
                           placeholder="Enter GPU ">
                    @error('gpu')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>PIN</label>
                    <input type="text" value="{{old('pin')}}"
                           class="form-control @error('pin') border-danger @enderror" name="pin"
                           placeholder="Enter PIN ">
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
