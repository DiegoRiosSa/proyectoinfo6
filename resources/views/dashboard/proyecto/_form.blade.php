
<div class="form-group">
    <h1>Registro de Proyecto</h1>
    <br>
    <label for="nombre">Nombre de Proyecto</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del proyecto" value="{{old('nombre', $proyecto->nombre)}}">
    </div>
    <br>
    
    <div class="form-group">
    <label for="exampleInputPassword1">Fecha de Inicio de Proyecto</label>
    <input type="text" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Ingrese la fecha de inicio" value="{{old('fechaInicio', $proyecto->fechaInicio)}}">
    </div>
    <br>

    <div class="form-group">
        <label for="exampleInputPassword1">Subtotal</label>
        <input type="number" class="form-control" name="subtotal" id="subtotal" placeholder="Ingrese el subtotal" step="0.01" value="{{old('subtotal', $proyecto->subtotal)}}">
        </div>
        <br>

    <div class="form-group">
        <label for="exampleInputPassword1">Concepto</label>
        <input type="text" class="form-control" name="concepto" id="concepto" placeholder="Ingrese el concepto" value="{{old('concepto', $proyecto->concepto)}}">
        </div>
        <br>

  
    <div class="form-group">
        <label for="exampleInputPassword1">Proveedor</label>
        <input type="text" class="form-control" name="proveedor" id="proveedor" placeholder="Ingrese el nombre del proveedor" value="{{old('proveedor', $proyecto->proveedor)}}">
        </div>
        <br>

    <div class="form-group">
        <label for="exampleInputPassword1">Cliente</label>
        <input type="text" class="form-control" name="cliente" id="cliente" placeholder="Ingrese el nombre del cliente" value="{{old('cliente', $proyecto->cliente)}}">
        </div>  
        <br> 
            
        <div class="form-group">
            <label for="exampleInputPassword1">Comentarios adicionales</label>
            <textarea class="form-control" name="comentariosAdicionales" id="comentariosAdicionales"  placeholder="Ingrese comentarios adicionales" >{{old('comentariosAdicionales', $proyecto->comentariosAdicionales)}}</textarea>
            <br> 

        <button type="submit" value="Enviar" class="btn btn-primary">Crear</button>
    </div>
                                