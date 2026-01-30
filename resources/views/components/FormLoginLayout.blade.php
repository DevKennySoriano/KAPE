<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class = "Login-Form">
    <div class = "Form-Container-Left">
        <img src="https://images.pexels.com/photos/4109744/pexels-photo-4109744.jpeg" alt="Form-Image-Banner">
    </div>
    <div class = "Form-Container-Right">
        <div class="Form-Container-Logo">
        <img src="https://shorturl.at/k3lVF" alt="Form-Image-Logo">
    </div>

        <h1 class = "Login-Header">Welcome</h1>
        <p class = "Login-Description">Don't have an account yet? <a href="/register" class = "btnRegister"> click here to create a new one</a></p>
       <form method="POST" action="/login" class="Login-Form-Inner">
    @csrf

    <label for="email">Enter your email</label>
    <input
        id="email"
        name="email"
        type="email"
        placeholder="example@gmail.com"
        class="Login-Input-Email" required
    >

    <label for="password">Enter your password</label>
    <input
        id="password"
        name="password"
        type="password"
        placeholder="Enter your password"
        class="Login-Input-Password" 
        required
    >

    @if(session('error'))
        <p class="errorHandlerText">{{ session('error') }}</p>
    @endif

    <button class="btnSubmit" type="submit">Login</button>
</form>

