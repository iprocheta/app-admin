<?php require 'adminLogin.php' ?>
<?php
    $adlog = new adminLogin();
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $logincheck = $adlog->login($email, $password);
    }
?>



<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

    <link rel="shortcut icon" href="assets/img/gt_favicon.png">
    
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">


    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                   <div class="row">
                      
                      
                    <div class="row">
                          	
                        <div class="col-sm-4 col-sm-offset-4 form-box-border">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
                                <center>
                                    <h3><strong>Heart Attack Prediction System</strong></h3>
                                    <p>Admin Panel Login</p>
                                    </center>
	                        	
	                            </div>
	                            <div class="form-bottom">
                                        <p class="msg">
                    <?php
                        if(isset($logincheck)){
                            echo $logincheck;
                        }
                    ?>
                </p>
				                    <form role="form" action="" method="post" class="registration-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				                    	<div class="form-group">

			                        	<input type="email" name="email" placeholder="E-mail..." class="form-username form-control rounded" id="form-username">
				                        </div>
				                        <div class="form-group">
				                   
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control rounded" id="form-password">
				                        </div>
				                        
				                          <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-off"></span>Login</button>
				                    </form>
			                    </div>
                        	</div>
                    
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
       
                    <div class="col-sm-6 col-sm-offset-6 ">
                     <!-- <h3><a href="#"><b>HOME</b></a><a href="#"><b>ABOUT US</b></a></h3> -->
                    </div> 
                 
                    </div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
       

    </body>

</html>
