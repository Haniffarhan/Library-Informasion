 @extends('layouts.login')
 @section('content')
 <div class="container-login100" style="background-image: url('{{asset('login_v16/images/bg-01.jpg')}}');">
   <div class="wrap-login100 p-t-30 p-b-50">
     <span class="login100-form-title p-b-41">
       Account Login
     </span>
     <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
       @csrf
       <div class="wrap-input100 validate-input" data-validate="Enter username">
         <input class="input100" type="text" name="email" placeholder="Email">
         <span class="focus-input100" data-placeholder="&#xe82a;"></span>
       </div>

       <div class="wrap-input100 validate-input" data-validate="Enter password">
         <input class="input100" type="password" name="password" placeholder="Password">
         <span class="focus-input100" data-placeholder="&#xe80f;"></span>
       </div>

       <div class="container-login100-form-btn m-t-32">
         <button type="submit" class="login100-form-btn">
           Login
         </button>
       </div>

     </form>
   </div>
 </div>
 @endsection