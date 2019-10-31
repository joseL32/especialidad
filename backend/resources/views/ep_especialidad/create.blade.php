seccion para crear empleados
<form action="{{url('/ep_especialidad')}}" method="post" enctype="multipart/form-data">
{{csrf_frield}}
<label for="Especialidad_Nombre">{{'Especialidad'}}</label>
<input type="text" name="Especialidad_Nombre" id="Especialidad_Nombre" value="">
<input type="submit" value="Agregar">
    
</form>