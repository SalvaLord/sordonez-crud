
<h1>Se muestra la creacion de empleado</h1>

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="primerNombre">Primer Nombre</label>
    <input type="text" name="primerNombre" id="primerNombre">
    <br>
    
    <label for="segundoNombre">Segundo Nombre</label>
    <input type="text" name="segundoNombre" id="segundoNombre">  
    <br>
    
    <label for="primerApellido">Primer Apellido</label>
    <input type="text" name="primerApellido" id="primerApellido">  
    <br>
    
    <label for="segundoApellido">Segundo Apellido</label>
    <input type="text" name="segundoApellido" id="segundoApellido">  
    <br>
    
    <label for="correo">Email</label>
    <input type="email" name="correo" id="correo">  
    <br>
    
    <!-- Para el post, el json toma los valores insertados en el name -->
    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto">
    <br>
    
    <input type="submit" value="Guardar Datos">
</form>