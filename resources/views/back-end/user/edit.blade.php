@extends('back-end.master.master_admin')
@section('title','Edit Role')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <h1>Edit Role</h1>
            <hr>
            <form method="post"
                  action="{{route('user.editRole',$user->id)}}">
                @csrf
                <div class="form-group">
                    <lable><b>Role</b></lable>
                    <br>
                    <br>
                    <select class="form-control" name="role">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                    </select>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn-danger" href="{{route('user.index')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div>

@endsection
