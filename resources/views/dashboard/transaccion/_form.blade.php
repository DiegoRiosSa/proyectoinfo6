<h1>Registro de Transaccion</h1>
<br>
<div class="form-group">
    <label for="exampleInputPassword1">Selecciona el tipo de transaccion</label>
    <select class="form-control" name="tipoTransaccion" id="tipoTransaccion" placeholder="Seleccione el tipo de transaccion" value="{{old('tipoTransaccion', $transaccion->tipoTransaccion)}}">
        <option value="Anticipo">Anticipo</option>
        <option value="Pago">Pago</option>
      </select>    
</div>
    <br>
    
    
    <div class="form-group">
        <label for="exampleInputPassword1">Monto</label>
        <input type="number" class="form-control" name="monto" id="monto" placeholder="Ingrese el monto" step="0.01" value="{{old('monto', $transaccion->monto)}}">
        </div>
        <br>
    <div class="form-group">
        <label for="exampleInputPassword1">Fecha de Transacción</label>
        <input type="text" class="form-control" name="fechaTransaccion" id="fechaTransaccion" placeholder="Ingrese cuando realizo la transaccion" value="{{old('fechaTransaccion', $transaccion->fechaTransaccion)}}">
        </div>
        <br>
        

    <div class="form-group">
        <label for="exampleInputPassword1">Selecciona Método de Pago</label>
        <select class="form-control" name="metodo" id="metodo" placeholder="Seleccione el Metodo" value="{{old('metodo', $transaccion->metodo)}}">
            <option value="Deposito">Deposito</option>
            <option value="Transferencia">Transferencia</option>
        </select>    
    </div>
    <br>

  
    <div class="form-group">
        <label for="exampleInputPassword1">Referencia</label>
        <input type="number" class="form-control" name="referencia" id="referencia" placeholder="Ingrese la referencia" value="{{old('referencia', $transaccion->referencia)}}">
        </div>
        <br>

        <button type="submit" value="Enviar" class="btn btn-primary">Crear</button>
    </div>