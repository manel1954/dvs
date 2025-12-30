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
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .modal {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #333333;
            padding: 60px;
            border-radius: 10px;
            text-align: center;
            border: 3px solid #a9a9a9;
        }

        input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-rojo {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }

        .btn-rojo:hover {
            background-color: darkred;
        }

        .btn-verde {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px;
        }

        .btn-verde:hover {
            background-color: darkgreen;
        }

        h2 {
            color: #999999;
            font-family: 'arial', sans-serif;
            font-size: 18px;
            font-weight: bold;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Verifica si el usuario ya está autenticado
            if (localStorage.getItem("autenticado") === "true") {
                window.location.href = "../../index_botones.php"; // Redirige automáticamente
            } else {
                // Si no está autenticado, muestra el modal
                document.getElementById("passwordModal").style.display = "flex";
            }
        });

        function verificarPassword() {
            var password = document.getElementById("password").value;
            var passwordCorrecta = "ea3eizader"; // Define la contraseña correcta

            if (password === passwordCorrecta) {
                // Guarda el estado de autenticación en localStorage
                localStorage.setItem("autenticado", "true");
                // Redirige a la página
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

    <!-- Modal para solicitar la contraseña -->
    <div id="passwordModal" class="modal" style="display: none;">
        <div class="modal-content">
            <h2>Ingresa tu contraseña</h2>
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
