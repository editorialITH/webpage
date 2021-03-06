<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
  header("Location:../index.php");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Oficina Editorial- ITH -</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../saphv2.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="images/favicon.ico">
    </head>
<header class="header">
  <div class="container">
  <img src="../images/header-ith.png">
<div class="row">
</div>
</header>
<body>
  <!-- top menu -->
<nav id="top-menu" class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="admin.php">Panel administrativo</a>
    </div>
       

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-sesion">
    <form action="#" class="navbar-search form-inline" style="margin-top:6px">
    
    </form>
          <ul class="nav pull-right">
        <li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
          <li><a href="../php/desconectar.php"> Cerrar Cesión </a></li>       
    </ul>
</div>
      </ul>
  </div><!-- /.container-fluid -->
</nav>
<!-- /top memu -->


<!-- body -->
<div class="container">
<div class="row">
    
   <!-- sidebar -->
   <div class="col-md-3">
     <!-- panel -->
        <div class="panel panel-default">
         <div class="panel-heading">
            <i class="fa fa-bars"></i> Menu
            <i class="showmenu fa fa-angle-down pull-right"></i>
         </div>
          <div id="sider-menu" class="panel-body">
             <!-- links -->
                 <a href="admin.php"><i class="fa fa-home"></i> Inicio</a>
                 <a href="charts.php"><i class="fa fa-area-chart"></i> Datos Estadisticos</a>
                 <a href="users.php"><i class="fa fa-users"></i> Usuarios</a>
             <!-- /links -->
          </div>
        </div>
     <!-- /panel -->
   </div>
   <!-- /sidebar -->

   <!-- controls -->
   <div class="col-md-9">
    <!-- panel -->
        <div class="panel panel-default">
         <div class="panel-heading">
           <i class="fa fa-users"></i> Estadisticas
            <a target="_blank" href="principal.php" style="color: ##0404B4;">
             Editorial ITH
            </a>
         </div>
          <div class="panel-body">
            <!-- Chart -->

              <div class="col-md-12">
                <div class="panel panel-default">
                 <div class="panel-heading">Bar Chart</div>
                   <div class="panel-body">
                      <canvas id="barchart"></canvas>
                   </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="panel panel-default">
                 <div class="panel-heading">Chart Area</div>
                   <div class="panel-body">
                      <canvas id="chart-area"></canvas>
                   </div>
                </div>
              </div>

             <div class="col-md-6">
                <div class="panel panel-default">
                 <div class="panel-heading">Line Area</div>
                   <div class="panel-body">
                      <canvas id="line"></canvas>
                   </div>
                </div>
              </div>

             <div class="col-md-6">
                <div class="panel panel-default">
                 <div class="panel-heading">Radar Area</div>
                   <div class="panel-body">
                      <canvas id="radar"></canvas>
                   </div>
                </div>
              </div>    

             <div class="col-md-6">
                <div class="panel panel-default">
                 <div class="panel-heading">Pie Area</div>
                   <div class="panel-body">
                      <canvas id="pie"></canvas>
                   </div>
                </div>
              </div>
          
            <!-- /Chart -->
          </div>
        </div>
     <!-- /panel -->
   </div>
   <!-- controls -->

</div>
</div>
<!-- /body -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Chart.js"></script>
    <script src="../js/saphv2.js"></script>
  </body>
</html>