<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Prueba de Evento de Teclado "DOM"</title>
    <style>
        /* Agrega estilos personalizados aquí */
        body {
            padding: 20px;
        }

        label {
            font-weight: bold;
        }

        #output {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">TAREA NUMERO 3 EVENTO DEL TECLADO</h1>
        <div class="form-group">
            <label for="cajatexto">SELECCIONE O ESCRIBA ALGO:</label>
            <input class="form-control" type="text" id="cajatexto">
        </div>
        <p id="output"></p>
    </div>

    <!-- Agrega la referencia al archivo JavaScript -->
    <script src="java.js"></script>
    <!-- Agrega la referencia al archivo JavaScript de Bootstrap (opcional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>