<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<!-- <link rel="stylesheet" href="/css/css/bootstrap.css"> -->

</head>
<body>
    
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">WHERE</a>
    </div>
    
    @auth
    <div class="w3-col s3">
      <a href="#menu" class="w3-button w3-block w3-black">MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="/Coffe" class="w3-button w3-block w3-black">CAFE</a>
  </div>
    <div class="w3-col s3">
      <a href="/PAGE" class="w3-button w3-block w3-black">BERANDA</a>
    </div>
    <div class="w3-col s3">
      <a href="/admin" class="w3-button w3-block w3-black">Upload Deskripsi</a>
    </div>
    <div class="w3-col s3">
      <a href="{{route('menu.index')}}" class="w3-button w3-block w3-black">Upload MENU</a>
    </div>
    <div class="w3-col s3">
      <a href="dashboard" class="w3-button w3-block w3-black">Dashboard</a>
    </div>
    <div class="w3-col s3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}</a>
          </div>
          <div class="w3-col s3">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="w3-button w3-block w3-black" >LOGOUT</button>
            </form>
          </div>
    @else
    <div class="w3-col s3">
      <a href="/login" class="w3-button w3-block w3-black">LOGIN</a>
    </div>
    @endauth
    
  </div>
</div> 
    

@yield('content')


<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>
</body>
</html>