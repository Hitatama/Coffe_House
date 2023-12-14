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
            <h2 class="text-center"><b>MASUKAN DATA</b><br>Aplikasi Copy Kita</h3>
            <hr>
            @if(session()->has('success'))
			<div class="alert alert-success alert-dismissible" role="alert">
			{{ session('success') }}
  			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			@endif

            <form action="{{url('/admin')}}" method="post"
                    enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="berkas">Gambar Profile</label>
                    <input type="file" name="berkas" class="form-control-file " placeholder="" id="berkas" >
                    @error('berkas')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Nama Warung Coffe</label>
                    <input type="text" name="name" class="form-control-name " placeholder="Nama Warung"  id="name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi Warung Coffe</label>
                    <p><textarea name="description" id="description" cols="45" rows="10"> </textarea><br></p>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="opentime">Waktu Buka</label>
                    <input type="text" name="opentime" class="form-control " placeholder="day,time" id="opentime" ">
                    @error('opentime')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Alamat Warung Coffe</label>
                    <p><textarea name="address" id="address" cols="45" rows="10"> </textarea><br></p>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="created_by">Pembuat</label>
                    <input type="text" name="created_by" class="form-control " placeholder="nama pembuat" id="created_by" ">
                    @error('created_by')
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