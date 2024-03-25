<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Editar Servicio</h1>
        <form action="{{ route('updateServicio', ['id' => $servicio->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre del Servicio</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $servicio->nombre }}">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del Servicio</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $servicio->descripcion }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('Servicios') }}" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
</body>
</html>
