
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Pana Business </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Modulos
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsuario"
                    aria-expanded="true" aria-controls="collapseUsuario">
                    <i class="fas fa-user"></i>
                    <span>Usuarios</span>
                </a>
                <div id="collapseUsuario" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Modulo De Usuarios:</h6>
                        <a class="collapse-item" href="<?php echo getUrl("Usuario", "Usuario", "crearUsuario"); ?>">Registrar Usuarios</a> 
                        <a class="collapse-item" href="<?php echo getUrl("Usuario", "Usuario", "listarUsuario"); ?>">Lista De Usuarios</a>
                    </div>
                </div>

                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTareas"
                    aria-expanded="true" aria-controls="collapseTareas">
                    <i class="fas fa-clipboard-list"></i>
                    <span> Tareas </span>
                </a>
                <div id="collapseTareas" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header"> Modulo Tareas: </h6>
                        <a class="collapse-item" href="<?php echo getUrl("Tareas", "Tareas", "registrarTarea"); ?>"> Registrar Nueva Tarea </a>
                        <a class="collapse-item" href="<?php echo getUrl("Tareas", "Tareas", "listarTareas"); ?>"> Listar Tareas </a>
                    </div>
                </div>


            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        