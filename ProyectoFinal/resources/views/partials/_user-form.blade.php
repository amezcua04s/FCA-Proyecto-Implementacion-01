@csrf
<div class="mb-3">
  <label for="title" class="form-label">Título</label>
  <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $user->title )}}">
</div>
<div class="row">
  <div class="mb-3 col-sm-12 col-md-6 col-xl-3">
    <label for="ur_clean" class="form-label">Categoría</label>
    <select class="form-select" aria-label="Categorías" name="roles_id">
      <option selected disabled>Seleccione una categoría</option>
        @foreach ($roles as $role)
          <option value="{{$roles->id}}" @if ($user->roles_id == $roles->id)  selected @endif>
            {{$roles->name}}
          </option>          
        @endforeach
    </select>
  </div>
  <div class="mb-3 col-12 col-sm-12 col-md-6 col-xl-3">
    <label for="ur_clean" class="form-label">URL</label>
    <input type="text" class="form-control" id="ur_clean" name="url_clean" value="{{ old('url_clean', $user->url_clean)}}">
  </div>
</div>


<div class="mb-3">
  <label for="content" class="form-label">Contenido</label>
  <input type="text" class="form-control" id="content" name="content" value="{{ old('content', $user->content) }}">
</div>
<div class="mb-3 form-check">
  <input type="checkbox" class="form-check-input" id="usered" name="usered">
  <label class="form-check-label" for="usered">Publicado</label>
</div>
<button type="submit" class="btn btn-primary">Guardar</button>