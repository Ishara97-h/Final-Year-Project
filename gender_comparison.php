
<?php
session_start();  
 $connect = mysqli_connect("localhost", "root", "", "asa");  
 $query = "SELECT gender, count(*) as number FROM patients GROUP BY gender";  
 $result = mysqli_query($connect, $query);  
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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Patients',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
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
  
      <section class="content">
        
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
          
           <div style="width:900px;">  
                <h3 align="center"></h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           

       

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



