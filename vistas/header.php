 <?php
  if (strlen(session_id()) < 1)
    session_start();

  ?>

 <?php include('conn.php'); ?>
 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>FCH CONTROLLER | Home</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="../public/css/bootstrap.min.css">
   <!-- Font Awesome -->

   <link rel="stylesheet" href="../public/css/font-awesome.min.css">

   <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
   <link rel="stylesheet" href="../public/css/_all-skins.min.css">
   <!-- Morris chart -->
   <!-- Daterange picker -->
   <link rel="stylesheet" href="img/apple-touch-ico.png">
   <link rel="stylesheet" href="img/favicon.ico">
   <!-- DATATABLES-->
   <link rel="stylesheet" href="../public/datatables/jquery.dataTables.min.css">
   <link rel="stylesheet" href="../public/datatables/buttons.dataTables.min.css">
   <link rel="stylesheet" href="../public/datatables/responsive.dataTables.min.css">
   <link rel="stylesheet" href="../public/css/bootstrap-select.min.css">

 </head>

 <body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">

     <header class="main-header">
       <!-- Logo -->
       <a href="escritorio.php" class="logo">
         <!-- mini logo for sidebar mini 50x50 pixels -->
         <img src="../img/fcj_controller/fch_controller-01.png" style="width: 100%;">

         <span class="logo-mini"><img src="../img/fcj_controller/hoja-01.png" style="width: 100%;">
</span>
         <!-- logo for regular state and mobile devices -->
         <span class="logo-lg"><img src="../img/fcj_controller/hoja-01.png" style="width: 100%;">
</span>
       
       </a>
       <!-- Header Navbar: style can be found in header.less -->
       <nav class="navbar navbar-static-top">
         <!-- Sidebar toggle button-->
         <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
           <span class="sr-only">NAVIGATION</span>
         </a>

         <div class="navbar-custom-menu" >
           <ul class="nav navbar-nav">

             <li class="dropdown user user-menu">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="user-image" alt="User Image">
                 <span class="hidden-xs"><?php echo $_SESSION['nombre']; ?></span>
               </a>
               <ul class="dropdown-menu">
                 <!-- User image -->
                 <li class="user-header">
                   <img src="../files/usuarios/<?php echo $_SESSION['imagen']; ?>" class="img-circle" alt="User Image">

                   <p>

                   </p>
                 </li>
                 <!-- Menu Footer-->
                 <li class="user-footer">
                   <div class="pull-left">
                     <a href="#" class="btn btn-default btn-flat">Profile</a>
                   </div>
                   <div class="pull-right">
                     <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Exit</a>
                   </div>
                 </li>
               </ul>
             </li>
             <!-- Control Sidebar Toggle Button -->

           </ul>
         </div>
       </nav>
     </header>
     <!-- Left side column. contains the logo and sidebar -->
     <aside class="main-sidebar" >
       <!-- sidebar: style can be found in sidebar.less -->
       <section class="sidebar" >
         <!-- Sidebar user panel -->

         <!-- /.search form -->
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu" data-widget="tree" >

           <br>


           <?php
            if ($_SESSION['escritorio'] == 1) {
              echo ' <li><a href="escritorio.php"><i class="fa  fa-dashboard (alias)"></i> <span>Home</span></a>
        </li>';
            }
            ?>



           <?php
            if ($_SESSION['almacen'] == 1) {
              echo ' <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Items</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="articulo.php"><i class="fa fa-circle-o"></i> Products</a></li>
            <li><a href="categoria.php"><i class="fa fa-circle-o"></i> Category</a></li>
            <li><a href="warehouse.php"><i class="fa fa-circle-o"></i> Warehouse</a></li>
          </ul>
        </li>';
            }
            ?>
           <?php
            if ($_SESSION['compras'] == 1) {
              echo ' <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Purchases</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ingreso.php"><i class="fa fa-circle-o"></i> Product Entry</a></li>
            <li><a href="proveedor.php"><i class="fa fa-circle-o"></i> Suppliers</a></li>
          </ul>
        </li>';
            }
            ?>

