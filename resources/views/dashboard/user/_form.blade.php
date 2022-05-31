<h1>Registro de Usuario</h1>
<br>
<div class="form-group">
    <label for="exampleInputPassword1">Nombre de usuario</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese nombre" value="{{old('name', $user->name)}}">
        </div>
    <br>
    
    
    
    <div class="form-group">
        <label for="exampleInputPassword1">Selecciona rol</label>
        <select class="form-control" name="role_id" id="role_id" placeholder="Seleccione el rol" value="{{old('role_id', $user->role_id)}}">
            <option value="Administrador">Administrador</option>
            <option value="UsuarioSP">UsuarioSP</option>
        </select>    
    </div>
    <br>


    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese el email" value="{{old('email', $user->email)}}">
        </div>
        <br>

  
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese la contraseña" value="{{old('password', $user->password)}}">
        </div>
        <br>

        <button type="submit" value="Enviar" class="btn btn-primary">Crear</button>
    </div>