<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/')}}">SAGOP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administrar
            </a>
          </li>
        </ul>
        <div class="top-right links mt-2">
          @auth
              <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                      Logout
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
                      <li><a class="dropdown-item" href="{{ route('usuarios.index') }}">Perfil</a></li>
                  </ul>
              </div>
          @else 
          @endif
    </div>
  </nav>