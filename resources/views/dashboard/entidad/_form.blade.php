<div class="form-group">
    <h1>Registro de Entidad</h1>
    <br>
    <label for="nombre">Razon Social</label>
    <input type="text" class="form-control" name="razonSocial" id="razonSocial" placeholder="Ingrese la razon social" value="{{old('razonSocial', $entidad->razonSocial)}}">
    </div>
    <br>

    <div class="form-group">
        <label for="exampleInputPassword1">Selecciona el tipo de persona</label>
        <select class="form-control" name="persona_id" id="persona_id" placeholder="Seleccione el tipo de persona" value="{{old('persona_id', $entidad->persona_id)}}">
            <option value="1">Cliente</option>
            <option value="2">Proveedor</option>
          </select>    
    </div>
        <br>
    
    <div class="form-group">
        <label for="exampleInputPassword1">Selecciona el tipo de persona</label>
        <select class="form-control" name="persona" id="persona" placeholder="Seleccione el tipo de persona" value="{{old('persona', $entidad->persona)}}">
            <option value="Fisica">Fisica</option>
            <option value="Moral">Moral</option>
          </select>    
    </div>
        <br>
    

    <div class="form-group">
        <label for="exampleInputPassword1">RFC</label>
        <input type="text" class="form-control" name="RFC" id="RFC" placeholder="Ingrese el RFC"  value="{{old('RFC', $entidad->RFC)}}">
        </div>
        <br>

    <div class="form-group">
        <label for="exampleInputPassword1">Domicilio</label>
        <input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="Ingrese el domicilio" value="{{old('domicilio', $entidad->domicilio)}}">
        </div>
        <br>

  
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese el email" value="{{old('email', $entidad->email)}}">
        </div>
        <br>

    <div class="form-group">
        <label for="exampleInputPassword1">Telefono</label>
        <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Ingrese el telefono" value="{{old('telefono', $entidad->telefono)}}">
        </div>  
        <br> 

        <button type="submit" value="Crear" class="btn btn-primary">Crear</button>
    </div>