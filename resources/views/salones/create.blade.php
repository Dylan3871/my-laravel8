desde la creacuin de salones
<form action="{{url('/salones')}}" method="post" enctype="multipart/from-data" >
@csrf 
<br>
<label for="id_salon">Id Salon</label>
<input type="text" name="id_salon" id="id_salon">
<br>
<label for="salon">Salon</label>
<input type="text" name="salon" id="salon">
<br>
<input type="submit"  value="Guardar Datos">
<br>