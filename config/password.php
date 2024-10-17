<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso a editor_general.php</title>


    <style>
        
        body{
            background:#000;
        }

        /* Estilo para centrar los botones horizontalmente pero en la parte superior */
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Alineado en la parte superior */
            height: 100vh;
            margin: 0;
            flex-direction: column;
            padding-top: 50px; /* Espaciado desde la parte superior */
        }



        /* Estilo para el botón */
        button {
            background-color: green; /* Color de fondo rojo */
            color: white; /* Texto blanco */
            padding: 10px 20px; /* Espaciado interno del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar por el botón */
        }
        /* Estilo para el botón rojo */
        .btn-verde {
            background-color: red; /* Color de fondo rojo */
            color: white; /* Texto blanco */
            padding: 10px 20px; /* Espaciado interno del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar por el botón */
        }
        /* Cambiar apariencia al pasar el mouse por encima */
        button:hover {
            background-color: darkred; /* Cambia a un tono más oscuro al pasar el mouse */
        }
    </style>





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
<!--     <h1>Bienvenido</h1>
    <p>Haz clic en el botón para acceder a Editor_General:</p> -->
    <br>
    <br>
    <!-- Botón que solicita la contraseña -->
    <button class="button" onclick="solicitarPassword()">Acceder al Editor_General</button>
 
    <button class="btn-verde"onclick="window.location.href='../../index.php'">VOLVER</button>

</body>
</html>
