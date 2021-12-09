desde create de materias
<form action="{{url('/materias')}}" method="post" enctype="multipart/from-data" >
@csrf 
<br>
<label for="id_materia">Id Materia</label>
<input type="text" name="id_materia" id="id_materia">
<br>
<label for="materia">Materia</label>
<input type="text" name="materia" id="materia">
<br>
<input type="submit" name="Enviar" id="Enviar">
<br>