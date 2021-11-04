<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Foodie v0.1</title>
</head>
<body>
    <header>
        <h1>Foodie</h1>
        <h2>Teman kelaparan mu</h2>
    </header>
    <section class="daftar-menu">
        <h2>Daftar Menu</h2>
        <div class="container">
        @foreach ($foods as $food)
            <div class="card">
                <img src="{{$food['picture_url']}}">
                <div class="card-text">
                    <a href="/detail"><h3>{{$food['title']}}</h3></a>
                    <p>Rp. {{$food['base_price']}}</p>
                </div>
            </div>
        @endforeach
        </div>
    </section>
</body>
</html>