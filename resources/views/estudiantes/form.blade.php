
<label for="alumno_id">Id Alumno</label>
<input type="text" name="alumno_id" value="{{$estudiantes->alumno_id}}"id="alumno_id">
<br>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{$estudiantes->nombre}}"id="nombre">
<br>
<label for="apellidoaaterno">Apellido Paterno</label>
<input type="text" name="apellidopaterno" value="{{$estudiantes->apellidopaterno}}"id="apellidopaterno">
<br>
<label for="apellidoMaterno">Apellido Materno</label>
<input type="text" name="apellidoMaterno" value="{{$estudiantes->apellidomaterno}}"id="apellidoMaterno">
<br>
<label for="matricula">Matricula</label>
<input type="text" name="matricula" value="{{$estudiantes->matricula}}"id="matricula">
<br>
<label for="foto">Foto</label>
{{$estudiantes->foto}}
<input type="file" name="foto" value=""id="foto">
<br>
<label for="id_Salon">Id Salon</label>
<input type="text" name="id_salon" value="{{$estudiantes->id_salon}}id="id_salon">
<br>
<input type="submit"  value="Guardar Datos">
<br>