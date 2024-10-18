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

        /* Estilo para el cuadro modal */
        .modal {
            display: none; /* Oculto por defecto */
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
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        /* Estilo para el campo de la contraseña */
        input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>

    <script>
        function abrirModal() {
            document.getElementById("passwordModal").style.display = "flex";
        }

        function verificarPassword() {
            var password = document.getElementById("password").value;
            
            // Define la contraseña correcta
            var passwordCorrecta = "ea3eizader";
            
            if (password === passwordCorrecta) {
                // Redirige a la página editor_general.php si la contraseña es correcta
                window.location.href = "editor_general.php";
            } else {
                alert("Contraseña incorrecta. Inténtalo de nuevo.");
            }
        }

        function cerrarModal() {
            document.getElementById("passwordModal").style.display = "none";
        }
    </script>
</head>
<body>

    <!-- Botón para abrir el modal -->
    <button class="btn-verde" onclick="abrirModal()">Acceder al Editor_General</button>
    <button class="btn-rojo" onclick="window.location.href='../../index.php'">VOLVER</button>

    <!-- Modal para solicitar la contraseña -->
    <div id="passwordModal" class="modal">
        <div class="modal-content">
            <h2>Ingresa tu contraseña</h2>
            <input type="password" id="password" placeholder="Contraseña">
            <br>
            <button class="btn-verde" onclick="verificarPassword()">Acceder</button>
            <button class="btn-rojo" onclick="cerrarModal()">Cancelar</button>
        </div>
    </div>

</body>
</html>
