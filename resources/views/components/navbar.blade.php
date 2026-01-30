 @vite(['resources/css/navbar.css', 'resources/js/app.js'])

<nav>
<div class = "nav-brand">
    <div class="nav-brand-logo">
        <img src="https://shorturl.at/k3lVF" alt="Nav-Brand-Logo">
    </div>

    <div class ="nav-brand-name">
      <p>Kape't Bahala na</p>
    </div>
</div>


  <div class="nav-links">
    <li class = "nav-brand-link-1">Our Products</li>
    <li class = "nav-brand-link-2">Deals</li>
    <li class = "nav-brand-link-3">Help</li>
    <li class = "nav-brand-link-4">About us</li>
  </div>

 <div class="auth-buttons">
    @if(session()->has('user'))
        <span class="user-name">
            Hi, {{ session('user')['name'] }}
        </span>

        <a href="/dashboard" class="dashboard">Dashboard</a>
        <a href="/logout" class="logout">Logout</a>
    @else
        <a class="signin" href="/login">Sign In</a>
        <a class="signup" href="/register">Sign Up</a>
    @endif
</div>


</nav>



















</html>