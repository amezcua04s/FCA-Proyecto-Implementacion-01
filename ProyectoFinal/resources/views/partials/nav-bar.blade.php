<div class="container mt-2">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/')}}">SAGOP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link active" href="{{ route('usuarios.index') }}">Usuarios</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('proveedores.index')}}">Proveedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('clientes.index')}}">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('proyectos.index')}}">Proyectos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('anticipos.index')}}">Anticipos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('pagos.index')}}">Pagos</a>
          </li>
        </ul>
        <div class="d-flex ms-auto">
          @auth
              <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      {{ Auth::user()->name }}
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <li>
                          <a class="dropdown-item" href="{{ route('usuarios.show', Auth::user()->id) }}">
                              Perfil
                          </a>
                      </li>
                      <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Salir
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                  </ul>
              </div>
          @else
              <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
          @endauth
        </div>
    </div>
  </nav>
</div>
  <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>