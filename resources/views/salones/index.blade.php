<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>salones</th>
            <th>Acciones</th>
            
        </tr>
    </thead>

    <tbody>
        @foreach($salones as $salones)
        <tr>
            <td>{{$salones->id}}</td>
            <td>{{$salones->salon}}</td>
  
            <td>Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>

</table>