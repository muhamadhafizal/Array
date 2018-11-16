<?php
session_start();

include('connection/config.php');

$sql = "SELECT * FROM user";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

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
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

 
</head>



<script type="text/javascript">
$(document).ready(function(){
    $("#myNav").affix({
        offset: { 
            top: $(".header").outerHeight(true)
        }
    });
});
</script>


<style>
.dl-horizontal dt { text-align: left; }
.navbar-brand {padding: 0px;}
.example2 .navbar-brand>img {padding: 7px 15px;}

.card {
	top:0;
    max-height: 350;
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 1px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
	background-color:white;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
	border:1px solid rgba(0, 0, 0, .05);
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
	margin-left:0.6em;
	
}
.card-title1 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
	
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
	margin-left:1.0em;
	margin-right:1.0em;
	
}
.card-subtitle {
	margin-left:1.0em;
	margin-right:1.0em;
	
}
.card-link {
	margin-left:1.0em;
	margin-right:1.0em;
	
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}
.div {
    width:300px;
    height:300px;    
    overflow:hidden;
}
.div img {
    min-width:100%;
}
</style>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <header class="main-header">
  <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar">
    	<a href="user_list.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Health</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HealthCloud</b></span>
    </a>
	<!-- <a href="main.php" class="logo">
      <span class="logo-mini"><b>U</b>maker</span>
      <span class="logo-lg"><b>Uni</b>maker</span></span>
    </a>-->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
	  <li class="home-menu">
		  <a href="main.php">
              <i class="fa fa-home fa-fw"></i>
            </a>
		  </li>
		  <li class="home-menu">
		  <a href="logout.php">
              <i class="fa fa-sign-out"></i>
            </a>
		  </li> 
        </ul>
      </div>
    </nav>
  </header>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	 <section class="content">
		<div class="row">  
			<div class="col-md-1">
			</div>
        <div class="col-xs-10">
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
                          <th>Action</th>                  
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
			<div class="col-md-2">
			</div>
		</div>	
		</section>
 	</div>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
	$('#example2').DataTable()
  })
</script>
</body>
</html>