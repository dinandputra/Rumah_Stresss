{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection  
 --}}
 
 <!DOCTYPE html>
 <html>
 <head>
 <title> SignUp </title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Custom Theme files -->
 <link href="{{ asset ('css/register.css')}}" rel="stylesheet" type="text/css" media="all" />
 <!-- //Custom Theme files -->
 <!-- web font -->
 <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
 <!-- //web font -->
 </head>
 <body>
   <!-- main -->
   <div class="main-w3layouts wrapper">
     <h1> SignUp </h1>
     <div class="main-agileinfo">
       <div class="agileits-top">
        <form method="POST" action="{{ route('register') }}">
           {{-- <input class="text" type="text" name="Username" placeholder="Username" required="">
           <input class="text email" type="email" name="email" placeholder="Email" required="">
           <input class="text" type="password" name="password" placeholder="Password" required="">
           <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required=""> --}}

           @csrf
   
                   <input placeholder="Username" id="name" type="text" class="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                   <input placeholder="Email" id="email" type="email" class="text email" name="email" value="{{ old('email') }}" required autocomplete="email">
          
                   <input placeholder="Password" id="password" type="password" class="text" name="password" required autocomplete="new-password">

                   <input placeholder="Confirm Password" id="password-confirm" type="password" class="text w3lpass" name="password_confirmation" required autocomplete="new-password">
           <div class="wthree-text">
             <label class="anim">
               <input type="checkbox" class="checkbox" required="">
               <span>I Agree To The Terms & Conditions</span>
             </label>
             <div class="clear"> </div>
           </div>
           <input type="submit" value="SIGNUP">
         </form>
         <p>Don't have an Account? <a href="{{ route ('login')}}"> Login Now!</a></p>
       </div>
     </div>
     <!-- copyright -->
    
     <!-- //copyright -->
     <ul class="colorlib-bubbles">
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
     </ul>
   </div>
   <!-- //main -->
 </body>
 </html>