<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Canciones</h1>
    <ul>
        @foreach($canciones as $cancion)
            <li>{{$cancion['cancion']}} - {{$cancion['artista']}}</li>
        @endforeach
    </ul>
    <?php


//dd($canciones);

?>
</body>
</html>