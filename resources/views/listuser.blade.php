@extends('layout.admin')

@section('main-content')
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>STT</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        @csrf
        @foreach($user as $key => $value)
        
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->email}}</td>
                <td>
                   <a href="{{asset('listuser/edit/'.$value->userid)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                   <a href="{{asset('listuser/delete/'.$value->userid)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
