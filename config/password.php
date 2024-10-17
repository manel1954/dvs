<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso a editor_general.php</title>
    <script>
        function solicitarPassword() {
            var password = prompt("Por favor, ingresa la contraseña:");
            
            // Define la contraseña correcta aquí
            var passwordCorrecta = "ea3eizader";
            
            if (password === passwordCorrecta) {
                // Redirige a la página prueba.php si la contraseña es correcta
                window.location.href = "editor_general.php";
            } else {
                // Muestra un mensaje de error si la contraseña es incorrecta
                alert("Contraseña incorrecta. Inténtalo de nuevo.");
                
            }
        }
    </script>
</head>
<body>
    <h1>Bienvenido</h1>
    <p>Haz clic en el botón para acceder a Editor_General:</p>
    
    <!-- Botón que solicita la contraseña -->
    <button onclick="solicitarPassword()">Acceder al Editor_General</button>
 
    <button onclick="window.location.href='index.php'">Volver a index.php</button>

</body>
</html>
