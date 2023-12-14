<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><b>MASUKAN DATA</b><br>Menu Copy Kita</h3>
            <hr>
            @if(session()->has('success'))
			<div class="alert alert-success alert-dismissible" role="alert">
			{{ session('success') }}
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			@endif

            <form action="{{url('menu')}}" method="post"
                    enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama Menu</label>
                <input type="text" name="name" class="form-control-name " placeholder="Nama Menu"  id="name">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Deskripsi Menu</label>
                <p><textarea name="description" id="description" cols="45" rows="10"> </textarea><br></p>
                @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                <div class="form-group">
                    <label for="opentime">Harga</label>
                    <input type="text" name="price" class="form-control " placeholder="Price" id="opentime" ">
                    @error('opentime')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">Gambar Menu</label>
                    <input type="file" name="image" class="form-control-file " placeholder="" id="berkas" >
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Upload</button>
                <hr>
                <p class="text-center">Already Upload? <a href="/PAGE">PAGE</a> sekarang!</p>
            </form>
        </div>
    </div>
</body>
</html>