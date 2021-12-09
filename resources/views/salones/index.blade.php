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
  
            <td>Editar |
         <form action="{{url('/salones/'.$salones->id)}}" method="post">
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