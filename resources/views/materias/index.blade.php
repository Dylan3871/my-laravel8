menu de materias
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>materia</th>
            <th>Acciones</th>
            
        </tr>
    </thead>

    <tbody>
        @foreach($materias as $materias)
        <tr>
            <td>{{$materias->id}}</td>
            <td>{{$materias->materia}}</td>
  
            <td>Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>

</table>