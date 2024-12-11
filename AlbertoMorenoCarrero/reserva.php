<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de habitación</title>
</head>
<body>
    <h1>Reserva de habitación</h1>
    <form action="reserva.php" method="POST">
        <label for="nombre">Introduce tu nombre: </label>
        <input type="text" name="nombre" id="nombre"><br>

        <label for="apellidos">Introduce tu apellido: </label>
        <input type="text" name="apellidos" id="apellidos"><br>

        <label for="email">Introduce tu email: </label>
        <input type="email" name="email" id="email"><br>

        <label for="dni">Introduce tu dni: </label>
        <input type="text" id="dni" name="dni"><br>

        <label for="fecha">Introduce el día de entrada: </label>
        <input type="date" id="fecha" name="fecha"><br>

        <label for="dias">Nº de días de la reserva: </label>
        <input type="number" min="1" id="dias" name="dias"><br>

        <label for="habitacion">Selecciona una habitación</label>
        <select name="habitacion" id="habitacion">
        <option value="30">Simple (30€)</option>
        <option value="50">Doble (50€)</option>
        <option value="80">Triple (80€)</option>
        <option value="100">Suite (100€)</option>
        </select><br>

        <input type="submit" value="Enviar">
    </form>
    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valornombre = isset($_POST["nombre"]) ? htmlspecialchars($_POST["nombre"]) : "";
    $valorapellidos = isset($_POST["apellidos"]) ? htmlspecialchars($_POST["apellidos"]) : "";
    $valordni = isset($_POST["dni"]) ? htmlspecialchars($_POST["dni"]) : "";
    $valoremail = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
    $valorfecha = isset($_POST["fecha"]) ? htmlspecialchars($_POST["fecha"]) : "";
    $valordias = isset($_POST["dias"]) ? htmlspecialchars($_POST["dias"]) : "";
    $valorhabitacion = isset($_POST["habitacion"]) ? htmlspecialchars($_POST["habitacion"]) : "";
    if (empty($valornombre) || empty($valorapellidos) || empty($valordni) || empty($valoremail) || empty($valorfecha) || empty($valordias) || empty($valorhabitacion)){
        echo "Por favor, introduce valores válidos en todos los apartados.";
    } else {
        echo "Tu nombre es: $valornombre<br>";
        echo "Tus apellidos son: $valorapellidos<br>";
        echo "Tu email es: $valoremail<br>";
        echo "Tu DNI es: $valordni<br>";
        echo "Tu día de entrada es el: $valorfecha<br>";
        echo "Has reservado para $valordias dias<br>";
        if ($valorhabitacion == 30){
        echo "Has reservado la habitación simple por un importe de " . $valorhabitacion * $valordias . " €<br>";
        echo "<img src='imagenes/hab0.png' width='400px'>";
        }
        if ($valorhabitacion == 50){
            echo "Has reservado la habitación doble por un importe de " . $valorhabitacion * $valordias . " €<br>";
            echo "<img src='imagenes/hab1.png' width='400px'>";
            }
        if ($valorhabitacion == 80){
            echo "Has reservado la habitación triple por un importe de " . $valorhabitacion * $valordias . " €<br>";
            echo "<img src='imagenes/hab2.png' width='400px'>";
        }
        if ($valorhabitacion == 100){
            echo "Has reservado la habitación suite por un importe de " . $valorhabitacion * $valordias . " €<br>";
            echo "<img src='imagenes/hab3.png' width='400px'>";
            }
    }       
}
?>

</body>
</html>