mostrar lista de estudiantes

@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif

<a href="{{ url('estudiantes/create') }}"> Registrar nuevo estudiante </a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>

            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Matricula</th>
            <th>ID Salon</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($estudiantes as $estudiantes)
        <tr>
            <td>{{$estudiantes->id}}</td>
            <td>{{$estudiantes->nombre}}</td>
            <td>{{$estudiantes->apellidopaterno}}</td>
            <td>{{$estudiantes->apellidomaterno}}</td>
            <td>{{$estudiantes->matricula}}</td>
            <td>{{$estudiantes->id_salon}}</td>
            <td>
                <a href="{{ url('/estudiantes/'.$estudiantes->id.'/edit')}}">


            Editar
         </a>





        <form action="{{url('/estudiantes/'.$estudiantes->id)}}" method="post">
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
