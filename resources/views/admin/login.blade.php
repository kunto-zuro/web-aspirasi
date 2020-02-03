@extends('layout')

@section('title', 'login form')

@section('content')
<div class="row mt-5">
    <div class="offset-md-4 col-md-4">
        <form action="{{route('admin.login')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection