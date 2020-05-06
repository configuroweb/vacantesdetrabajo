 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link" style="font-weight:bold; font-size:22px;">
    

      <span class="brand-text font-weight-light">ConfiguroWeb | Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/configuroweb.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
<?php
$aid=$_SESSION['lssemsaid'];
$sql="SELECT AdminName from  tbladmin where ID=:aid";
$query = $dbh -> prepare($sql);
$query->bindParam(':aid',$aid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
          <a href="admin-profile.php" class="d-block">Bienvenido : <?php  echo $row->AdminName;?></a>
          <?php $cnt=$cnt+1;}} ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Configuraciones Admin
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin-profile.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actualizar Perfil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="change-password.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cambiar Contraseña</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cerrar Sesión</p>
                </a>
              </li>
             </ul>
          </li>   
          <li class="nav-item has-treeview menu-open">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Panel de Control
               </p>
            </a>
        
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Categoría de Servicios
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Categoría</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage-category.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Administrar Categoría</p>
                </a>
              </li>
             </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Lista de Personas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add-person.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Personas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="manage-person.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Administrar Personas</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Páginas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="about-us.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nosotros</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contact-us.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacto</p>
                </a>
              </li>
            
            </ul>
          </li>
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>