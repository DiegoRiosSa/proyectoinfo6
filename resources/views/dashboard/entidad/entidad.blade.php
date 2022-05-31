@extends('layouts.master')

@section('content')
<h1>Entidades</h1>

<a href="{{ route('entidad.create')}}" class="btn btn-success">Registrar Entidad</a>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Razon Social</th>
      <th scope="col">Tipo</th>
      <th scope="col">Persona</th>
      <th scope="col">RFC</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col" colspan="2">Opciones</th>
      
    </tr>
  </thead>
  <tbody>
    
    @foreach ($entidad as $entidades)
      <tr>
      <th scope="row">{{$entidades->id}}</th>
    
        <td>{{$entidades->razonSocial}}</td>
        <td>{{$entidades->persona_id}}</td>
        <td>{{$entidades->persona}}</td>
        <td>{{$entidades->RFC}}</td>
        <td>{{$entidades->domicilio}}</td>
        <td>{{$entidades->email}}</td>
        <td>{{$entidades->telefono}}</td>
        <td>
          <a href="{{ route('entidad.edit', $entidades->id) }}" class="btn btn-secondary">Edit</a>
        </td>
        <td>
          <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ $entidades->id }}" type="submit" class="btn btn-danger">Delete</button>
        </td>

      </tr>  
    @endforeach
    

  </tbody>
</table>

<div class="mt-3">{{ $entidad->links() }}</div>

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
        <form id="formDelete" action="{{route('entidad.destroy', 0)}}" method="POST">
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
    modalTitle.textContent = 'Entidad: ' + id;
    //modalBodyInput.value = recipient
  })
</script>

  
@endsection