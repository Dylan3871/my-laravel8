formularo de creacion de alumno

<form action="{{url('/estudiantes')}}" method="post" enctype="multipart/from-data" >
@csrf 
@include('estudiantes.form');
            

</form>