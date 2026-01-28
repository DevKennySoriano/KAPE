<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
     @vite(['resources/css/RegisterForm.css', 'resources/js/app.js'])
</head>
    <body>

      
     <div class = "Form-Register-Container">
          <div class = "Form-Register-Advertisement">
            <img src="https://images.pexels.com/photos/34592829/pexels-photo-34592829.jpeg" alt="Register-Form-Image">
        </div>
        
        <h1 class = "Form-Register-Header">Create an Account</h1>
        <p class = "Form-Register-Description">Already have an account? <a href="/" class ="btnLogin">Login</a></p>

      <form action="{{ route('register.store') }}" method="POST" class="Form-Register-Form">
    @csrf
            <label for = "name">Full Name</label>
            <input type="text" name = "name" placeholder ="Enter your full name" class ="Form-Register-Input-Name"  required>

            <label for = "email">Email Address</label>
            <input type="email" name = "email" placeholder ="Enter your email address" class ="Form-Register-Input-Email" required>

            <label for = "password">Password</label>
            <input type="password" name = "password" placeholder ="Enter your password" class ="Form-Register-Input-Password" required>

            <label for = "password_confirmation">Confirm Password</label>
            <input type="password" name = "password_confirmation" placeholder ="Confirm your password" class ="Form-Register-Input-ConfirmPassword" required>
            <button class = "btnRegisterSubmit" type ="submit"> Register </button>
        </form>
     </div>
    </body>
</html>