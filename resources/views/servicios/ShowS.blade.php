<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Servicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Detalles del Servicio</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $servicio->nombre }}</h5>
                <p class="card-text">{{ $servicio->descripcion }}</p>
                <a href="javascript:history.back()" class="btn btn-primary">Volver</a>


            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
