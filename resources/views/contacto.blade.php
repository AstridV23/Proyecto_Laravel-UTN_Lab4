<form action="{{ route('contacto.result') }}" method="POST">
    @csrf

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" required><br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required><br><br>

    <button type="submit">Subir</button>
</form>

@if(isset($nombre) && isset($telefono) && isset($direccion))
    <h1>Información de Contacto</h1>

    <p><strong>Nombre:</strong> {{ $nombre }}</p>
    <p><strong>Teléfono:</strong> {{ $telefono }}</p>
    <p><strong>Dirección:</strong> {{ $direccion }}</p>
@endif
