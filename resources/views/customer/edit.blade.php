@extends('templates.layout')
@section('content')
<h1>{{ $title }}</h1>
@if ($errors->any())
@foreach ($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
@endif
<form action="{{ route('editCustomer', ['id' => $detail->id]) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $detail->name }}" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $detail->email }}" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $detail->phone_number }}" name=" phone_number" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">CCCD</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="cccd" value="{{ $detail->cccd }}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Address</label>
        <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $detail->address }}" name="address">
    </div>
    <label for="exampleInputPassword1" class="form-label">Gender</label>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" checked value="0" {{ $detail->gender == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio1">Nam</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" {{ $detail->gender == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio2">Nữ</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection