@extends('layout.admin')

@section('main-content')

<form action="" method="post">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    @csrf
    <fieldset class="form-group">
        <label>Name</label>
        <input class="form-control" name="category_name" placeholder="Nhập tên category">
        <label>Description</label>
        <input class="form-control" name="category_description" placeholder="Nhập tên category">
    </fieldset>

    <button type="submit" class="btn btn-success">Submit Button</button>
    <button type="reset" class="btn btn-primary">Reset Button</button>
</table>
</form>
@endsection