<li class="treeview">
                <a href="#">
                  <i class="fa fa-product-hunt fa-fw"></i> Products Category<span class="fa arrow"></span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  <ul class="treeview-menu">

                    <?php
                    $caq = mysqli_query($conn, "select * from categoria order by nombre asc");
                    while ($catrow = mysqli_fetch_array($caq)) {
                    ?>

                       <li><a href="ventasfechacliente.php"></i></a></li>
                       <form action='products2.php' method="post" name="Detalle"><input name="id_txt" type="hidden" value="<?php echo $catrow['idcategoria']; ?>" />
                         <input name="Detalles" type="submit" value="<?php echo $catrow['nombre']; ?>" class="btn btn-info btn-sm" style=" display: inline-block;
     width: 70%;
     margin-top: 3px;
     margin-bottom: 3px;
     margin-left: 3px;
     margin-right: 3px;
     border-radius: 5px;  " /></form>

                  <?php
                    }

                    ?>
                  </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-product-hunt fa-fw"></i> Products By Warehouse<span class="fa arrow"></span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  <ul class="treeview-menu">

                    <?php
                    $caq = mysqli_query($conn, "select * from warehouse order by namewarehouse asc");
                    while ($catrow = mysqli_fetch_array($caq)) {
                    ?>

                       <li><a href="ventasfechacliente.php"></i></a></li>
                       <form action='products3.php' method="post" name="Detalle"><input name="id_txt" type="hidden" value="<?php echo $catrow['idwarehouse']; ?>" />
                         <input name="Detalles" type="submit" value="<?php echo $catrow['namewarehouse']; ?>" class="btn btn-info btn-sm" style=" display: inline-block;
     width: 70%;
     margin-top: 3px;
     margin-bottom: 3px;
     margin-left: 3px;
     margin-right: 3px;
     border-radius: 5px;  " /></form>

                  <?php
                    }

                    ?>
                  </ul>
              </li>

           <?php
            if ($_SESSION['ventas'] == 1) {
              echo '<li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Sales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="venta.php"><i class="fa fa-circle-o"></i> Sales</a></li>
            <li><a href="cliente.php"><i class="fa fa-circle-o"></i> Customers</a></li>
          </ul>
        </li>';
            }
            ?>

           <?php
            if ($_SESSION['acceso'] == 1) {
              echo '  <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Access</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="usuario.php"><i class="fa fa-circle-o"></i> Users</a></li>
            <li><a href="permiso.php"><i class="fa fa-circle-o"></i> Permissions</a></li>
          </ul>
        </li>';
            }
            ?>
           <?php
            if ($_SESSION['consultac'] == 1) {
              echo '     <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Check Purchases</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="comprasfecha.php"><i class="fa fa-circle-o"></i>Purchases by dates</a></li>
          </ul>
        </li>';
            }
            ?>

           <?php
            if ($_SESSION['consultav'] == 1) {
              echo '<li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Consult Sales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ventasfechacliente.php"><i class="fa fa-circle-o"></i> Consult Sales</a></li>

          </ul>
        </li>';
            }
            ?>


<li class="treeview">
                <a href="#">
                  <i class="fa fa-product-hunt fa-fw"></i> Products Category<span class="fa arrow"></span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                  <ul class="treeview-menu">

                    <?php
                    $caq = mysqli_query($conn, "select * from categoria order by nombre asc");
                    while ($catrow = mysqli_fetch_array($caq)) {
                    ?>

                       <li><a href="ventasfechacliente.php"></i></a></li>
                       <form action='products2.php' method="post" name="Detalle"><input name="id_txt" type="hidden" value="<?php echo $catrow['idcategoria']; ?>" />
                         <input name="Detalles" type="submit" value="<?php echo $catrow['nombre']; ?>" class="btn btn-info btn-sm" style=" display: inline-block;
     width: 70%;
     margin-top: 3px;
     margin-bottom: 3px;
     margin-left: 3px;
     margin-right: 3px;
     border-radius: 5px;  " /></form>

                  <?php
                    }

                    ?>
                  </ul>
              </li>

            



<!--            <li class="treeview">
             <a href="#">
               <i class="fa fa-product-hunt fa-fw"></i> Products<span class="fa arrow"></span>
               <span class="pull-right-container">
                 <i class="fa fa-angle-left pull-right"></i>
               </span>
               <ul class="treeview-menu">
                 <ul class="nav nav-second-level">
                   <?php
                    $caq = mysqli_query($conn, "select * from categoria order by nombre asc");
                    while ($catrow = mysqli_fetch_array($caq)) {
                    ?>
                     <li>
                       <form action='products2.php' method="post" name="Detalle"><input name="id_txt" type="hidden" value="<?php echo $catrow['idcategoria']; ?>" />
                         <input name="Detalles" type="submit" value="<?php echo $catrow['nombre']; ?>" class="btn btn-success btn-sm" style=" display: inline-block;
     width: 70%;
     margin-top: 3px;
     margin-bottom: 3px;
     margin-left: 3px;
     margin-right: 3px;
     border-radius: 5px;  " /></form>
                     </li>
                   <?php
                    }

                    ?>

                 </ul>

               </ul>
             </a>
           </li> -->

           <li><a href="#"><i class="fa fa-question-circle"></i> <span>Help</span><small class="label pull-right bg-yellow">PDF</small></a></li>
           <li><a href="#"><i class="fa  fa-exclamation-circle"></i> <span>Help</span><small class="label pull-right bg-yellow">IT</small></a></li>
         </ul>
       </section>
       <!-- /.sidebar -->
     </aside>