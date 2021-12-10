desde la creacuin de salones
<form action="{{url('/salones')}}" method="post" enctype="multipart/from-data" >
@csrf 
@include('salones.form');
</form>