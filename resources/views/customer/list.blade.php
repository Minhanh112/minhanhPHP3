@extends('templates.layout')
@section('content')
<h1>{{$title}}</h1>
<!-- <form action="{{ route('search_customer') }}" method="POST">
    @csrf
    <input type="text" name="search_name">
    <input type="submit" name="btn_search" value="Search">
</form> -->
@if (Session::has('success'))
{{Session::get('success')}}
@endif
@if (Session::has('error'))
{{Session::get('error')}}
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">CCCD</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $list)
        <tr>
            <th>{{$list->id}}</th>
            <td>{{$list->name}}</td>
            <td>{{$list->email}}</td>
            <td>{{$list->phone_number}}</td>
            <td>{{$list->cccd}}</td>
            <td>{{$list->address}}</td>
            <td>{{$list->gender == 0 ?'nam' : 'nữ'}}</td>
            <!-- <td>
                <img src="{{ $list->image ? '' . Storage::url($list->image) : 'https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg' }}" alt="">
            </td> -->
            <td>

                <a class=" btn btn-warning" href="{{ route('editCustomer', [ 'id' => $list->id ]) }}"">Edit</a>
                <a class=" btn btn-danger" href="{{ route('deleteCustomer', [ 'id' => $list->id ]) }}">Delete</a>
            </td>
        </tr>

        @endforeach

    </tbody>

</table>
<a class="btn btn-danger" href="{{ route('add') }}">Add new</a>
@endsection