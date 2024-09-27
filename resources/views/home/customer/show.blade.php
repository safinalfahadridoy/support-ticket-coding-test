@extends('layout.admin')


@section('title')
Ticket|show
@endsection


@section('content')
<div class="row">
    <div class="col col-md-6 col-sm-12 col-12">
        <div class="row">
            <div class="col col-md-8 col-sm-8 col-8">
                <h3>TICKET DETAILS</h3>
            </div>
           
        </div>

        <table border="2px" class="table table-success table-striped table-hover">
            
            <tr>
                <td>UNIQUE ID:</td>
                <td>{{$ct->uni_id}}</td>
            </tr>
            <tr>
                <td>NAME:</td>
                <td>{{$ct->name}}</td>
            </tr>
            <tr>
                <td>PHONE:</td>
                <td>{{$ct->phone}}</td>
            </tr>
            <tr>
                <td>EMAIL:</td>
                <td>{{$ct->email}}</td>
            </tr>
            <tr>
                <td>CATEGORY:</td>
                <td>{{$ct->category}}</td>
            </tr>
            <tr>
                <td>STATUS:</td>
                <td>{{$ct->status}}</td>
            </tr>
         
        </table>
        <a href="{{route('customer.index')}}" class="btn btn-warning">ALL INFORMATION</a>
        <a href="{{route('customer.create')}}" class="btn btn-primary">CREATE ANOTHER TICKET</a>
        <a href="{{route('first.home')}}" class="btn btn-warning">HOME</a>
    </div>
</div>
@endsection
