<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<title>Ingresar {{$nombreaccion}}</title>

  <link rel="icon" type="image/png" href="/img/logo.png" />

  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- estilo para el template -->
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <!--estilo para la pagina -->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <div id="wrapper">

    <!-- este es el Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - la marca -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sistema de Inventarios </div>
      </a>

      <!-- Divis or-->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divisor -->
      <hr class="sidebar-divider">

      <!-- Cabecera -->
      <div class="sidebar-heading">
        Ingreso En inventario
      </div>
      <li class="nav-item">
        <a class="nav-link" href="/categoria">
          <i class="fas fa-fw fa-table"></i>
          <span>Categoria</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sucursales">
          <i class="fas fa-fw fa-tablet"></i>
          <span>Sucursales</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/bodegas">
          <i class="fas fa-fw fa-table"></i>
          <span>Bodegas</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/razonesMovimiento"> 
          <i class="fas fa-fw fa-table"></i>
          <span>Razones de Movimiento</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pasillos">
          <i class="fas fa-fw fa-table"></i>
          <span>Pasillos</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/estanteria">
          <i class="fas fa-fw fa-table"></i>
          <span>Estanteria</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/tiposProducto">
          <i class="fas fa-fw fa-table"></i>
          <span>Tipos de Productos</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/ingresoSalidaProducto">
          <i class="fas fa-fw fa-table"></i>
          <span>Ingreso/Salida Producto</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/listarStock">
          <i class="fas fa-fw fa-table"></i>
          <span>Kartex</span></a>
      </li>

      <!-- Divisor -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler-->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- fin de Sidebar -->

    <!--contenedor de wrappers-->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- mantenedor de contenedores -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscando para..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->

            <li class="nav-item dropdown no-arrow mx-1">
             
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - Informacion de Usuario -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="fas fa-list fa-sm fa-fw mr-2 text-gray-400 img-profile rounded-circle"></div>
                 </a>
              <!-- Dropdown - Informacion de Usuario -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Session
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- fin de Topbar -->

        <!-- inicio de pagina de contenidos -->
        <div class="container-fluid">

          <!-- cabecera de pagina-->
         @if($path!="listaStock")
          <h1 class="h3 mb-2 text-gray-800">Ingresar {{$nombreaccion}}</h1>
          <p class="mb-4">
            <a href="#" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#registrarNuevoModal">
                  Nueva {{$nombreaccion}}
                </a>

            Puedes agregar , eliminarla o actualizarla.</p>

          <!-- DataTales ejemplo -->
         
            @include('tabledata')
          @else
            @include('tableKartexBodega')
            @include('tableKartexSucursal')
          @endif

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- fin del principal Contenido -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; privado UMG 2020</span>
          </div>
        </div>
      </footer>
      <!-- fin del Footer -->

    </div>
    <!-- fin de contenedor Wrapper -->

  </div>
  <!-- fin de la pagina Wrapper -->

  <!-- boton de Scroll hacia ariba -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Estas seguro que quieres salir de la Session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="/logout">Salir</a>
        </div>
      </div>
    </div>
  </div>

   <div class="modal fade" id="registrarNuevoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingresar Nuevo</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Ingresando nueva {{$nombreaccion}}.
          <form class="user" method="POST" action="{{$path}}/add">
                <!-- grupo de controles input-->
                 @if($path!="ingresoSalidaProducto")
                    <div class="form-group">
                      <input type="text" name="nombre{{$path}}" class="form-control form-control-user" id="nombre{{$nombreaccion}}" aria-describedby="ingresa el nombre de {{$nombreaccion}}" placeholder="Nombre de {{$nombreaccion}}...">
                    </div>
                 @endif
                    <!-- AGREGAR BODEGAS A PASILLO-->
                    @if($path=="pasillos" or $path=="ingresoSalidaProducto")
                    <div class="form-group">
                      <select name="idBodega" class="browser-default custom-select">
                        <option selected>Seleccione una bodega</option>
                        @foreach($bodegas as $bodega)
                          <option value="{{$bodega->idBodega}}">{{$bodega->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                    @endif
                     <!-- AGREGAR PASILLO A ESTANTERIA-->
                    @if($path=="estanteria" or $path=="ingresoSalidaProducto")
                    <div class="form-group">
                      <select name="idPasillo" class="browser-default custom-select">
                        <option selected>Seleccione el pasillo</option>
                        @foreach($pasillos as $pasillo)
                          <option value="{{$pasillo->idPasillo}}">{{$pasillo->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>
                    @endif
                    @if($path=="tiposProducto")
                      <div class="form-group">
                      <input type="text" name="codigo{{$path}}" class="form-control form-control-user" id="codigo{{$nombreaccion}}" aria-describedby="ingresa el codigo de {{$nombreaccion}}" placeholder="codigo...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="precioCosto" class="form-control form-control-user" id="precioCosto" aria-describedby="ingresa el precio del costo de {{$nombreaccion}}" placeholder="Precio Costo de {{$nombreaccion}}...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="precioVenta" class="form-control form-control-user" id="precioVenta" aria-describedby="Ingresa el Precio del Venta de {{$nombreaccion}}" placeholder="Precio Venta de {{$nombreaccion}}...">
                    </div>
                     <div class="form-group">
                      <select name="idCategoria" class="browser-default custom-select">
                        <option selected>Seleccione una Categoria</option>
                        @foreach($categorias as $categoria)
                          <option value="{{$categoria->idCategoria}}">{{$categoria->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                    @endif
                    @if($path=="ingresoSalidaProducto")
                    <div class="form-group">
                      <select name="idProducto" class="browser-default custom-select">
                        <option selected>Seleccione un tipo de producto</option>
                        @foreach($productos as $producto)
                          <option value="{{$producto->idProducto}}">{{$producto->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="idSucursal" class="browser-default custom-select">
                        <option selected>Seleccione una sucursal</option>
                        @foreach($sucursales as $sucursal)
                          <option value="{{$sucursal->idSucursal}}">{{$sucursal->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="idEstanteria" class="browser-default custom-select">
                        <option selected>Seleccione una estanteria</option>
                        @foreach($estanterias as $estanteria)
                          <option value="{{$estanteria->idEstanteria}}">{{$estanteria->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="idrazonMovimiento" class="browser-default custom-select">
                        <option selected>Seleccione un razon de movimiento</option>
                        @foreach($razonmovimientos as $razonmovimiento)
                          <option value="{{$razonmovimiento->idrazonMovimiento}}">{{$razonmovimiento->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>
                      <div class="form-group">
                      <select name="estado" class="browser-default custom-select">
                        <option selected>Seleccione estado de producto</option>
                          <option value="0">En bodega</option>
                          <option value="1">En sucursal</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <input type="text" name="cantidad" class="form-control form-control-user" id="cantidad" aria-describedby="ingresa la cantidad de producto" placeholder="cantidad de producto...">
                    </div>
                    @endif

                    <input type="hidden" name="seccion" value="{{$path}}"/>
                     
                     @csrf
                    
                    <!--a href="#" class="btn btn-primary btn-user btn-block"-->
                      <input type="submit"  class="btn btn-primary btn-user btn-block" value="Registrar"/>
                     
                    <!--/a-->
                    <hr>
              </form>


        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <!--a class="btn btn-primary" href="login.html">Registrar</a-->
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="actualizarNuevoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Actualizando  {{$nombreaccion}}.
          <form class="user" method="POST" action="{{$path}}/actualizar">
                <input type="hidden" name="path" value="{{$path}}"/>
                @method('PUT')
                <input type="hidden" name="tableName" value="{{$tablaName}}"/>
                @if($path!="listaStock")
                 <input type="hidden" name="idname" value="{{$idName}}">
                 <input type="hidden" id="idvalueactualization" name="idvalueactualization" value="0"/>
                @endif
                <!-- grupo de controles input-->
                 @if($path!="ingresoSalidaProducto")
                    <div class="form-group">
                      <input type="text" id="nombre{{$path}}" name="nombre{{$path}}" class="form-control form-control-user" aria-describedby="ingresa el nombre de {{$nombreaccion}}" placeholder="Nombre de {{$nombreaccion}}...">
                    </div>
                 @endif
                    <!-- AGREGAR BODEGAS A PASILLO-->
                    @if($path=="pasillos" or $path=="ingresoSalidaProducto")
                    <div class="form-group">
                      <select name="idBodega" id="idBodegaA" class="browser-default custom-select">
                        <option selected>Seleccione una bodega</option>
                        @foreach($bodegas as $bodega)
                          <option value="{{$bodega->idBodega}}">{{$bodega->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                    @endif
                     <!-- AGREGAR PASILLO A ESTANTERIA-->
                    @if($path=="estanteria" or $path=="ingresoSalidaProducto")
                    <div class="form-group">
                      <select name="idPasillo" id="idPasilloA" class="browser-default custom-select">
                        <option selected>Seleccione el pasillo</option>
                        @foreach($pasillos as $pasillo)
                          <option value="{{$pasillo->idPasillo}}">{{$pasillo->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>
                    @endif
                    @if($path=="tiposProducto")
                      <div class="form-group">
                      <input type="text" name="codigo{{$path}}" id="codigo{{$path}}A" class="form-control form-control-user" id="codigo{{$nombreaccion}}" aria-describedby="ingresa el codigo de {{$nombreaccion}}" placeholder="codigo...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="precioCosto" id="precioCostoA" class="form-control form-control-user" id="precioCosto" aria-describedby="ingresa el precio del costo de {{$nombreaccion}}" placeholder="Precio Costo de {{$nombreaccion}}...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="precioVenta" id="precioVentaA" class="form-control form-control-user" id="precioVenta" aria-describedby="Ingresa el Precio del Venta de {{$nombreaccion}}" placeholder="Precio Venta de {{$nombreaccion}}...">
                    </div>
                     <div class="form-group">
                      <select name="idCategoria" id="idCategoriaA" class="browser-default custom-select">
                        <option selected>Seleccione una Categoria</option>
                        @foreach($categorias as $categoria)
                          <option value="{{$categoria->idCategoria}}">{{$categoria->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                    @endif
                    @if($path=="ingresoSalidaProducto")
                    <div class="form-group">
                      <select name="idProducto" id="idProductoA" class="browser-default custom-select">
                        <option selected>Seleccione un tipo de producto</option>
                        @foreach($productos as $producto)
                          <option value="{{$producto->idProducto}}">{{$producto->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="idSucursal" id="idSucursalA" class="browser-default custom-select">
                        <option selected>Seleccione una sucursal</option>
                        @foreach($sucursales as $sucursal)
                          <option value="{{$sucursal->idSucursal}}">{{$sucursal->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="idEstanteria" id="idEstanteriaA" class="browser-default custom-select">
                        <option selected>Seleccione una estanteria</option>
                        @foreach($estanterias as $estanteria)
                          <option value="{{$estanteria->idEstanteria}}">{{$estanteria->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <select name="idrazonMovimiento" id="idrazonMovimientoA" class="browser-default custom-select">
                        <option selected>Seleccione un razon de movimiento</option>
                        @foreach($razonmovimientos as $razonmovimiento)
                          <option value="{{$razonmovimiento->idrazonMovimiento}}">{{$razonmovimiento->descripcion}}</option>
                        @endforeach
                      </select>
                    </div>
                      <div class="form-group">
                      <select name="estado" id="estadoA" class="browser-default custom-select">
                        <option selected>Seleccione estado de producto</option>
                          <option value="0">En Bodega</option>
                          <option value="1">En Sucursal</option>
                      </select>
                    </div>
                     <div class="form-group">
                      <input type="text" name="cantidad" id="cantidadA" class="form-control form-control-user" id="cantidad" aria-describedby="ingresa la cantidad de producto" placeholder="cantidad de producto...">
                    </div>
                    @endif

                    <input type="hidden" name="seccion" value="{{$path}}"/>
                     
                     @csrf
                    
                    <!--a href="#" class="btn btn-primary btn-user btn-block"-->
                      <input type="submit"  class="btn btn-primary btn-user btn-block" value="Actualizar"/>
                     
                    <!--/a-->
                    <hr>
              </form>


        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <!--a class="btn btn-primary" href="login.html">Registrar</a-->
        </div>
      </div>
    </div>
  </div>

  <!-- javascript para para atender el evento de actualizacion de modaltoggle-->
 
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- modificaciones de script de todas las paginas-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!--  plugins de nivel de pagina -->
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!--  scripts  modificable de nivel de pagina-->
  <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
   <script src="{{asset('js/eventClickUpdate.js') }}"></script>

</body>

</html>
