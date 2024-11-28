@extends('layouts.master')

@section('content')
<div class="col-12 mb-4">
    <a class="btn btn-primary" href="{{ route('user.create') }}">Agregar</a>
</div>

<div class="col-12">
  <table class="table table-hover table-striped">
    <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Título</th>
            <th scope="col">Categoría</th>
            <th scope="col">URL</th>
            <th scope="col">Publicado</th>
            <th scope="col">Opciones </th> 
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($users as $user)
            <tr>
              <th scope="rowgroup"> {{ $user->id }} </th>
              <td> {{ $user->title }} </td>
              <td> {{ $user->nameCategory}} </td>
              <td> {{ $user->url_clean }} </td>
              <td> {{ $user->publicado }} </td>
              <td>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-secondary">
                  Editar
                </a>
                {{-- method="POST" <- Incluir ese parametro en form, despues de la ruta--}}
                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                
                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>

                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar este usuario?</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Si acepta, ya no se podrán reestablecer los cambios...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">noooOO</button>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Si quiero eliminarlo</button>
                        </div>
                      </div>
                    </div>
              
                  </div>
                 
                </form>
          
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="col-12">
        {{ $user->links() }}
      </div>
      
@endsection