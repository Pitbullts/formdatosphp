<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtener los datos del formulario
    $name = htmlspecialchars($_GET["name"]);
    $email = htmlspecialchars($_GET["email"]);
    $age = htmlspecialchars($_GET["age"]);

    // Estructura de control: verificación de edad
    if ($age < 18) {
        $ageMessage = "Eres menor de edad.";
    } else {
        $ageMessage = "Eres mayor de edad.";
    }
} else {
    // Si el método no es GET, redirigir al formulario
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Recibidos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Datos Recibidos</h1>
    </header>
    <main>
        <h2>Información Enviada</h2>
        <p><strong>Nombre:</strong> <?php echo $name; ?></p>
        <p><strong>Correo Electrónico:</strong> <?php echo $email; ?></p>
        <p><strong>Edad:</strong> <?php echo $age; ?></p>
        <p><?php echo $ageMessage; ?></p>
    </main>
</body>
</html>
