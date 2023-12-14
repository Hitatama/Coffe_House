<!DOCTYPE html>
<html>
<head>
<title>Copy kita</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("img/{{ $image11 ?? '' }}");
  min-height: 75%;
}

.menu {
  display: none;
}

</style>
</head>
<body>

<!-- Links (sit on top) -->
@extends('layout.master')
@section('title', 'Copy kita')
@section('content')
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">Senin-Minggu, pkl 15:00-23:00 WIB</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">the<br>Bataputi Coffe House</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Perumahan Araya</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">
</div>
<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CAFE</span></h5>
    <p>Bataputi Coffe House merupakan lokasi kuliner yang menyajikan aneka menu varian kopi sebagai sajian utamanya. Berdiri sejak tahun 2015. Bataputi berasal dari kata bata dan putih, dimana menjadi konsep bangunan nya yang berbahan batu bata dicat berwarna putih. Warna putih dijadikan warna tema cafe ini.</p>
    <p>Bata Puti Coffe House menggunakan beberapa beans coffe lokal seperti Toraja Sapan, Sumatra Aceh Gayo, Sumatra Mandailing, Flores Bajawa, hingga Papua Wamena.</p>
    <p>Beberapa menu yang menjadi favorit dan banyak dipesan oleh pengunjung, antara lain Es Kopi Susu Tempo Doeloe, Avocado Coffe, Ice Cube Coffe Latte, Nasi Goreng Sambal Ijo, Margherita Pizza, dan Pisang Goreng Gula Jawa.</p>
    
    <img src="img/{{ $image12 ?? '' }}">
    <p><strong>Jam Buka:</strong>Senin-Minggu, pkl 15:00-23:00 WIB.</p>
    <p><strong>Alamat:</strong>Perumahan Araya</p>
  </div>
</div>

