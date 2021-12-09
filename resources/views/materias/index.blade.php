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
  
            <td>Editar | 
       <form action="{{url('/materias/'.$materias->id)}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input type="submit" onclick="return confirm('¿Desea borrar?')"
        value="Borrar">
        </form>
            </td>
                
        </tr>
        @endforeach
    </tbody>

</table>