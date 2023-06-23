<?php
// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Comprobar las credenciales del usuario
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Aquí deberías implementar la lógica de autenticación
    // Verificar si el usuario y la contraseña son correctos
    // Si las credenciales son correctas, redirigir al usuario a otra página web
    // Si las credenciales son incorrectas, mostrar un mensaje de error

    // Ejemplo de redirección a otra página web
    if ($usuario == 'admin' && $contraseña == 'admin123') {
        header('Location: reservasdeaulas.php');
        exit();
    } else {
        $mensaje_error = 'Credenciales incorrectas. Inténtalo de nuevo.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
         <link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
    <h2>Iniciar sesión</h2>

    <?php if (isset($mensaje_error)) { ?>
        <p><?php echo $mensaje_error; ?></p>
    <?php } ?>

    <form method="post">
        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required>
        </div>
        <div>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" required>
        </div>
        <button type="submit">Iniciar sesión</button>
  </form>
</body>
</html>
