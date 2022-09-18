<?php
session_start(); 
//include "phpcodes/lecture_del.php";

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/1 - crop.png">
  <title>AnesCare</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <?php include 'topbar.php'; ?>


    <!-- Main Sidebar Container -->
    <?php include 'sidebar.php'; ?>  

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                
                <!-- <li class="breadcrumb-item active">Blank Page</li> -->
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>





      

      <!-- Main content -->


      







      
      <section class="content">
        <div class="jumbotron">
          <!--<h1 class="display-4">INVENTable is easy with 3 Rs</h1>
          <p class="lead">INVENTable is an artificial intelligence aided anaylytics tool to uncover important points in your speech</p>
          <hr class="my-4">
          <p>You only to need to follow three simple steps. RECORD, REFINE & RENDER</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Start</a>
          </p>
        </div>

        <div class="row justify-content-center">
          <img src="img/frontpicsmall.png" class="img-fluid" alt="Responsive image">-->
          <?php
            $output = shell_exec('python ex.py');
              echo $output;

          ?>
          <center><img src='my_plot.png'/></center>
        </div>

       

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>
</html>
