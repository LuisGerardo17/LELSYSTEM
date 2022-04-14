<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Home Page</span>
    </a>
  
    <a class="nav-link" href="{{route('usuarios')}}">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
  
    <a class="nav-link" href="/cursos">
        <i class="fas fa-book"></i><span>Cursos</span>
    </a>
  
    <a class="nav-link" href="/">
        <i class="fas fa-pen"></i><span>Actividades</span>
    </a>
  
    <a class="nav-link" href="/recursos">
        <i class="fas fa-cubes"></i><span>Recursos</span>
    </a>
</li>
