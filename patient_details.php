<?php 
 
  include_once 'reg_server.php';
  $result = mysqli_query($db,"SELECT * FROM patients");
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
  <!-- Navbar -->
  <?php include('topbar.php')?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('sidebar.php')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Patient Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        
        <div class="card-body p-0">
          <table class="table table-striped projects" width="100%">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          Register_ID
                      </th>
                      <th style="width: 10%">
                          Name
                      </th>
                      <th style="width: 5%">
                          Age
                      </th >
                      <th style="width: 15%">
                          Blood Group
                      </th>
                      <th style="width: 5%" class="text-center">
                          Gender
                      </th>
                      <th style="width: 15%">
                          Address
                      </th><th style="width: 10%">
                          Contact
                      </th>
                      <th style="width: 8%">
                          NIC
                      </th>
                      
                  </tr>
                  
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
              </thead>
              <tbody>
                  <tr>
                  <td>
                      <?php echo $row["reg_id"]; ?>
                      </td>
                      <td>
                      <?php echo $row["pname"]; ?>
                      </td>
                      <td>
                      <?php echo $row["age"]; ?>
                      </td>
                      <td>
                      <?php echo $row["bg"]; ?>
                      </td>
                      <td >
                      <?php echo $row["gender"]; ?>
                      </td>
                      <td>
                      <?php echo $row["address"]; ?>      
                    </td>
                      <td>
                      <?php echo $row["phone_no"]; ?>
                      </td>
                      <td>
                      <?php echo $row["nic"]; ?>
                      </td>
                      <td class="project-actions text-right">
                          
                          <a class="btn btn-info btn-sm" href='patient_edit.php?reg_id=<?php echo $row["reg_id"]; ?>'>
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="patient_del.php?reg_id=<?php echo $row['reg_id']; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php
$i++;
}
?>
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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