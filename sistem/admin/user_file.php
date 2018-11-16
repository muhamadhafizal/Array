<?php
session_start();


include('../connection/config.php');


?>
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="refresh" content="1140;url=logout.php" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HEALTH CLOUD</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	* {
	  box-sizing: border-box;
	}

	#myInput {
	  background-image: url('/css/searchicon.png');
	  background-position: 10px 10px;
	  background-repeat: no-repeat;
	  width: 100%;
	  font-size: 16px;
	  padding: 12px 20px 12px 40px;
	  border: 1px solid #ddd;
	  margin-bottom: 12px;
	}

	#myTable {
	  border-collapse: collapse;
	  width: 100%;
	  border: 1px solid #ddd;
	  font-size: 18px;
	}

	#myTable th, #myTable td {
	  text-align: left;
	  padding: 12px;
	}

	#myTable tr {
	  border-bottom: 1px solid #ddd;
	}

	#myTable tr.header, #myTable tr:hover {
	  background-color: #f1f1f1;
	}
	</style>
</head>
<style>
input[type=text] {
    width: 130px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

/* When the input field gets focus, change its width to 100% */
input[type=text]:focus {
    width: 100%;
}
</style>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
 <header class="main-header">
    <!-- Logo -->
    <a href="user_list.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Health</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HealthCloud</b></span>
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
 </header>  <!-- Left side column. contains the logo and sidebar -->
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


	<section class="content-header">
		  <br/>
		  <h1>
			PATIENT
		  </h1>

		</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
       
          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title pull-right"><a href="" data-toggle="modal" data-target="#exampleModal"><i class='fa fa-plus-square fa-fw'></i></a></h3>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">ADD PATIENT</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Age">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Birth Date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			   <div class="box-body">
			<div class="row">
			<div class="col-xs-12"> <h3 class="box-title"></h3></div></div>

			    <div class="box-footer">
			    
                  <table id="example" class="table table-bordered table-striped">
			              <thead>
			                <tr class="header">
			                	  <th>Name</th>
			                    <th>Age</th>
			                    <th>Birth Date</th> 
                          <th>Details</th>                  
			                </tr>
			              </thead>
			          <tbody>
			          <?php 
			          

            $sqlv= "SELECT * FROM user";

			          $result3 = mysqli_query($db,$sqlv);
			          $rowsView = mysqli_fetch_array($result3);
			          $num = mysqli_num_rows($result3);
			          $pfilearray=array();
			          if($result3 = mysqli_query($db,$sqlv)){
			           if(mysqli_num_rows($result3) > 0){
			          //if($num > 0){
			          while(($rs=mysqli_fetch_assoc($result3)))
			          {	          
			          echo "<tr class='header'><td>"; echo $rs['name']; echo"</td>";
			          echo "<td>"; echo $rs['age']; echo"</td>";
			          echo "<td>"; echo $rs['birth']; echo"</td>";		
                echo "<td>"; echo "<a href='profile_details.php?id="; echo $rs['id']; echo"' class='btn btn-primary'> <i class='fa fa-user'></i></a>"; echo"</td>";      
			           }}}
			          ?>
			        </tbody>
			      </table>        
        		</div>

			  </div>
			   </div>
   
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <div class="control-sidebar-bg"></div>



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
<link rel="stylesheet" 

href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />     
<link rel="stylesheet" 

href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.dataTables.min.css" />     
<Script src="https://code.jquery.com/jquery-1.12.3.js" 

type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js" 
type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js" 
type="text/javascript"></Script>     
<Script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js" 
type="text/javascript"></Script>     
<Script src="https://cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js" 
type="text/javascript"></Script>
<!-- Export a Table to Excel - END -->

<!-- Export a Table to Excel - START -->
<link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />
<!-- you need to include the shieldui css and js assets in order for the components to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jszip.min.js"></script>

</body>
</html>