<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{url('/')}}" >HOTEL LA RIVERA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hotel
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/hotel/historia')}}">HISTORIA</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/hotel/vision')}}">Mision y Vision</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/hotel/ubicacion')}}">Ubicacion</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/servicios/habitaciones')}}">Habitaciones</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('/servicios/eventos/3')}}">Eventos</a>
          
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/reservas')}}">Reservas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/contactenos')}}">Contactos</a>
      </li>
    </ul>
    
  </div>
</nav>