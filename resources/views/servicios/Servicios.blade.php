<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Servicios</h1>
        <div class="mb-3">
            <a href="{{ route('CreateS') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Crear Servicio</a>
        </div> 

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion }}</td>
                    <td>
                        <a href="{{ route('EditS', ['servicio' => $servicio->id]) }}" class="btn btn-sm btn-info mr-1"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('ShowS', ['servicio' => $servicio->id]) }}" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>

                        <!-- Botón de Eliminar -->
                        <form action="{{ route('eliminarServicio', ['id' => $servicio->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este servicio?')"><i class="fas fa-trash"></i></button>
                        </form>
                        
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}" class="btn btn-primary">Volver</a>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
