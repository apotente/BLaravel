<table class="table table-striped">
    <tr>
        <th>#</th>
        <th>Tipo</th>
        <th>Descripcion</th>
        <th>Acciones</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->tipo_desc}}</td>
        <td>{{ $item->descripcion }}</td>
        <td>
            <a href="{{ route('admin.items.edit', $item) }}">Editar</a>
            <a href="{{ route('admin.items.destroy', $item->id) }}">Eliminar</a>
        </td>
    </tr>
    @endforeach
</table>