@extends('layout.admin')

@section('main-content')
<form role ="form" action="" method="post">
    @csrf       
        <label>User name</label>
        <input class="form-control" name="username" value ="{{$user->username}}">
        <label>Email</label>
        <input class="form-control" name="email" value ="{{$user->email}}">        
    <button type="submit" class="btn btn-success">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
</form>




@endsection
