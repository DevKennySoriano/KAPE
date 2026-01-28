
<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - Laravel' : 'Laravel' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class = "Login-Form">
    <div class = "Form-Container-Left">
        <img src="https://images.pexels.com/photos/4109744/pexels-photo-4109744.jpeg" alt="Form-Image-Banner">
    </div>

    <div class = "Form-Container-Right">
        <div class="Form-Container-Logo ">
            <img src="https://shorturl.at/k3lVF" alt="Form-Image-Logo">
        </div>
   
        <h1 class = "Login-Header">Welcome</h1>
        <p class = "Login-Description">Don't have an account yet? <a href="/register" class = "btnRegister"> click here to create a new one</a></p>
      
         <label for = "email">Enter your email</label>
            <input type="email" placeholder ="example@gmail.com" class ="Login-Input-Email">
        <label for = "password">Enter your password</label>
            <input type ="password" placeholder ="enter your password" class = "Login-Input-Password">
            <p class = "errorHandlerText">--Error Message Here--</p>
            <button class = "btnSubmit" type ="Submit"> Login </button>
    </div>
    
</div>
</body>
</html>