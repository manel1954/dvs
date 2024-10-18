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

        /* Estilo para centrar el contenido horizontalmente en la parte superior */
        body {
            display: flex;
            justify-content: center; /* Centrar horizontalmente */
            margin: 0;
            padding-top: 20px; /* Espacio desde la parte superior */
        }

        /* Contenedor para centrar los botones y el texto */
        .container {
            text-align: center; /* Centrar el texto y los botones */
        }

        /* Estilo para el botón rojo */
        .btn-rojo {
            background-color: red; /* Color de fondo rojo */
            color: white; /* Texto blanco */
            padding: 10px 20px; /* Espaciado interno del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar por el botón */
            margin: 10px; /* Espacio entre botones */
        }

        /* Cambiar apariencia al pasar el mouse por el botón rojo */
        .btn-rojo:hover {
            background-color: darkred; /* Cambia a un tono más oscuro al pasar el mouse */
        }

        /* Estilo para el botón verde */
        .btn-verde {
            background-color: green; /* Color de fondo verde */
            color: white; /* Texto blanco */
            padding: 10px 20px; /* Espaciado interno del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar por el botón */
            margin: 10px; /* Espacio entre botones */
        }

        /* Cambiar apariencia al pasar el mouse por el botón verde */
        .btn-verde:hover {
            background-color: darkgreen; /* Cambia a un tono más oscuro al pasar el mouse */
        }


        /* Estilos básicos para centrar el cuadro de contraseña */
        #passwordModal {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        #passwordModal input {
            padding: 10px;
            width: 100%;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        #passwordModal button {
            margin-top: 10px;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
    <!-- Cuadro de diálogo para solicitar la contraseña -->
    <div id="passwordModal">
        <h2>Por favor, ingresa la contraseña:</h2>
        <input type="password" id="passwordInput" placeholder="Contraseña">
        <button onclick="verificarPassword()">Enviar</button>
    </div>

</body>
</html>
