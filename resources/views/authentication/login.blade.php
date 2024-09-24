@extends('layouts.authentication.master')
@section('title', 'Login')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid p-0">
   <div class="row m-0">
      <div class="col-12 p-0">
         <div class="login-card">
            <div>
               <div><a class="logo" href="{{ route('index') }}"><img class="img-fluid for-light" style="width:150px" src="{{asset('assets/images/logo/logoidzmir.png')}}" alt="looginpage">
                  <img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage" ></a></div>
               <div class="login-main">
                  <form action="{{route('login.post')}}" method="POST" class="theme-form">
                     @csrf
                     <h4>Sign in to account</h4>
                     <p>Enter your Username & password to login</p>
                     <div class="form-group">
                        <label class="col-form-label">Username</label>
                        <input class="form-control" type="text" name="username" required="" placeholder="">
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input class="form-control" type="text" name="password" required="" placeholder="*********">
                        <div class="show-hide"><span class="show" id="showPassword">                         </span></div>
                     </div>
                     <div class="form-group mb-0">
                        <div class="checkbox p-0">
                           <input id="checkbox1" type="checkbox">
                           <label class="text-muted" for="checkbox1">Remember password</label>
                        </div>
                        <a class="link" href="{{ route('forget-password') }}">Forgot password?</a>
                        <button class="btn btn-primary" type="submit" style="background-color: #1a1a2e">Sign in</button>
                     </div>
                     <p class="mt-4 mb-0">For new customer please register<a class="ms-2" href="{{  route('register-parent') }}">Register</a></p>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script>
   function togglePassword() {
       var passwordInput = document.getElementById("password");
       var showPasswordCheckbox = document.getElementById("showPassword");
       if (showPasswordCheckbox.checked) {
           passwordInput.type = "text";
       } else {
           passwordInput.type = "password";
       }
   }
</script>
@endsection