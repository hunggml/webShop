@extends('back-end.master.master_admin')
@section('title','Edit Customer')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Edit Customer</h1>
            <hr>
            <form method="post"
                  action="{{ route('customer.update', $customer->id) }}">
                @csrf
                <div class="form-group">
                    <label>Customer Name</label>
                    <input type="text" class="form-control" name="name"
                           value="{{ $customer->name }}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Date Of Birth</label>
                    <input type="date" class="form-control" name="dob"
                           value="{{ $customer->dob }}">
                    @error('dob')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone"
                           value="{{ $customer->phone }}">
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email"
                           value="{{ $customer->email }}">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address"
                           value="{{$customer->address}}">
                    @error('address')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{route('customer.index')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div>

@endsection
