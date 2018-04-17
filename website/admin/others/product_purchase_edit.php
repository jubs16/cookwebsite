<?php
session_start();
include 'conn.php';



?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Advanced form elements</title>
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
        Product purchase <small>Insert</small>       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Product purchase</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">        
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
     <div class="box-body">
	 <form action="">
        <div class="row">
			<div class="col-md-12">
				<div class="col-md-6">
					<div class="form-group">
						<label>Purchase Form</label>
						<select class="form-control select2" style="width: 100%;">
							<option selected="selected">Alabama</option>
							<option>Alaska</option>
							<option>California</option>
							<option>Delaware</option>
							<option>Tennessee</option>
							<option>Texas</option>
							<option>Washington</option>
						</select>
					</div>
              <!-- /.form-group -->
              <div class="form-group">
			  <label>Purchase Details</label>
                <textarea class="form-control" rows="3" placeholder="Purchase Vendor Details"></textarea>
              </div>
              <!-- /.form-group -->
				</div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Bill Id</label>
                <input type="text" class="form-control" name="Bill Id" id="l1" placeholder="Enter Bill Id">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Transport Details</label>
                <textarea class="form-control" rows="3" placeholder="Type Details"></textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
		</div> 
          <!-- /.row -->
			 <div class="row">
				<div class="col-md-12">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
					<tr>
						<th>Deliver Order No</th>
						<th>Particulars</th>
						<th>Package Details</th>
						<th>GST%</th>
						<th>HSN No</th>
						<th>No & Description Qty</th>
						<th>Quantity</th>
						<th>Price</th>
						
						<th>Taxable Value</th>
										  
					</tr>
					<tr>
						<td>1</td>
						<td>ASDF</td>
						<td>SDF</td>
						<td>DF</td>
						<td>5</td>
						<td>10</td>
						<td>40</td>
						<td>4000</td>
						<td>5</td>
						
					</tr>
					<tr>
						<td>2</td>
						<td>ASDF</td>
						<td>SDF</td>
						<td>DF</td>
						<td>5</td>
						<td>20</td>
						<td>40</td>
						<td>5000</td>
						<td>5</td>
						
					</tr>
					<tr>
						<td>3</td>
						<td>ASDF</td>
						<td>SDF</td>
						<td>DF</td>
						<td>5</td>
						<td>10</td>
						<td>40</td>
						<td>4000</td>
						<td>5</td>
						
                </thead>
           <!--     <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>-->
              </table>
            </div>
			</div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
       
	  
	  
      <!--
        <div class="row">
			  <div class="col-md-12">
			  <br>
			  <div class="col-md-2">
			  <label>Deliver Order No</label>
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  </div>
			   <div class="col-md-2">
			   <label>Particulars</label>
			   <br>
			   <input type="text" class="form-control" placeholder="Enter.....">
			   <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  
			  </div>
			   <div class="col-md-1">
			   <label>GST%</label>
			   <br>
			   <input type="text" class="form-control" placeholder="Enter.....">
			   <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  </div>
			   <div class="col-md-1">
			   <label>HSN No</label>
			   <br>
			    <input type="text" class="form-control" placeholder="Enter.....">
				<br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  <br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  </div>
			   <div class="col-md-2">
			   <label>NO & Description</label><br>
			   <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  </div>
			   <div class="col-md-1">
			   <label>Quantity</label><br>
			    <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  </div>
			   <div class="col-md-1">
			   <label>Price</label><br>
			   <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  </div>
			   <div class="col-md-2">
			   <label>Taxable Value</label><br>
			    <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter....."><br>
			  <input type="text" class="form-control" placeholder="Enter.....">
			  </div>

               
              </div>				
		</div>
		-->
		
		<div class="row">
			<div class="col-md-12">
			
					<div class="col-md-6">
						<div class="form-group">
						<label>Cash Discount</label>
							<input type="text" class="form-control" name="Cash Discount" id="1" placeholder="Enter Cash Discount">
						</div>
						<div class="form-group">
							<label>Total</label>
							<input type="text" class="form-control" name="Total" id="2" placeholder="Enter Total">
						</div>
					</div>
					<div class="col-md-6">
					<br>
					<input type="text" class="form-control" placeholder="Enter.....">
					<br>
					<br>
					<input type="text" class="form-control" placeholder="Enter.....">
					</div>
			</div>		
		</div>
	  

    <div class="row">
		<div class="col-md-12">
		<br>
        <div class="col-md-6">
				<div class="form-group">
                <label>Agent</label>
                <input type="text" class="form-control" name="Agent" id="3" placeholder="Enter Agent">
				</div>
				<div class="form-group">
                <label>Pay By</label>
                <select class="form-control select2" style="width: 100%;">
                  <option >Cash</option>                 
                  <option>Cheque</option>
                  <option>NEFT</option>                 
                </select>
				</div>
				 <div class="form-group">
                <label>Def No</label>
                <input type="text" class="form-control" name="Def No" id="4" placeholder="Enter Def No">
              </div>

        </div>
		<div class="col-md-6">
				 <div class="form-group">
                <label>CGST</label>
                <input type="text" class="form-control" name="CGST" id="5" placeholder="Enter CGST">
              </div>
				<div class="form-group">
                <label>SGST</label>
                <input type="text" class="form-control" name="SGST" id="6" placeholder="Enter SGST">
				</div>
				 <div class="form-group">
                <label>Payable</label>
                <input type="text" class="form-control" name="Payable" id="7" placeholder="Enter Payable">
              </div>
			
        </div>
		</div>
		<div class="col-md-12">
			<div class="box-footer">
                <center><button type="submit" class="btn btn-primary">Uodate</button></center>
            </div>
		</div>
		 
	</div>
		
	
        
       
		</form>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include 'footer.php'; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

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
