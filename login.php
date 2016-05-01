<?php
	$n=-1;
	if(isset($_GET['result']))
	$n=$_GET['result'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/styles_3.css" />
	  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/formValidation.css"/>
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/formValidation.js"></script>
    <script type="text/javascript" src="js/framework/bootstrap.js"></script>
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style_1.css" rel="stylesheet">
	<link href="css/default.css" rel="stylesheet">
    <style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style3 {font-family: "Times New Roman", Times, serif}
.style4 {font-family: "Times New Roman", Times, serif; font-weight: bold;}
-->
    </style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1><i class="fa fa-graduation-cap fa-lg"></i>NIT DURGAPUR</h1>
                </a>
            </div>
       
         <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<section class="container login-form">
		<section>
			<form id="defaultForm" method="post" action="check.php" role="login">
				<h3 class="style4">Adminstartive login</h3>
				<div class="form-group">
					<input type="email" name="email" required class="form-control" placeholder="Email address" />
				</div>
				
				<div class="form-group">
					<input type="password" name="pwd" required class="form-control" placeholder="Password" />
				</div>
				<button type="submit"  class="btn btn-primary btn-block style3">Login Now</button>
				 <?php
				  if(isset($_GET['error']))
				  {

				  ?>
                  <tr>
                    <td colspan="2"><div align="center" class="style17"><span class="style20 style1">Invalid Email Id and Password </span></div></td>
                  </tr>
				  <?php
				  }
				  if(isset($_GET['err']))
				  {
				  ?>
                  <tr>
                    <td colspan="2" class="style1"><div align="center" class="style17"><span class="style20">Please Enter  Id and Password </span></div></td>
                  </tr>
				  <?php
				  }
				  ?>
				   <tr>
                    <td colspan="2"><div align="center" class="style17"><span class="style20 style1"><?php if(isset($_GET['sign_out']))
					echo "You are Successfully Log out"; ?> </span></div></td>
                 	</tr>
				<a href="index.html">Return to Home</a>
			</form>
		</section>
	</section>
	
<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            pwd: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    }
                }
            },
        }
    });
});
</script>

</body>
</html>