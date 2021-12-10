<label for="alumno_id">Id Alumno</label>
<input type="text" name="alumno_id" value="{{isset($estudiantes->alumno_id)?$estudiantes->alumno_id:''}}" id="alumno_id">
<br>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{isset($estudiantes->nombre)?$estudiantes->nombre:''}}"  id="nombre">
<br>
<label for="apellidoaaterno">Apellido Paterno</label>
<input type="text" name="apellidopaterno" value="{{ isset($estudiantes->apellidopaterno)?$estudiantes->apellidopaterno:''}}"  id="apellidopaterno">
<br>
<label for="apellidoMaterno">Apellido Materno</label>
<input type="text" name="apellidoMaterno" value="{{isset($estudiantes->apellidoMaterno)?$estudiantes->apellidoMaterno:''}}" id="apellidoMaterno">
<br>
<label for="matricula">Matricula</label>
<input type="text" name="matricula"  value="{{isset($estudiantes->matricula)?$estudiantes->matricula:''}}"  id="matricula">
<br>
<label for="id_Salon">Id Salon</label>
<input type="text" name="id_salon" value="{{isset($estudiantes->id_salon)?$estudiantes->id_salon:''}}" id="id_salon">
<br>
<input type="submit"  value="Guardar Datos">

<a href="{{ url('estudiantes') }}"> Regresar</a>
<br>
