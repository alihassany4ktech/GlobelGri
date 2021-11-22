   <html>

   <head>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   </head>
    <style>
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #79CBCA;
    padding: 30px 10px
}

.card {
    max-width: 500px;
    margin: auto;
    color: black;
    border-radius: 20 px
}

p {
    margin: 0px
}

.container .h8 {
    font-size: 30px;
    font-weight: 800;
    text-align: center
}

.btn.btn-primary {
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 15px;
    background-image: linear-gradient(to right, #f1c967 0%, #79CBCA 51%, #f1c967 100%);
    border: none;
    transition: 0.5s;
    background-size: 200% auto
}

.btn.btn.btn-primary:hover {
    background-position: right center;
    color: #fff;
    text-decoration: none
}

.btn.btn-primary:hover .fas.fa-arrow-right {
    transform: translate(15px);
    transition: transform 0.2s ease-in
}

.form-control {
    color: white;
    background-color: #f1c967;
    border: 2px solid transparent;
    height: 60px;
    padding-left: 20px;
    vertical-align: middle
}

.form-control:focus {
    color: white;
    background-color: #f1c967;
    border: 2px solid #bd7f0a;
    box-shadow: none
}

.text {
    font-size: 14px;
    font-weight: 600
}

::placeholder {
    font-size: 14px;
    font-weight: 600
}

   </style>

   <body>
          
     <div class="container p-0">
    <div class="card px-4">
         
        <p class="h8 py-3">Payment Details</p>
            @if (session('success_message'))
            <div class="alert alert-success">
                {{ session('success_message') }}
            </div>
            <a type="button" href="{{route('agent.dashboard')}}" class="btn btn-sm btn-success mb-3">Go To Dashboard</a>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row gx-3">
           <form method="post" id="payment-form" action="{{url('/checkout')}}">
               @csrf
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Person Name</p> <input class="form-control mb-3" type="text" name="agent_name"  value="{{$user->name}}">
                </div>
            </div>
            <div class="row">
                  <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Subscription Title</p> <input class="form-control mb-3" type="text" name="title" value="{{$subscription->title}}">
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Amount</p> <input class="form-control mb-3" name="amount" type="tel" min="1" value="{{$subscription->price}}">
                </div>
            </div>
            </div>
            <input name="agent_id" value="{{$user->id}}" type="hidden" />
            <input name="agent_email" value="{{$user->email}}" type="hidden" />
            <input name="subscription_id" value="{{$subscription->id}}" type="hidden" />
            <input name="valid_property" value="{{$subscription->valid_property}}" type="hidden" />
            <input name="status" value="{{$subscription->status}}" type="hidden" />
            <input name="description" value="{{$subscription->description}}" type="hidden" />
            <input name="payment_method_nonce" type="hidden" />
            <input id="nonce" name="payment_method_nonce" type="hidden" />
            <div class="col-12">
                   <div class="bt-drop-in-wrapper">
                       <div id="bt-dropin"></div>
                   </div>
            </div>
            <div class="col-12">
                 <button id="submit-button" type="submit" class="ps-3 btn btn-primary mb-3">Pay</button>  
            </div>
           </form>
        </div>
    </div>
</div>

   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   <script src="https://js.braintreegateway.com/web/dropin/1.32.0/js/dropin.js"></script>

   <script>
       var form = document.querySelector('#payment-form');
       var client_token = "{{ $token }}";
       braintree.dropin.create({
           authorization: client_token,
           selector: '#bt-dropin',
           // paypal: {
           //       flow: 'checkout',
           //       amount: '10.00',
           //       currency: 'USD'
           //       }
       }, function (err, instance) {
           form.addEventListener('submit', function () {
               event.preventDefault();
               instance.requestPaymentMethod(function (err, payload) {
                   // Add the nonce to the form and submit
                   document.querySelector('#nonce').value = payload.nonce;
                   form.submit();
               });
           })
       });

   </script>

   </html>
