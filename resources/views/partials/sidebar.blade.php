<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Trisomía 21</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
                <i class="fas fa-id-card-alt"></i>
              <p>
                Censo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('censado.create') }}" class="nav-link">
                    <i class="far fa-id-badge"></i>
                  <p>Formulario Censo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('censado.index') }}" class="nav-link">
                    <i class="far fa-address-card"></i>
                  <p>Lista del censados</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('tutor.create') }}" class="nav-link">
                    <i class="far fa-id-badge"></i>
                  <p>Formulario Tutor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tutor.index') }}" class="nav-link">
                    <i class="far fa-address-card"></i>
                  <p>Lista de tutores</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-address-card"></i>
                  <p>Listar Obras Sociales</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-address-card"></i>
                  <p>Listar Patologías</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/pensiones" class="nav-link">
                    <i class="far fa-address-card"></i>
                  <p>Listar Pensiones</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-address-card"></i>
                  <p>Listar Tratamientos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="far fa-address-card"></i>
                  <p>Listar Residencias</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
