@extends('layout.admin')

@section('title', 'Ticket|open')



@section('content')
<a href="{{route('first.home')}}" class="btn btn-warning">HOME</a>
<h3>Ticket Create</h3>
<div class="row">
    <div class="col col-md-6 col-sm-12 col-12">
        <ul class="text-danger">
            @foreach($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
        </ul>
        
        <form action="{{route('customer.store')}}" class="form-control" method="POST" id="myform">
            @csrf

            <div class="form-group">
                <label for="uniId">UNIQUE ID: </label>
                <input type="number" class="form-control" id="uniId" placeholder="Enter UNIQUE ID" name="uniId" value="{{old('uniId')}}">
            </div>

            <div class="form-group">
                <label for="name">NAME: </label>
                <input type="text" class="form-control" id="name" placeholder="Enter NAME" name="name" value="{{old('name')}}">
            </div>
    
            <div class="form-group">
                <label for="phone">PHONE: </label>
                <input type="number" class="form-control" id="phone" placeholder="Enter PHONE" name="phone" value="{{old('phone')}}">
            </div>

            <div class="form-group">
                <label for="email">EMAIL: </label>
                <input type="text" class="form-control" id="email" placeholder="Enter EMAIL" name="email" value="{{old('email')}}">
            </div>

            
            <div class="form-">
                <label for="category">CATEGORY:</label>
                
                    <select class="form-control" name="category" id="category" value="{{old('category')}}">
                        <option value="-1" selected disabled>--Select One--</option>
                        <option value="billing">Billing</option>
                        <option value="technical">Technical</option>                                             
                    </select>
            </div>

            <div class="form-group">
                <label for="status">STATUS: </label>
                <input type="text" class="form-control" id="status" name="status" placeholder="Enter text here" value="{{old('status')}}">
            </div>


            <a href="{{route('first.home')}}" class="btn btn-warning">CANCEL</a>
            <input type="submit" name="save"  class="btn btn-success send-email"  value="SAVE" class="btn btn-success float-right">


        </form>
    </div>
</div>



<script>
    $("#myform").validate({
        rules: {
            uniId: {
                required: true,
                number: true
            },
            name: {
                required: true
            },
            phone: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            category: {
                required: true
            }
            
          
           

        },
        messages: {
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
           
            error.addClass("invalid-feedback");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.next("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).addClass("is-valid").removeClass("is-invalid");
        }
    });
</script>

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
            const uniId = document.getElementById('uniId').value;
            const name = document.getElementById('name').value;
       

            const templateParams = {
                to_name: name,
                message: `Ticket with ID ${uniId} is created.`,
            };

            console.log('to_name:', name);

            
            emailjs.send('service_srepfxa', 'template_ec0rx18', templateParams)
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
@section('footerlink')

@endsection
