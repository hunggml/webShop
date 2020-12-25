@extends('back-end.master.master_admin')
@section('title','Edit Type')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Edit Type</h1>
            <hr>
            <form method="post"
                  action="{{ route('type.update', $type->id) }}">
                @csrf
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" class="form-control" name="name"
                           value="{{ $type->name }}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{route('type.index')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div>

@endsection
