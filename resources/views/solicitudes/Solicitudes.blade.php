<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Solicitud</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Crear Solicitud</h1>
        <div class="mb-3">
            <a href="{{ route('CreateSo') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Crear Solicitud</a>
        </div> 

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Servicio</th>
                    <th>Usuario</th>
                    <th>Fecha programada</th>
                    <th>Hora programada</th>
                    <th>Número de Niñeras</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitudes as $solicitud)
                    <tr>
                        <td>{{ $solicitud->nombre_servicio }}</td>
                        <td>{{ $solicitud->usuario->nombre ?? 'No disponible' }}</td>
                        <td>{{ $solicitud->fecha}}</td>
                        <td>{{ $solicitud->hora }}</td>
                        <td>{{ $solicitud->numero_nineras }}</td>
                        <td>
                            <a href="{{ route('EditSo', ['id' => $solicitud->_id]) }}" class="btn btn-sm btn-info mr-1"><i class="fas fa-edit"></i></a>


                            <form action="{{ route('eliminarSolicitud', ['id' => $solicitud->_id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar esta solicitud?')"><i class="fas fa-trash"></i></button>
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
