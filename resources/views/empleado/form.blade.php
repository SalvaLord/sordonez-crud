Formulario que tendrá datos en comun entre edit y create

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="primerNombre">Primer Nombre</label>
    <input type="text" name="primerNombre" value="{{ $empleado->primerNombre }}" id="primerNombre">
    <br>
    
    <label for="segundoNombre">Segundo Nombre</label>
    <input type="text" name="segundoNombre" value="{{ $empleado->segundoNombre }}" id="segundoNombre">  
    <br>
    
    <label for="primerApellido">Primer Apellido</label>
    <input type="text" name="primerApellido" value="{{ $empleado->primerApellido }}" id="primerApellido">  
    <br>
    
    <label for="segundoApellido">Segundo Apellido</label>
    <input type="text" name="segundoApellido" value="{{ $empleado->segundoApellido }}" id="segundoApellido">  
    <br>
    
    <label for="correo">Email</label>
    <input type="email" name="correo" value="{{ $empleado->correo }}" id="correo">  
    <br>
    
    <!-- Para el post, el json toma los valores insertados en el name -->
    <label for="foto">Foto</label>
    <input type="file" name="foto" value="{{ $empleado->foto }}" id="foto">
    <br>
    
    <input type="submit" value="Guardar Datos">
</form>