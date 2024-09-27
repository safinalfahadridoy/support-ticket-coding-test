@extends('layout.admin')

@section('title')
Ticket | Index
@endsection

@section('content')

<a href="{{route('first.home')}}" class="btn btn-warning">HOME</a>
@php
    $i = 1;
@endphp

<table border="2px" class="table table-success table-striped table-hover" id="dataTable">
    <thead>
        <tr style="background:#109c03; color:rgb(246, 255, 0)">
            <th>SL</th>
            <th>UNIQUE ID</th>
            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>CATEGORY</th>
            <th>STATUS</th>
            <th>ACTION</th>
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

            <td>
                <form action="{{route('ticket.delete', $ct->id)}}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger send-email" data-name="{{ $ct->email }}" data-id="{{ $ct->uni_id }}" onclick="return confirm('Are you sure you want to delete this item?');">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script>
    (function() {
        emailjs.init({
            publicKey: 'DbP-8D4KA1IOXLtWr',
        });
    })();

    document.querySelectorAll('.send-email').forEach(button => {
        button.addEventListener('click', function() {
            const name = this.getAttribute('data-name');
            const id = this.getAttribute('data-id');

            const templateParams = {
                to_name: name,
                message: `Ticket with ID ${id} is cancelled.`,
            };

            console.log('to_name:', name);

           
            emailjs.send('service_srepfxa', 'template_0vhwvqo', templateParams)
                .then(response => {
                    console.log('SUCCESS!', response.status, response.text);
                    alert('Email sent successfully!');

              
                    this.closest('form').submit();
                })
                .catch(error => {
                    console.log('FAILED...', error);
                    alert('Failed to send email.');
                });
        });
    });
</script>
@endsection
