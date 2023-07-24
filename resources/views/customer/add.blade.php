@extends('templates.layout')
@section('content')
<h1>{{ $title }}</h1>
@if ($errors->any())
@foreach ($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
@endif
<form action="{{ route('addCustomer') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name=" phone_number" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">CCCD</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="cccd">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" class="form-control" id="exampleInputPassword1" " name=" address">
    </div>
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" checked value="0">
            <label class="form-check-label" for="inlineRadio1">Nam</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1">
            <label class="form-check-label" for="inlineRadio2">Nữ</label>
        </div>
    </div>
    <img id="image_preview" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="Customer image" style="max-width: 200px; max-height: 100px">
    <input type="file" name="image" accept="image/*" class="@error('image') is-invalid @enderror" id="image">
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection