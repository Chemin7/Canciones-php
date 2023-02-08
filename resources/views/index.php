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
        <li>Sundress</li>
        <li>space song</li>
        <li>Sweet dreams</li>
    </ul>
    <?php
$canciones = [];
$canciones[0] = ['cancion'=>'sundress','artista'=>'ASAP Roky'];
$canciones[1] = ['cancion' => 'space song','artista'=>'beach house'];
$canciones[2] = ['cancion' => 'sweet dreams','artista'=>'eurythmics'];

for($i=0;$i<count($canciones);$i++){
    echo "Index ".$i."= ".$canciones[$i]."<br>";
    }

?>
</body>
</html>