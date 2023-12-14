<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a type="button" class="btn btn-primary" href="/admin">Create Description</a>
    
    <table class="table table-bordered container">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Open Time</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cafe as $c)
        <tr>
            <td>{{ $c->id}} </td>
            <td>{{ $c->name }}</td>
            <td>{{ $c->description }}</td>
            <td>{{ $c->opentime }}</td>
            <td>{{ $c->address }}</td>
        </tr>

        @endforeach
    </table>

    <a type="button" class="btn btn-primary" href="{{route('menu.create')}}">Create New Menu</a>
    
    <table class="table table-bordered container">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>image</th>
            <th>Deskripsi</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($menu as $m)
        <tr>
            <td>{{++$i}}</td>
            <td><img src="{{asset ('image/menu/'.$m->image) }}" width="100px"></td>
            <td>{{ $m->name }}</td>
            <td>{{ $m->name_cafe }}</td>
            <td>{{ $m->deskripsi }}</td>
            <td>{{ $m->price }}</td>
            <td>
                <form action="{{ route('menu.destroy',$m->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('menu.edit',$m->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
