@extends('layouts.master')

@section('content')
<h1>Transacciones</h1>

<a href="{{ route('transaccion.create')}}" class="btn btn-success">Registrar Transaccion</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tipo de Transaccion </th>
      <th scope="col">Monto</th>
      <th scope="col">Fecha de Transaccion</th>
      <th scope="col">Método</th>
      <th scope="col">Referencia</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($transaccion as $transacciones)
      <tr>
      <th scope="row">{{$transacciones->id}}</th>
        <td>{{$transacciones->tipoTransaccion}}</td>
        <td>{{$transacciones->monto}}</td>
        <td>{{$transacciones->fechaTransaccion}}</td>
        <td>{{$transacciones->metodo}}</td>
        <td>{{$transacciones->referencia}}</td>
        <td>
          <a href="{{ route('transaccion.edit', $transacciones->id) }}" class="btn btn-secondary">Edit</a>
        </td>
        <td>
          <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ $transacciones->id }}" type="submit" class="btn btn-danger">Delete</button>
        </td>
        

      </tr>  
    @endforeach
    

  </tbody>
</table>

<div class="mt-3">{{ $transaccion->links() }}</div>

<div class="modal fade" id="deleteModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de borrar el registro seleccionado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form id="formDelete" action="{{route('transaccion.destroy', 0)}}" method="POST">
          @csrf
          @method("DELETE")
          <button class="btn btn-danger" type="submit">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>



<script>
 
  var deleteModal = document.getElementById('deleteModal')
  deleteModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var id = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    // Update the modal's content.
    var modalTitle = deleteModal.querySelector('.modal-nombre')
    var action = formDelete.getAttribute('action').slice(0, -1) + id;
    //action += id;  
    console.log(action);
    formDelete.setAttribute('action', action);                                    
    //console.log(formDelete.getAttribute('action'));
    modalTitle.textContent = 'Transaccion: ' + id;
    //modalBodyInput.value = recipient
  })
</script>

  
@endsection