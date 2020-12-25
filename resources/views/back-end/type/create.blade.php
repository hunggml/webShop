@extends('back-end.master.master_admin')
@section('title','Add Type')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Add Type</h1>
            <hr>
            <form action="{{ route('type.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Type Name </label>
                    <input type="text" value="{{old('name')}}"
                           class="form-control @error('name') border-danger @enderror" name="name"
                           placeholder="Enter Name Customer">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" href="{{route('type.index')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div> 
@endsection
