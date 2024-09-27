@extends('layout.admin')


@section('title')
Home|Page
@endsection


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css"> 
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            gap: 20px; 
        }
        .box {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            padding-top:40px;
            padding-bottom: 40px;
            width: 500px; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>ADMIN</h2>
            <a href="{{route('admin.index')}}" class="btn btn-info">OPEN</a>
        </div>
        <div class="box">
            <h2>CUSTOMER</h2>
            <a href="{{route('customer.create')}}" class="btn btn-info">OPEN</a>
        </div>
    </div>
</body>
</html>


@endsection
