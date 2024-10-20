<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso a editor_general.php</title>

    <style>
        body {
            background: #000;
            display: flex;
            justify-content: center; /* Centrar horizontalmente */
            align-items: center; /* Centrar verticalmente */
            height: 100vh; /* Ocupa el 100% de la altura de la ventana */
            margin: 0;
            text-align: center; /* Centrar texto y botones */
        }

        /* Estilo para el cuadro modal */
        .modal {
            display: flex; /* Mostramos el modal inmediatamente al cargar la página */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        /* Estilo para el contenido del modal */
        .modal-content {
            background-color: #333333;
            padding: 60px;
            border-radius: 10px;
            text-align: center;
            border:3px solid #a9a9a9;
        }

        /* Estilo para el campo de la contraseña */
        input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
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

        .btn-verde:hover {
            background-color: darkgreen; /* Cambia a un tono más oscuro al pasar el mouse */
        }
h2{
    color:#999999;
    font-family: 'arial', sans-serif;
    font-size:18px;
    font-weight: bold;
}
    </style>

    <script>
        function verificarPassword() {
            var password = document.getElementById("password").value;
            
            // Define la contraseña correcta
            var passwordCorrecta = "ea3eizader";
            
            if (password === passwordCorrecta) {
                // Redirige a la página editor_general.php si la contraseña es correcta
                window.location.href = "../../index_botones.php";
            } else {
                alert("Contraseña incorrecta. Inténtalo de nuevo.");
            }
        }

        function cerrarModal() {
            window.location.href = "../../index.php"; // Redirige a index.php al cancelar
        }
    </script>
</head>
<body>

    <!-- Modal para solicitar la contraseña (se muestra al cargar la página) -->
    <div id="passwordModal" class="modal">
        <div class="modal-content">
            <h2>Ingresa tu contraseña</h2>
            <!-- Formulario para la contraseña -->
            <form onsubmit="event.preventDefault(); verificarPassword();">
                <input style="width:183px;" type="password" id="password" placeholder="Contraseña">
                <br>
                <button type="submit" class="btn-verde">Acceder</button>
                <button type="button" class="btn-rojo" onclick="cerrarModal()">Cancelar</button>
            </form>
        </div>
    </div>

</body>
</html>
