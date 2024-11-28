<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reserva de Citas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  <!-- jQuery -->
  <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini">
  <!-- Custom CSS for Dark Mode -->
  <style>
   /* Modo oscuro */
body.dark-mode {
  background-color: #343a40;
  color: #ffffff;
}
.dark-mode .navbar, 
.dark-mode .main-sidebar, 
.dark-mode .main-footer {
  background-color: #212529;
  color: #ffffff;
}
/* Estilos para los íconos y textos en modo oscuro */
.dark-mode .nav-link i, 
.dark-mode .nav-link, 
.dark-mode .brand-text, 
.dark-mode .user-panel .info a, 
.dark-mode .sidebar a, 
.dark-mode .sidebar .nav-icon {
  color: #ffffff !important;
}
  </style>
</head>
<body class="hold-transition sidebar-mini">

  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/admin') }}" class="nav-link">Reserva de Citas Médicas</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Fullscreen button -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
       <!-- Dark Mode Toggle Button (Añadido) -->
<li class="nav-item">
    <a class="nav-link" href="#" id="dark-mode-toggle" role="button">
        <i class="fas fa-moon"></i> Modo Oscuro
    </a>
</li>
      <!-- Control Sidebar button -->
      <li class="nav-item">       
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
     <!-- Dark Mode Toggle Button (Añadido) -->
     <li class="nav-item">
        <a class="nav-link" href="#" id="dark-mode-toggle" role="button">
          <i class="fas fa-moon"></i>
        </a>
      </li>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Reserva Citas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- Optionally add user image here -->
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Users Menu -->
           @can('admin.usuarios.index')
             
          
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas bi-people"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/usuarios/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admin/usuarios') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Usuarios</p>
                </a>
              </li>
            </ul>
          </li>
           @endcan
           
           <!-- secretarias Menu -->
            @can('admin.secretarias.index')
              
           
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas bi bi-person-circle"></i>
              <p>
                secretarias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/secretarias/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de secretarias</p>
                </a> 
              </li>
              <li class="nav-item"> 
                <a href="{{ url('admin/secretarias') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de secretarias</p>
                </a>
              </li>
            </ul>
          </li>
 @endcan
           <!-- pacientess Menu -->
            @can('admin.pacientes.index')             
           
           <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="bi bi-person-square"></i>
              <p>
                pacientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/pacientes/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de pacientes</p>
                </a> 
              </li>
              <li class="nav-item"> 
                <a href="{{ url('admin/pacientes') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de pacientes</p>
                </a>
              </li>
            </ul>
          </li>
 @endcan
          <!-- consultorios Menu -->
           @can('admin.consultorios.index')           
           
          <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="bi bi-building-fill-add"></i>
              <p>
                Consultorios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/consultorios/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Consultorios</p>
                </a> 
              </li>
              <li class="nav-item"> 
                <a href="{{ url('admin/consultorios') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de consultorios</p>
                </a>
              </li>
            </ul>
          </li>
@endcan
 <!-- Libros Menu -->
@if ('admin.libros.index')

<li class="nav-item">
  <a href="#" class="nav-link active">
    <i class="bi bi-book"></i>
    <p>
      Libros
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ url('admin/libros/create') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Creación de Libros</p>
      </a> 
    </li>
    <li class="nav-item">
      <a href="{{ url('admin/libros') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Listado de Libros</p>
      </a>
    </li>
  </ul>
</li>



@endif

           <!-- Horarios Menu -->
            @can('admin.horarios.index')
              
          
           <li class="nav-item">
            <a href="#" class="nav-link active">
            <i class="bi bi-calendar3"></i>
              <p>
                Horarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admin/horarios/create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Horarios</p>
                </a> 
              </li>
              <li class="nav-item"> 
                <a href="{{ url('admin/horarios') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de horarios</p>
                </a>
              </li>
            </ul>
          </li>
  @endcan


          <!-- Logout -->

          
          <li class="nav-item">
    <a href="{{ route('logout') }}" 
       class="nav-link" 
       style="background-color: #a9200e;" 
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="nav_icon fas bi bi-door-closed"></i>
        <p>Cerrar Sesión</p>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</li>

      
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
     
  </aside> 

  <!-- Flash Messages -->
  @if(($message = Session::get('mensaje')) && ($icono = Session::get('icono')))
    <script>
      Swal.fire({
        position: "top-end",
        icon: "{{ $icono }}",
        title: "{{ $message }}",
        showConfirmButton: false,
        timer: 2500
      });
    </script>
  @endif

  <!-- Content Wrapper -->
  <div class="content-wrapper ">
    <div class="container mt-4">
      @yield('content')
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
   

  <!-- Main Footer -->
 

  <!-- REQUIRED SCRIPTS -->
  <!-- Bootstrap 4 -->
  <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- DataTables -->
  <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ url('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ url('plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ url('plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{ url('plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ url('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{ url('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{ url('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

  <!-- AdminLTE App -->
  <script src="{{ url('dist/js/adminlte.min.js') }}"></script>
   <!-- Dark Mode Toggle Script (Añadido) -->
   <script>
   const toggleButton = document.getElementById('dark-mode-toggle');
const body = document.body;

// Verificar el estado guardado en localStorage al cargar la página
if (localStorage.getItem('dark-mode') === 'enabled') {
  body.classList.add('dark-mode');
  toggleButton.querySelector('i').classList.remove('fa-moon');
  toggleButton.querySelector('i').classList.add('fa-sun');
}

// Función para activar el modo oscuro
const enableDarkMode = () => {
  body.classList.add('dark-mode');
  toggleButton.querySelector('i').classList.remove('fa-moon');
  toggleButton.querySelector('i').classList.add('fa-sun');
  localStorage.setItem('dark-mode', 'enabled');  // Guardar preferencia en localStorage
};

// Función para desactivar el modo oscuro
const disableDarkMode = () => {
  body.classList.remove('dark-mode');
  toggleButton.querySelector('i').classList.remove('fa-sun');
  toggleButton.querySelector('i').classList.add('fa-moon');
  localStorage.setItem('dark-mode', null);  // Eliminar preferencia de localStorage
};

// Evento del botón para alternar entre modos
toggleButton.addEventListener('click', () => {
  if (body.classList.contains('dark-mode')) {
    disableDarkMode();
  } else {
    enableDarkMode();
  }
});

  </script>
</body>
</html>
