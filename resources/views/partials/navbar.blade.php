
<nav class="navbar">
  <a class="nav-btn {{setActive('/') }}" href="/"> Home </a>

  <a class="nav-btn {{setActive( 'alumnos/registro') ?  : setActive('alumnos.show')}} " 
    href="{{ route('alumnos.create') }}"> Ingreso </a>

  <a class="nav-btn {{setActive( 'alumnos' )}}" href="{{route('alumnos.index')}}"> Listado </a>

</nav>