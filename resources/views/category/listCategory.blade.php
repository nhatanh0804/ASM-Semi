@extends('layout.admin')

@section('main-content')

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Description</th>
        <th width="280px">Action</th>
       
    </tr>
    @foreach ($categories as $key => $value)
    <tr>            
        <td>{{ $key+1 }}</td>
        <td>{{ $value->category_name }}</td>
        <td>{{ $value->category_description}}</td>
        <td>
            <a href="{{asset('category/create/')}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Add</a>
            <a href="{{asset('category/edit/'.$value->category_id)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
            <a href="{{asset('category/delete/'.$value->category_id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
         </td>

    </tr>
    @endforeach
</table>
@endsection