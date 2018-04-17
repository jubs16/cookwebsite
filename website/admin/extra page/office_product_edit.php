<?php
session_start();
include 'conn.php';
if(isset($_REQUEST['name']))
{
 
$file1_name="";

	
	if(isset($_FILES['pic1'])){
      $errors= array();
      $file1_name = $_FILES['pic1']['name'];
      $file_size =$_FILES['pic1']['size'];
      $file_tmp =$_FILES['pic1']['tmp_name'];
      $file_type=$_FILES['pic1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pic1']['name'])));
      $expensions= array("jpeg","jpg","png");
     
	 if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file1_name);
       //  echo "Success";
      }else{
       $file1_name=$_REQUEST['pic1'];
      }
   }
  else
  {
	  $file1_name=$_REQUEST['pic1'];
  }
   
   if(isset($_FILES['pic1s'])){
      $errors= array();
      $file1s_name = $_FILES['pic1s']['name'];
      $file_size =$_FILES['pic1s']['size'];
      $file_tmp =$_FILES['pic1s']['tmp_name'];
      $file_type=$_FILES['pic1s']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pic1s']['name'])));
      $expensions= array("jpeg","jpg","png");
     
	 if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file1s_name);
        // echo "Success";
      }else{
       $file1s_name=$_REQUEST['pic1s'];
      }
   }
   else
  {
	   $file1s_name=$_REQUEST['pic1s'];
  }
   
   if(isset($_FILES['pic2'])){
      $errors= array();
      $file2_name = $_FILES['pic2']['name'];
      $file_size =$_FILES['pic2']['size'];
      $file_tmp =$_FILES['pic2']['tmp_name'];
      $file_type=$_FILES['pic2']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pic2']['name'])));
      $expensions= array("jpeg","jpg","png");
     
	 if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file2_name);
         //echo "Success";
      }else{
        $file2_name=$_REQUEST['pic2'];
      }
   }
   else
  {
	  $file2_name=$_REQUEST['pic2'];
  }
   
   if(isset($_FILES['pic2s'])){
      $errors= array();
      $file2s_name = $_FILES['pic2s']['name'];
      $file_size =$_FILES['pic2s']['size'];
      $file_tmp =$_FILES['pic2s']['tmp_name'];
      $file_type=$_FILES['pic2s']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pic2s']['name'])));
      $expensions= array("jpeg","jpg","png");
     
	 if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file2s_name);
        // echo "Success";
      }else{
        $file2s_name=$_REQUEST['pic2s'];
      }
   }
   else
  {
	  $file2s_name=$_REQUEST['pic2s'];
  }
   
   if(isset($_FILES['pic3'])){
      $errors= array();
      $file3_name = $_FILES['pic3']['name'];
      $file_size =$_FILES['pic3']['size'];
      $file_tmp =$_FILES['pic3']['tmp_name'];
      $file_type=$_FILES['pic3']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pic3']['name'])));
      $expensions= array("jpeg","jpg","png");
     
	 if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file3_name);
         //echo "Success";
      }else{
        $file3_name=$_REQUEST['pic3'];
      }
   }
   else
  {
	  $file3_name=$_REQUEST['pic3'];
  }
   
   if(isset($_FILES['pic3s'])){
      $errors= array();
      $file3s_name = $_FILES['pic3s']['name'];
      $file_size =$_FILES['pic3s']['size'];
      $file_tmp =$_FILES['pic3s']['tmp_name'];
      $file_type=$_FILES['pic3s']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pic3s']['name'])));
      $expensions= array("jpeg","jpg","png");
     
	 if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file3s_name);
         //echo "Success";
      }else{
        $file3s_name=$_REQUEST['pic3s']; 
      }
   }
   else
  {
	 $file3s_name=$_REQUEST['pic3s']; 
  }
   
   if(isset($_FILES['pic4'])){
      $errors= array();
      $file4_name = $_FILES['pic4']['name'];
      $file_size =$_FILES['pic4']['size'];
      $file_tmp =$_FILES['pic4']['tmp_name'];
      $file_type=$_FILES['pic4']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pic4']['name'])));
      $expensions= array("jpeg","jpg","png");
     
	 if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file4_name);
         //echo "Success";
      }else{
         $file4_name=$_REQUEST['pic4']; 
      }
   }
   else
  {
	 $file4_name=$_REQUEST['pic4']; 
  }
   
   if(isset($_FILES['pic4s'])){
      $errors= array();
      $file4s_name = $_FILES['pic4s']['name'];
      $file_size =$_FILES['pic4s']['size'];
      $file_tmp =$_FILES['pic4s']['tmp_name'];
      $file_type=$_FILES['pic4s']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pic4s']['name'])));
      $expensions= array("jpeg","jpg","png");
     
	 if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file4s_name);
         //echo "Success";
      }else{
          $file4s_name=$_REQUEST['pic4s'];
      }
   }
   else
  {
	  $file4s_name=$_REQUEST['pic4s'];
  }
   
   $sql="UPDATE `picture` SET `office`='".$_REQUEST['office']."',`name`='".$_REQUEST['name']."',`category`='".$_REQUEST['category']."',`details`='".$_REQUEST['details']."',`size`='".$_REQUEST['size']."',`price`='".$_REQUEST['price']."',`pic1`='".$file1_name."',`pic1s`='".$file1s_name."',`pic2`='".$file2_name."',`pic2s`='".$file2s_name."',`pic3`='".$file3_name."',`pic3s`='".$file3s_name."',`pic4`='".$file4_name."',`pic4s`='".$file4s_name."' WHERE  id='".$_REQUEST['id']."'";
 //$sql="INSERT INTO `schoolproduct`( `school`,`name`,`category`, `details`, `size`, `price`, `pic1`, `pic1s`, `pic2`, `pic2s`, `pic3`, `pic3s`, `pic4`, `pic4s`) VALUES ('".$_REQUEST['school']."','".$_REQUEST['name']."','".$_REQUEST['category']."','".$_REQUEST['details']."','".$_REQUEST['size']."','".$_REQUEST['price']."','".$file1_name."','".$file1s_name."','".$file2_name."','".$file2s_name."','".$file3_name."','".$file3s_name."','".$file4_name."','".$file4s_name."')";
  $res=mysql_query($sql);
  if($res)
	{
			$msg="Product Insert Successfully";
	}
	
	
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ganavesa</title>
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
xmlhttp.open("GET","GetCategory1.php?q="+str,true);
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
      Product Entry<small>Update</small>
     
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
				     <?php
                              $update="select * from picture where id='".$_REQUEST['id']."'";
                              $q=mysql_query($update);
				              while($row1=mysql_fetch_array($q))
				              {
                                     echo '<input type="hidden" class="form-control" name="id" value="'.$row1['id'].'" required  />';
                          
                          ?> 
					<div class="row">
						<div class="col-md-12">
						<div class="col-md-6">
								<div class="form-group">
									<label>Office Name</label>                 
									 <select class="form-control select2" name="office" onChange="showUser(this.value)" >
                                                                       <?php
													echo '<option value="'.$row1['office'].'">'.$row1['office'].'</option>';
                                                    $sql="select * from  office";
													$q= mysql_query($sql);
                                                    echo '<option></option>';
                                                    while ($row = mysql_fetch_array($q)) 
                                                    {
                                                      echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                                     
                                                    }

                                                  ?>

                                                                    </select>
									
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Category</label>                 
									<div id="txtHint">
									<select class="form-control select2" name="category" >
									<option value="<?php echo $row1['category'] ;  ?>"><?php echo $row1['category'] ;  ?></option>
                                    </select>
									</div>
								</div>
							</div>						
							
						</div>
                        <div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label>Product Name</label>                 
									<input type="text" class="form-control" name="name" id="1" placeholder="Enter Category Name" value="<?php echo $row1['name'] ;  ?>" >
								</div>
							</div>	
                            <div class="col-md-6">
								<div class="form-group">
									<label>Size</label>                 
									<input type="text" class="form-control" name="size" id="1" placeholder="Enter Category Name" value="<?php echo $row1['size'] ;  ?>">
									
								</div>
							</div>							
							<div class="col-md-6">
								<div class="form-group">
									<label>Details</label>                 
									<textarea class="form-control" name="details" id="1" placeholder="Enter Category Name"><?php echo $row1['details'] ;  ?></textarea>
									
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Price</label>                 
									<input type="text" class="form-control" name="price" id="1" placeholder="Enter Category Name" value="<?php echo $row1['price'] ;  ?>">
									
								</div>
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
	<section class="content">
<div class="panel panel-primary">
      <div class="panel-heading">Picture Upload</div>
      <div class="panel-body">
	    <div class="col-md-12">
							
								<div class="col-md-3">
									<div class="form-group">
										<label>Pic 1</label><br>
										<img src="<?php echo "images/".$row1['pic1'] ;  ?>" height="200" width="200" alt="NO IMAGE"> <hr>
										<input type="file" class="form-control" name="pic1" id="pic1" placeholder="Enter ESI">
										<input type="hidden" class="form-control" name="pic1" id="pic1" placeholder="" value="<?php echo $row1['pic1'] ?>">
									</div>	
								</div>
								<div class="col-md-3">
									<div class="form-group">
									
										<label>Pic 1 Small</label><br>
										<img src="<?php echo "images/".$row1['pic1s'] ;  ?>" height="200" width="200" alt="NO IMAGE"> <hr>
										<input type="file" class="form-control" name="pic1s" id="pic1s" placeholder="Enter PF">
										<input type="hidden" class="form-control" name="pic1s" id="pic1" placeholder="" value="<?php echo $row1['pic1s'] ?>">
									</div>	
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Pic 2</label><br>
										<img src="<?php echo "images/".$row1['pic2'] ;  ?>" height="200" width="200" alt="NO IMAGE"> <hr>
										<input type="file" class="form-control" name="pic2" id="pic2" placeholder="Enter LW Found">
										<input type="hidden" class="form-control" name="pic2" id="pic1" placeholder="" value="<?php echo $row1['pic2'] ?>">
									</div>
								</div>	
<div class="col-md-3">
									<div class="form-group">
										<label>Pic 2 Small</label><br>
										<img src="<?php echo "images/".$row1['pic2s'] ;  ?>" height="200" width="200" alt="NO IMAGE"> <hr>
										<input type="file" class="form-control" name="pic2s" id="pic2s" placeholder="Enter LW Found">
										<input type="hidden" class="form-control" name="pic2s" id="pic1" placeholder="" value="<?php echo $row1['pic2s'] ?>">
									</div>
								</div>									
							</div>							
							<div class="col-md-12">
								<div class="col-md-3">
									<div class="form-group">
										<label>Pic 3</label><br>
										<img src="<?php echo "images/".$row1['pic3'] ;  ?>" height="200" width="200" alt="NO IMAGE"> <hr>
										<input type="file" class="form-control" name="pic3" id="pic3" placeholder="Enter PTAX">
										<input type="hidden" class="form-control" name="pic3" id="pic1" placeholder="" value="<?php echo $row1['pic3'] ?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Pic 3 Small</label><br>
										<img src="<?php echo "images/".$row1['pic3s'] ;  ?>" height="200" width="200" alt="NO IMAGE"> <hr>
										<input type="file" class="form-control" name="pic3s" id="pic2s" placeholder="Enter PTAX">
										<input type="hidden" class="form-control" name="pic3s" id="pic1" placeholder="" value="<?php echo $row1['pic3s'] ?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Pic 4</label><br>
										<img src="<?php echo "images/".$row1['pic4'] ;  ?>" height="200" width="200" alt="NO IMAGE"> <hr>
										<input type="file" class="form-control" name="pic4" id="pic4" placeholder="Enter PTAX">
										<input type="hidden" class="form-control" name="pic4" id="pic1" placeholder="" value="<?php echo $row1['pic4'] ?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Pic 4 Small</label><br>
										<img src="<?php echo "images/".$row1['pic4s'] ;  ?>" height="200" width="200" alt="NO IMAGE"> <hr>
										<input type="file" class="form-control" name="pic4s" id="pic4s" placeholder="Enter LW Found">
										<input type="hidden" class="form-control" name="pic4s" id="pic4s" placeholder="" value="<?php echo $row1['pic4s'] ?>">
									</div>
								</div>	
								
							</div>	         
				
	  </div>
	  <div class="panel-footer">
	 
								
									
										<center><button type="submit" class="btn btn-primary">Submit</button> </center>
										<?php
							  }
										?>
										</form>
									
								
	  </div>
    </div>								
								
	</section>							
		
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