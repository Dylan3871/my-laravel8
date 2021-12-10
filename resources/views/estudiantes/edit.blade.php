Formualrio de edicion de estudiante

<form action="{{url('/estudiantes/'.$estudiantes->id) }}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('estudiantes.form');
</form>
