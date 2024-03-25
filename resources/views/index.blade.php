<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agencia de Niñeras</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="mb-4">Agencia de Niñeras</h1>
        <p class="lead mb-4">Una agencia de niñeras proporciona servicios profesionales de cuidado infantil. Nuestro objetivo es conectar a familias con niñeras de confianza que cumplan con los más altos estándares de seguridad y cuidado para los niños.</p>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('Servicios') }}" class="btn btn-primary btn-lg btn-block mb-3">Servicios</a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('Solicitudes') }}" class="btn btn-primary btn-lg btn-block">Solicitudes</a>
            </div>
        </div>
    </div>
    <div class="container text-center mt-5">
        <img style="" src="https://www.redfamiliacolombia.org/wp-content/uploads/2020/08/club-nineras.jpg" alt="Niñera" class="imagen-ninera">
    </div>

    <!-- Bootstrap JS (opcional, solo si necesitas funcionalidades de JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-QAgzXxCb8z2ZuCv/4FQp7OwJqSgdHvHq8Sh/VOT+wz+YZvIsGIzBzJW8AbaNMfXw" crossorigin="anonymous"></script>
</body>
</html>
