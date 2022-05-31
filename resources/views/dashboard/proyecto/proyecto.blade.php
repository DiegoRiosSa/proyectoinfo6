@extends('layouts.master')

@section('content')
<h1>Proyectos</h1>

<a href="{{ route('proyecto.create')}}" class="btn btn-success">Registrar Proyecto</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre del Proyecto </th>
      <th scope="col">Fecha de Inicio</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Total</th>
      <th scope="col">Por Pagar</th>
      <th scope="col">Por Recibir</th>
      <th scope="col">Concepto</th>
      <th scope="col">Comentarios Adicionales</th>
      <th scope="col">Proveedor</th>
      <th scope="col">Cliente</th>
      <th scope="col" colspan="2">Opciones</th>
      
    </tr>
  </thead>
  <tbody>


    
    @foreach ($proyecto as $proyectos)
      <tr>
      <th scope="row">{{$proyectos->id}}</th>
        <td>{{$proyectos->nombre}}</td>
        <td>{{$proyectos->fechaInicio}}</td>
        <td>{{$proyectos->subtotal}}</td>
        <td>{{$proyectos->total}}</td>
        <td>{{$proyectos->porPagar}}</td>
        <td>{{$proyectos->porRecibir}}</td>
        <td>{{$proyectos->concepto}}</td>
        <td>{{$proyectos->comentariosAdicionales}}</td>
        <td>{{$proyectos->proveedor_id}}</td>
        <td>{{$proyectos->cliente_id}}</td>
        <td>
          <a href="{{ route('proyecto.edit', $proyectos->id) }}" class="btn btn-secondary">Edit</a>
        </td>
        <td>
          <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ $proyectos->id }}" type="submit" class="btn btn-danger">Delete</button>
        </td>
        <td>
          <a href="{{ route('proyecto.edit', $proyectos->id) }}" class="btn btn-secondary">Registrar Transaccion</a>
        </td>
        <td>

      </tr>  
    @endforeach
    

  </tbody>
</table>

<div class="mt-3">{{ $proyecto->links() }}</div>

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
        <form id="formDelete" action="{{route('proyecto.destroy', 0)}}" method="POST">
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
    modalTitle.textContent = 'Proyecto: ' + id;
    //modalBodyInput.value = recipient
  })
</script>

  
@endsection