<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu</title>
    <link rel="stylesheet" href="detail.css">
</head>
<body>
    <h1>Detail Menu</h1>
    <img src="{{$makanan['picture_url']}}" alt="">
    <h2 class="menu">{{$makanan['title']}}</h2>
    <p class="harga" >{{$makanan['base_price']}}</p>
    <p class="desc">{{$makanan['description']}}</p>
    <hr>
    <p class="category">
        @foreach($makanan['categories'] as $category)
            {{$category}}   
        @endforeach
    </p>
</body>
</html>