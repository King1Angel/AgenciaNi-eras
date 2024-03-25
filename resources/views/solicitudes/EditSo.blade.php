<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Solicitud</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Editar Solicitud</h1>

 
        <form action="{{ route('updateSolicitud', ['id' => $solicitud->_id]) }}" method="POST">

            @csrf
            @method('PUT')
        
            <div class="form-group">
                <label for="servicio_id">Servicio:</label>
                <select class="form-control" id="servicio_id" name="servicio_id">
                    @foreach ($servicios as $servicio)
                        <option value="{{ $servicio->id }}" {{ $solicitud->servicio_id == $servicio->id ? 'selected' : '' }}>{{ $servicio->nombre }}</option>
                    @endforeach
                </select>
            </div>
        
            <div class="form-group">
                <label for="fecha">Fecha programada:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $solicitud->fecha }}">
            </div>
        
            <div class="form-group">
                <label for="hora">Hora programada:</label>
                <input type="time" class="form-control" id="hora" name="hora" value="{{ $solicitud->hora }}">
            </div>
        
            <div class="form-group">
                <label for="numero_niñeras">Número de Niñeras:</label>
                <select class="form-control" id="numero_niñeras" name="numero_niñeras">
                    @for ($i = 1; $i <= 3; $i++)
                        <option value="{{ $i }}" {{ $solicitud->numero_niñeras == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>
        
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('Solicitudes') }}" class="btn btn-primary">Cancelar</a>
        </form>
         
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
