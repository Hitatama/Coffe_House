<!DOCTYPE html>
<html>
<head>
<title>Copy kita</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<!-- <link rel="stylesheet" href="/css/css/bootstrap.css"> -->
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("img/imghome.jpg");
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
    <!-- <span class="w3-tag">Senin-Minggu, pkl 15:00-23:00 WIB</span> -->
  </div>
  <div class="w3-display-middle w3-center" id="beranda">
    <span class="w3-text-white" style="font-size:90px">COFFE HOUSE</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <!-- <span class="w3-text-white">Perumahan Araya</span> -->
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">
<!-- Cafe-->
<!-- <div class="dropdown show" id="cafe" >
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Pilihan Cafe
  </a>


  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/bataputih">Bataputi</a> <br>
    <a class="dropdown-item" href="#">HABBIT Eatery</a> <br>
    <a class="dropdown-item" href="#">Gartenhaus</a> <br>
    <a class="dropdown-item" href="#">Retrorika</a> <br>
    <a class="dropdown-item" href="#">Seoulscent</a> <br>
    <a class="dropdown-item" href="#">LOTENG</a> <br>
    <a class="dropdown-item" href="#">KON.CO Coffee & Garden</a> <br>
    <a class="dropdown-item" href="#">Campfire Outdoor Cuisine</a> <br>
  </div>
</div> -->
<!-- About Container -->
{{-- <div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT COFFE HOUSE</span></h5>
    <p>COFFE HOUSE adalah website yang memperkenalkan cafe/tempat nongkrong yang ada di Malang. COFFE HOUSE berisikan tentang deskripsi-deskripsi bahkan referensi cafe yang cocok untuk kamu kunjungi.Bukan hanya itu kamu juga bisa melihat mulai dari menu makanan,minuman,sampai gambar cafe tersebut.</p>
    <p>COFFE HOUSE tidak hanya menampilkan cafe yang sudah hitz saja namun juga hidden gems cafe yang ada di Malang.Tentunya akan mempermudah kamu mencari cafe yang masih belum banyak orang yang tau.Dan mempermudah anak muda untuk mencari tempat nongkrong atau tempat yang cocok untuk mengerjakan tugas</p>

    
    <img src="img/img12.jpg">
  </div>
</div> --}}

<div class="container" id="about">
  @foreach ($cafe as $c)
  <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT {{$c->name}}</span></h5>
  <img src="{{'img'.$c->berkas}}" alt="" style="width: 275px; height: 275px; ">
  <p>{{$c->description}}</p>
  <p>{{$c->opentime}}</p>
  <p>{{$c->address}}</p>
  <a id="create-comment" type="button" class="btn btn-primary" href="{{url('readmore/'.$c->id)}}">
    Show More 
  </a>
  @endforeach
</div>



<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
  <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">TULISKAN KESAN ANDA</span></h5>
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
