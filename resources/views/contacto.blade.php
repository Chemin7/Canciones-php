<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contacto</h1>
    <form action="" method ="POST" >
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="codigo">Codigo</label>
        <input type="text" name="codigo" id="codigo">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>