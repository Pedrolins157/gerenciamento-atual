<ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="painel.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa-solid fa-burger"></i>
    </div>
    <i class="fas fa-hamburger fa-3x"></i>
    <div class="sidebar-brand-text mx-1 font-italic fa-1x text-capitalize">Nome Logo!</div>
</a>



<!-- Divider -->
<hr class="sidebar-divider mt-5">

<!-- Heading -->
<div class="sidebar-heading">
    Navegação
</div>


<li class="nav-item">
    <a class="nav-link" href="painel.php">
        <i class="fas fa-home"></i>                    
        <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Nav Item - Pages Collapse Menu -->


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-user-cog"></i>                    
        <span>Usuários</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">O que deseja fazer ?</h6>
            
          <?php if($_SESSION["perfil"] === "adm"){?> <a class="collapse-item" href="cadastrar-usuario.php">Cadastrar Usuário</a><?php } ?>

            <a class="collapse-item" href="consultar-usuario.php">Consultar Usuários</a>

        
        </div>
    </div>
</li>




<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-users"></i>

        <span>Clientes</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">O que deseja fazer ?</h6>
            <a class="collapse-item" href="cadastrar-cliente.php">Cadastrar Cliente</a>
            <a class="collapse-item" href="consultar-cliente.php">Consultar Clientes</a>
        </div>
    </div>
</li>


<hr class="sidebar-divider d-none d-md-block">



<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-fw fa-sign-out-alt"></i>                    
        <span>Sair</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
