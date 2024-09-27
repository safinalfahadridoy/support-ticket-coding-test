@extends('layout.admin')


@section('title')
Ticket|index
@endsection


@section('content')
@php
    $i = 1;
@endphp

<a href="{{route('first.home')}}" class="btn btn-warning">HOME</a>
    

<table border="2px" class="table table-success table-striped table-hover" id="dataTable">
    <thead>
        <tr class="" style="background:#109c03; color:rgb(246, 255, 0)">
            <th>SL</th>
            <th>UNIQUE ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>CATEGORY</th>
            <th>STATUS</th>
            <th>DETAILS</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach($customers as $ct)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$ct->uni_id}}</td>
        <td>{{$ct->name}}</td>
        <td>{{$ct->phone}}</td>
        <td>{{$ct->email}}</td>
        <td>{{$ct->category}}</td>
        <td>{{$ct->status}}</td>

        <td><a href="{{route('customer.show',$ct->id)}}" class="btn btn-info">DETAILS</a></td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
