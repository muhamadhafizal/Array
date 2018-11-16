<?php
session_start();
include('../connection/config.php');

$id = $_GET['id'];

$sql_comp = "SELECT * FROM user WHERE id = '$id'";
$result_comp = mysqli_query($db, $sql_comp);
$row_comp = mysqli_fetch_array($result_comp);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HealthCloud</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

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
   <header class="main-header">
    <!-- Logo -->
    <a href="user_list.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HealthCloud</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

    </nav>
  </header>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <br/>
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../assets/img/user1.jpg" class="img-circle" alt="User Image" height="50%" width="50%">
        </div>
        <div class="pull-left info">
          <p>Health</p>
          <a href="../logout.php">
            <i class="fa fa-sign-out"></i> <span>Log Out</span>
          </a>
        </div>
      </div>
      <br/>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li><a href="user_file.php"><i class="fa fa-home"></i>Patient</a></li>
      </ul>

    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        	  <div class="col-md-9 col-md-offset-1">
              <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="box-footer">
               <div class="row">
            <div class="col-md-9 col-md-offset-1">
              <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="box-footer">
              <div class="row">
        <!-- /.col -->
                <div class="col-sm-8">
                  <div class="col-sm-8">
                    <br>
                    <br>
                  <div>
                    <h3><i class="fa fa-address-card-o"></i>&nbsp<?php echo $row_comp['name']; ?> </h3>
                   </div>
                   <div>
                    <h1></h1>
                   </div>
                   <div>
                    <h5><i class="fa fa-birthday-cake"></i>&nbsp&nbsp<b>Age </b>&nbsp&nbsp<?php echo $row_comp['age']; ?></h5>
                   </div>
                   <div>
                    <h5><i class="fa fa-calendar"></i>&nbsp&nbsp<b>Birth Date </b>&nbsp&nbsp<?php echo $row_comp['birth']; ?></h5>
                   </div>

                   <div>
                    <h5><i class="fa fa-map-marker"></i>&nbsp&nbsp&nbsp&nbsp<b>Address </b>&nbsp&nbsp<?php echo $row_comp['address']; ?></h5>
                   </div>
                  </div>
                  </div>
                  <div class="col-sm-4">
                    <div>
                    <?php echo "<img class='img-square' alt='User profile picture' id='blah' src='../uploads/".$row_comp['image']."' width='250' height='250'/>"; ?>
                  </div>
                   </div>
                </div>
                </div>
              </div>
            </div>
        </div>
              </div>
            </div>
        </div>
 
	  <div class="col-md-9 col-md-offset-1">
	   <!--<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="300">-->
      <div class="box box-primary">
            <div class="box-header with-border">
              <h1 class="box-title">Relative</h1>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Widget: user widget style 1 -->
              <div class="row">
			  <!-- /.col -->
                <div class="col-md-12">
                   <table id="example" class="table table-bordered table-striped">
                    <thead>
                      <tr class="header">
                        <th>Name</th>
                        <th>Relation</th>
                        <th>Contact</th>
                      </tr>
                    </thead>
                   
            <?php 
				$sqlv= "SELECT * FROM relative WHERE no = '$id' ";
				if($result3 = mysqli_query($db,$sqlv)){
				if(mysqli_num_rows($result3) > 0){
				while(($rs=mysqli_fetch_assoc($result3)))	
				{
          echo" <tbody>
                <tr>
                <td>";echo $rs['name']; echo"</td>";
                echo"<td>";echo $rs['relation']; echo"</td>";
                echo"<td>";echo $rs['contact']; echo"</td>";
                echo"<tr>
          ";

				 }}}
				?>
        </tbody>
                </table>
				
        
            </div>
            <!-- /.box-body -->
     </div>
</div><!-- /.box-body -->
</div><!-- box box-default collapsed-box-->
</div><!-- col-md-12-->  
    
    	  <div class="col-md-9 col-md-offset-1">
	   <!--<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="300">-->
      <div class="box box-primary">
            <div class="box-header with-border">
              <h1 class="box-title">Illness</h1>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Widget: user widget style 1 -->
              <div class="row">
			  <!-- /.col -->
                <div class="col-md-12">
                  <table id="example" class="table table-bordered table-striped">
                    <thead>
                      <tr class="header">
                        <th>Disease</th>
                        <th>Medicine</th>
                        <th>Dos</th>
                        <th>Remark</th>
                      </tr>
                    </thead>                     
            <?php 
        $sqlv= "SELECT * FROM illness WHERE no = '$id' ";
        if($result3 = mysqli_query($db,$sqlv)){
        if(mysqli_num_rows($result3) > 0){
        while(($rs=mysqli_fetch_assoc($result3))) 
        {
          echo" <tbody>
                <tr>
                <td>";echo $rs['disease']; echo"</td>";
                echo"<td>";echo $rs['medicine']; echo"</td>";
                echo"<td>";echo $rs['dos']; echo"</td>";
                echo"<td>";echo $rs['remark']; echo"</td>";
                echo"<tr>
          ";

         }}}
        ?>
        </tbody>
                </table>
				
        
            </div>
            <!-- /.box-body -->
     </div>
</div><!-- /.box-body -->
</div><!-- box box-default collapsed-box-->
</div><!-- col-md-12-->  

  <div class="col-md-9 col-md-offset-1">
     <!--<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="300">-->
      <div class="box box-primary">
            <div class="box-header with-border">
              <h1 class="box-title">Insurance Policy</h1>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- Widget: user widget style 1 -->
              <div class="row">
        <!-- /.col -->
                <div class="col-md-12">
                   <table id="example" class="table table-bordered table-striped">
                    <thead>
                      <tr class="header">
                        <th>Insurance</th>
                        <th>Contract</th>
                        <th>Amount RM</th>
                      </tr>
                    </thead>                     
            <?php 
        $sqlv= "SELECT * FROM insurance WHERE no = '$id' ";
        if($result3 = mysqli_query($db,$sqlv)){
        if(mysqli_num_rows($result3) > 0){
        while(($rs=mysqli_fetch_assoc($result3))) 
        {
          echo" <tbody>
                <tr>
                <td>";echo $rs['takaful']; echo"</td>";
                echo"<td>";echo $rs['contract']; echo"</td>";
                echo"<td>";echo $rs['amount']; echo"</td>";
                echo"<tr>
          ";

         }}}
        ?>
        </tbody>
                </table>
        
            </div>
            <!-- /.box-body -->
     </div>
</div><!-- /.box-body -->
</div><!-- box box-default collapsed-box-->
</div><!-- col-md-12-->   
	 
   
</div><!-- /.box-body -->
</div><!-- box box-default collapsed-box-->
</div><!-- col-md-12-->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
</div>
</section>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  /*$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })*/
  $(document).ready(function() {
    $('#example1').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    //select.append( '<option value="'+d+'">'+d+'</option>' )
                    select.append( '<option>'+d+'</option>' )
                } );
            } );
        }
    } );
} );
</script>
</body>
</html>
