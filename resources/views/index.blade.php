<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:'Arial';
            background-color:gray;
        }
    </style>
</head>
<body>
    <h1>Canciones</h1>
    @if(is_null($cancion))
        <ul>
            @foreach($canciones as $cancion)
                <li>{{$cancion['cancion']}} - {{$cancion['artista']}}</li>
            @endforeach
        </ul>
    @else
        <h1>{{$cancion['cancion']}}</h1>
        <h2>{{$cancion['artista']}}</h2>
    @endif
    <?php


//dd($canciones);

?>
</body>
</html>