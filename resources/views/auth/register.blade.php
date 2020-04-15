<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Arepa305 | Registrar Usuario</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="{{ url('/home') }}">Arepa 305</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar -->
        <ul class="navbar-nav ml-auto">
        <li class="dropdown">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link d-flex justify-content-center" href="{{ url('/home') }}">
            <span>Panel De Control</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/list_users') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Lista de usuarios</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/register') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Registrar</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/headers') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Principal</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/nosotros') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Nosotros</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/menu') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Menú</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/ubicacion') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Dirección</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Galeria</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="{{ url('/galeria') }}">Titulo Seccion</a> 
            <a class="dropdown-item" href="{{ url('/arepa') }}">Arepas</a>
            <a class="dropdown-item" href="{{ url('/desayuno') }}">Desayunos</a>
            <a class="dropdown-item" href="{{ url('/cachapa') }}">Cachapas</a>
            <a class="dropdown-item" href="{{ url('/hamburguesa') }}">Hamburguesas</a>
            <a class="dropdown-item" href="{{ url('/hotdog') }}">Hot Dogs</a>
            <a class="dropdown-item" href="{{ url('/empanada') }}">Empanadas</a>
            <a class="dropdown-item" href="{{ url('/pepito') }}">Pepitos</a>
            <a class="dropdown-item" href="{{ url('/parrilla') }}">Parrillas</a>
            <a class="dropdown-item" href="{{ url('/patacon') }}">Patacones</a>
            <a class="dropdown-item" href="{{ url('/bebida') }}">Bebidas</a>
          </div>
        </li>
      </ul>


      <div id="content-wrapper">

        <div class="container-fluid">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header d-flex justify-content-center"><strong>Registro de Nuevo Usuario</strong></div>
        <div class="card-body">
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Nombre</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-12 control-label">Apellido</label>

                            <div class="col-md-12">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-12 control-label">Correo</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-12 control-label">Contraseña</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-12 control-label">Confirma Contraseña</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary ">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
          <div class="text-center">
          </div>
        </div>
      </div>
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Arepa 305 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Estas Seguro?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Confirma si deseas cerrar la sesiòn.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="{{ url('/login') }}">Cerrar Sesiòn</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ url('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('js/sb-admin.min.js') }}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ url('js/demo/datatables-demo.js') }}"></script>
    <script src="{{ url('js/demo/chart-area-demo.js') }}"></script>

  </body>

</html>