<!-- Menu Container -->
    
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Food');" id="myLink">
        <div class="w3-col s6 tablink">Food</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Beverage');">
        <div class="w3-col s6 tablink">Beverage</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Snack');">
        <div class="w3-col s6 tablink">Snack</div>
      </a>
    </div>
  

    <div id="Food" class="w3-container menu w3-padding-48 w3-card">
      <h5>Nasi Cumi Hitam</h5>
      <p class="w3-text-grey">Rp 35.500</p><br>
    
      <h5>Nasi Daging Sambal Matah</h5>
      <p class="w3-text-grey">Rp 35.500</p><br>
    
      <h5>Nasi Goreng Sambal Matah</h5>
      <p class="w3-text-grey">Rp 25.500</p><br>
    
      <h5>Nasi Goreng Daun Jeruk</h5>
      <p class="w3-text-grey">Rp 29.500</p><br>
    
      <h5>Nasi Goreng Nanas</h5>
      <p class="w3-text-grey">Rp 29.000</p><br>

      <h5>Nasi Goreng Sambal Ijo</h5>
      <p class="w3-text-grey">Rp 25.500</p><br>

      <h5>Nasi Goreng Rempah</h5>
      <p class="w3-text-grey">Rp 25.500</p><br>

      <h5>Nasi Goreng Teri</h5>
      <p class="w3-text-grey">Rp 25.000</p><br>

      <h5>Nasi Pedas</h5>
      <p class="w3-text-grey">Rp 33.500</p><br>

      <h5>Mie Ayam</h5>
      <p class="w3-text-grey">Rp 35.500</p><br>

      <h5>Mie Ayam Telur Asin</h5>
      <p class="w3-text-grey">Rp 35.500</p><br>

      <h5>Nasi Ayam Cabe</h5>
      <p class="w3-text-grey">Rp 30.500</p><br>

      <h5>Sweet & Spicy Chiken</h5>
      <p class="w3-text-grey">Rp 30.000</p><br>

      <h5>Chiken Katsu Curry</h5>
      <p class="w3-text-grey">Rp 30.000</p><br>

      <h5>Ayam Geprek</h5>
      <p class="w3-text-grey">Rp 30.000</p><br>

      <h5>Beef Yakniku On Rice</h5>
      <p class="w3-text-grey">Rp 35.000</p><br>

      <h5>Deluxe Corne Pizza</h5>
      <p class="w3-text-grey">Rp 47.500</p><br>

      <h5>Margherita Pizza</h5>
      <p class="w3-text-grey">Rp 37.500</p><br>

      <h5>Fungi Pizza</h5>
      <p class="w3-text-grey">Rp 39.500</p><br>

      <h5>Spaghetti Sambal Matah</h5>
      <p class="w3-text-grey">Rp 33.500</p><br>

      <h5>Spaghetti Aglio Olio</h5>
      <p class="w3-text-grey">Rp 33.500</p><br>

      <h5>Spaghetti Bolognaise</h5>
      <p class="w3-text-grey">Rp 33.500</p><br>

      <h5>Spaghetti Carbonara</h5>
      <p class="w3-text-grey">Rp 33.500</p>
    </div>

    <div id="Beverage" class="w3-container menu w3-padding-48 w3-card">
      <h5>Espresso Single</h5>
      <p class="w3-text-grey">Rp 23.000</p><br>
    
      <h5>Espresso Doppio</h5>
      <p class="w3-text-grey">Rp 33.000</p><br>
    
      <h5>Espresso Affogato</h5>
      <p class="w3-text-grey">Rp 30.000</p><br>
    
      <h5>Americano Hot</h5>
      <p class="w3-text-grey">Rp 28.000</p><br>
    
      <h5>Americano Iced</h5>
      <p class="w3-text-grey">Rp 30.000</p><br>

      <h5>Iced Cube Coffe Latte</h5>
      <p class="w3-text-grey">29.000</p><br>

      <h5>Cappuccino Oriiginal Hot</h5>
      <p class="w3-text-grey">27.500</p><br>

      <h5>Cappucino Oriiginal Iced</h5>
      <p class="w3-text-grey">29.000</p><br>

      <h5>Green Tea Latte</h5>
      <p class="w3-text-grey">Rp 30.000</p><br>

      <h5>Es Kopi Susu Tempoe Doeloe</h5>
      <p class="w3-text-grey">Rp 24.000</p><br>

      <h5>Avocado Coffe</h5>
      <p class="w3-text-grey">Rp 32.000</p><br>

      <h5>Chocolate Original</h5>
      <p class="w3-text-grey">Rp 29.500</p><br>

      <h5>Choco Ice Blend</h5>
      <p class="w3-text-grey">32.000</p><br>

      <h5>Teh Tarik</h5>
      <p class="w3-text-grey">Rp 26.000</p><br>

      <h5>Lychee Yakult</h5>
      <p class="w3-text-grey">Rp 23.000</p><br>

      <h5>Es Degan Jeruk</h5>
      <p class="w3-text-grey">Rp 31.000</p><br>

      <h5>Es Sirsat Degan</h5>
      <p class="w3-text-grey">Rp 31.000</p><br>

      <h5>Bataputi Squash</h5>
      <p class="w3-text-grey">Rp 31.000</p>
    </div>  

    <div id="Snack" class="w3-container menu w3-padding-48 w3-card">
      <h5>Traditional Platter</h5>
      <p class="w3-text-grey">Rp 29.000</p><br>
    
      <h5>Tempe Mendoan</h5>
      <p class="w3-text-grey">Rp 18.000</p><br>
    
      <h5>Tahu Crispy</h5>
      <p class="w3-text-grey">Rp 18.000</p><br>
    
      <h5>French Fries with Extra Mozzarella</h5>
      <p class="w3-text-grey">Rp 28.000</p><br>
    
      <h5>French Fries with Chessy Sauce</h5>
      <p class="w3-text-grey">Rp 28.000</p><br>

      <h5>Salter Egg Fries</h5>
      <p class="w3-text-grey">24.000</p><br>

      <h5>Jamur Crispy</h5>
      <p class="w3-text-grey">18.000</p><br>

      <h5>Onion Ring</h5>
      <p class="w3-text-grey">18.000</p><br>

      <h5>Beef & Cheese Sandwich</h5>
      <p class="w3-text-grey">Rp 33.000</p><br>

      <h5>Pisang Goreng Keju Gula Jawa</h5>
      <p class="w3-text-grey">Rp 19.000</p><br>

      <h5>Pancake Ice Cream/Chocolate/Fruit</h5>
      <p class="w3-text-grey">Rp 31.000</p><br>

      <h5>Ubi Goreng Cinnamon</h5>
      <p class="w3-text-grey">Rp 18.000</p><br>

      <h5>Ubi Goreng Keju</h5>
      <p class="w3-text-grey">20.000</p>
    </div>  
    <img src="img/{{ $image4 ?? '' }}" style="width:80%;max-width:1000px;margin-top:32px;">
    <img src="img/{{ $image8 ?? '' }}" style="width:100%;max-width:1000px;margin-top:32px;">
    <img src="img/{{ $image9 ?? '' }}" style="width:60%;max-width:1000px;margin-top:32px;">
    <img src="img/{{ $image10 ?? '' }}" style="width:70%;max-width:1000px;margin-top:32px;">
  </div>
</div>
<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">DIMANA UNTUK MENEMUKAN KITA</span></h5>
    <p>Temukan kami di beberapa alamat di beberapa tempat.</p>
    <img src="img/{{ $image13 ?? '' }}" class="w3-image" style="width:100%">
    <p><span class="w3-tag">FYI!</span>Kami menawarkan layanan katering lengkap untuk acara apa pun, besar atau kecil. Kami memahami kebutuhan Anda dan kami akan menyediakan makanan untuk memenuhi kriteria terbesar dari semuanya, baik tampilan maupun rasa. </p>
    <p><strong>Kolom </strong> Komentar :</p>
    <form action="/action_page.php" target="_blank">
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nama" required nama="Nama"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required nama="Email"></p>
    <p><textarea name="komentar" cols="45" rows="10"> </textarea><br></p>
    <p><button class="w3-button w3-black" type="submit">KIRIMKAN KOMENTAR</button></p>
   </form>
  </div>
</div>
@endsection
<!-- CAFE -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
</body>
</html>
