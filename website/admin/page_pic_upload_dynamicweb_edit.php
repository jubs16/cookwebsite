<?php
session_start();
include 'conn.php';
if(!isset($_SESSION['email']))
{
	header("location:index.php");
}


if(isset($_REQUEST['submit2']))
{
	if(isset($_REQUEST['pic1']))
	{
	  $sql="UPDATE `page_pic` SET `pic`='".$_REQUEST['pic1']."',`menu`='".$_REQUEST['alb_nm']."' WHERE `id`='".$_REQUEST['id']."'";
	  $result = $conn->query($sql);
	  if($result)
		{
				$msg="page-pic Update Successfully";
		}
 
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Mehek Enterprise</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
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
		<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","GetCategory.php?q="+str,true);
xmlhttp.send();
}
</script>
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

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Product Insert<small>Add Product to your website</small>
     
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Product</a></li>
        <li class="active">Product Entry</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
		
      <!-- SELECT2 EXAMPLE -->
		<div class="box box-primary">
			<div class="box-header with-border"> 
				<div class="box-header">
					<?php
				 if(isset($msg))
				 {
				   echo '<h3 class="box-title">'.$msg.'</h3>';
				 }
				 else
				 {
				    echo '<h3 class="box-title">Product Entry</h3>';	 
				 }
?>
				</div>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
        <!-- /.box-header -->
			<div class="box-body">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="row">
					<div class="col-md-12">
						<div class="col-md-6">
								<div class="form-group">
									<label>Menu Name</label>   
 								
									 <select class="form-control select2" name="menu_nm" onChange="showUser(this.value)" >
                                          <?php
													 if(isset($_REQUEST['menu_nm']))
												 {
												    echo '<option>'.$_REQUEST['menu_nm'].'</option>';
												 }
												 
                                                    $sql="SELECT * FROM `page_pic` where `id`='".$_REQUEST['id']."'";
													$q= $conn->query($sql);
                                                    
                                                    while ($row = mysqli_fetch_array($q,MYSQLI_ASSOC)) 
                                                    {
                                                      echo '<option value="'.$row['menu'].'">'.$row['menu'].'</option>';
                                                     
                                                    
														
													}
                                                  ?>

                                      </select>
									
								</div>
							</div>
							
						</div>
						<div class="col-md-12">
						<div class="col-md-6">
								<div class="form-group">
									<label>Pic</label>   
 								
									 <select class="form-control select2" name="alb_nm" onChange="showUser(this.value)" >
                                          <?php
													 if(isset($_REQUEST['alb_nm']))
												 {
												    echo '<option>'.$_REQUEST['alb_nm'].'</option>';
												 }
												 
                                                    $sql="SELECT * FROM `page_pic` where `id`='".$_REQUEST['id']."'";
													$q= $conn->query($sql);
                                                    
                                                    while ($row = mysqli_fetch_array($q,MYSQLI_ASSOC)) 
                                                    {
                                                      echo '<option value="'.$row['pic'].'">'.$row['pic'].'</option>';
													 
													 $sql2="SELECT * FROM `photo_upload`";
													 $q2= $conn->query($sql2);
                                                     while ($row2 = mysqli_fetch_array($q2,MYSQLI_ASSOC)) 
														{
														  echo '<option value="'.$row2['pic'].'">'.$row2['pic'].'</option>';
														 
														
															
														}
													  
                                                    }
													
                                                  ?>

                                      </select>
									
								</div>
							</div>
							
						</div>
						<div class="col-md-12">
								<div class="form-group">
								<center><button type="submit" name="submit1" class="btn btn-primary">Submit</button> </center>					
								</div>
						</div>
                     				
						
            <!-- /.col -->
					</div>
				
          <!-- /.row -->
			</div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

     
    </section>
	<?php 
	if((isset($_REQUEST['menu_nm']))and (isset($_REQUEST['alb_nm'])))
	{
		?>
	<section class="content">
<div class="panel panel-primary">
      <div class="panel-heading">Picture Upload</div>
      <div class="panel-body">
	    <div class="col-md-12">
							<?php
							
							$sql="SELECT * FROM `page_pic` where `id`='".$_REQUEST['id']."'";
							$q= $conn->query($sql);
							while ($row = mysqli_fetch_array($q,MYSQLI_ASSOC)) 
							{
								
							?>
								<div class="col-md-6">
									<div class="form-group">
										<label>Picture</label>
										<img src="<?php echo $_REQUEST['alb_nm']; ?>" height="200" width="200" alt="NO IMAGE" > <hr>
										
										<input type="hidden" class="form-control" name="pic1" id="pic1" placeholder="" value="<?php echo $_REQUEST['alb_nm']; ?>">
										
										
									</div>	
								</div>
							
									
									
		</div>	
		
	  <?php 
		}
		$conn->close();
		?>
	  <div class="panel-footer">
	 
								
									
										<center><button type="submit" name="submit2"class="btn btn-primary">Submit</button> </center>
										</form>
									
								
	  </div>
    </div>								
								
	</section>	
	<?php 
	}
?>	
		
    <!-- /.content -->
  </div>
  <!-- Content Wrapper. Contains page content -->
 <?php include 'footer.php'; ?>
 </div>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>