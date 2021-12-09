formularo de creacion de alumno

<form action="{{url('/estudiantes')}}" method="post" enctype="multipart/from-data" >
@csrf 

<br>
<label for="alumno_id">Id Alumno</label>
<input type="text" name="alumno_id" id="alumno_id">
<br>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre">
<br>
<label for="apellidoaaterno">Apellido Paterno</label>
<input type="text" name="apellidopaterno" id="apellidopaterno">
<br>
<label for="apellidoMaterno">Apellido Materno</label>
<input type="text" name="apellidoMaterno" id="apellidoMaterno">
<br>
<label for="matricula">Matricula</label>
<input type="text" name="matricula"  id="matricula">
<br>
<label for="foto">Foto</label>
<input type="file" name="foto" id="foto">
<br>
<label for="id_Salon">Id Salon</label>
<input type="text" name="id_salon" id="id_salon">
<br>
<input type="submit"  value="Guardar Datos">
<br>
            

</form>