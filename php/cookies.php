<?php
    setcookie("nombre", "Tekito Lakaka", time() + 86400);
    setcookie("color", "Colorao");
    setcookie("equipo", "Racing de Miano");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Prueba de cookies</h1>
<?php
    echo "El valor de la cookie 'equipo' es " . "'" . $_COOKIE["equipo"] . "'";
?>
</body>
</html>