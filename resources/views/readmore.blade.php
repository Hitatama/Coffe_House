<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Menu Kami</span></h5>
    @foreach($menu as $m)
    <div class="col-lg-3 card container">
      <div class="containter">
        <img src="{{asset('image/menu'.$m->image)}}" alt="" style="width: 275px; height: 275px; ">
        <h5>{{$m->name}}</h5>
        <h5>{{$m->description}}</h5>
        <h5>{{$m->price}}</h5>
      </div>
    </div>
    @endforeach
  </div>
</body>
</html>