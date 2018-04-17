<?php
session_start();
include 'conn.php';
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}


if (isset($_REQUEST['delete']))
{
	$sql = "DELETE FROM `page` WHERE id='" . $_REQUEST['delete'] . "'";
	$result = $conn->query($sql);
	
	/*$res = mysql_query($sql);*/
}


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sree Durga Saw Mill</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
		include 'header.php';
		?>
  <!-- Left side column. contains the logo and sidebar -->
  
<?php
		include 'sidebar.php';
		?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category Details   <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Category Details   </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Menu Details </h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr>
						<th>Sl No.</th>
						<th>Menu Name</th>
						<th>Details</th>                 
						<th>Actions</th>				  
					</tr>
                </thead>
				
				 <?php
				$sql = "SELECT * FROM `page`";
				$result = $conn->query($sql);
				$sl=1;
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					echo '<tr>
					<td>'.$sl.'</td>
					<td>'.$row['menu'].'</td>
					<td>'.$row['details'].'</td>
					<td><a href="page_entry_dynamicweb_edit.php?id='.$row['id'].'"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a> | 
					<a href="?delete='.$row['id'].'"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a> </td>					 
                </tr>';
				$sl++;
				}
				$conn->close();
				
				
				/*$result = mysql_query($sql);
                $sl=1;
				while ($row = mysql_fetch_array($result))
				{
					echo '<tr>
					<td>'.$sl.'</td>
					<td>'.$row['name'].'</td>
					<td><a href="school_edit.php?id='.$row['id'].'"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></a> | 
					<a href="?delete='.$row['id'].'"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a> </td>					 
                </tr>';
				$sl++;
				}*/
               
				?>

		
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'footer.php'; ?>


  <!-- Control Sidebar -->
 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
