<link rel="stylesheet" href="{{ asset('css/RegisterForm.css') }}">
      
     <div class = "Form-Register-Container">
          <div class = "Form-Register-Advertisement">
            <img src="https://images.pexels.com/photos/34592829/pexels-photo-34592829.jpeg" alt="Register-Form-Image">
        </div>
        
        <h1 class = "Form-Register-Header">Create an Account</h1>
        <p class = "Form-Register-Description">Already have an account? <a href="/login" class ="btnLogin">Login</a></p>

                    @if ($errors->any())
            <div class="toast-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


      <form action="{{ route('register.store') }}" method="POST" class="Form-Register-Form">
             @csrf
            <label for = "name">Full Name</label>
            <input type="text" name = "name" placeholder ="Enter your full name" class ="Form-Register-Input-Name" value="{{ old('name') }}" required>

            <label for = "email">Email Address</label>
            <input type="email" name = "email" placeholder ="Enter your email address" class ="Form-Register-Input-Email"  value="{{ old('email') }}" required>

            <label for = "password">Password</label>
            <input type="password" 
            name = "password" 
            placeholder ="Enter your password" 
            class ="Form-Register-Input-Password"
            required>

            <label for = "password_confirmation" >Confirm Password</label>
            <input type="password" name= "password_confirmation" placeholder ="Confirm your password" class ="Form-Register-Input-ConfirmPassword" required>
            <button class = "btnRegisterSubmit" type ="submit" id ="submitBtn"> Register </button>
            
        </form>
     </div>
     
     <style>
    .toast-error {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;

    background-color: #dc3545; /* red */
    color: #fff;

    padding: 15px 20px;
    border-radius: 8px;
    min-width: 280px;
    max-width: 360px;

    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);

    animation: slideIn 0.4s ease-out;
}

.toast-error ul {
    margin: 0;
    padding-left: 18px;
}

.toast-error li {
    font-size: 14px;
    line-height: 1.4;
}


@keyframes slideIn {
    from {
        transform: translateX(120%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opac qity: 1;
    }
}


     </style>