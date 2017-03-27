<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create Account</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
         <link rel="stylesheet" href="assets/css/custom.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
    
    </head>

    <body>

        <!-- Top content -->

    
        <!-- log in box -->
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p>Create your username and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <input type="submit" name="account" value="Create Account">
                                    
									<?php 
								
									 if(isset($_POST['account']))
									 {
										 $servername = 'localhost';
										 $username = 'root';
										 $password = 'JohnGuo16';
										 $database = 'project';
										 $conn = new mysqli($servername,$username,$password,$database);
										if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
										} 
										else{
										
										echo "Connected successfully";
										//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
									
										$sql = "INSERT INTO person(Email, password) VALUES(?,?);";
										//$stmt = mysqli_prepare($conn,$sql);
										//echo $sql;
										
										/*
										if($stmt)
										{
											$email = mysql_escape_string($_POST["form-username"]);
											$password = mysql_escape_string($_POST["form-password"]);
									
										
										mysqli_stmt_bind_param($stmt,'ss', $email, $password);
										$stmt->execute();
										echo "execute";
										
										if($conn->affected_rows > 0)
											{
												echo $sql;
												echo "Committed to DB";
											}
										
										$conn->close();
										
									 }
									 
									 else
									 {
										echo $conn->error;
									 }
									 */
									 $stmt = $conn->prepare("INSERT INTO person(Email, password) VALUES (?,?)");
									 
									 
									 $email = $_POST["form-username"];
									 $password = password_hash($_POST["form-password"], PASSWORD_DEFAULT);
									 echo $password;
									 
									 $stmt->bind_param("ss",$email, $password);
									 echo "bound";
									if( $stmt->execute())
									{
										echo 'Shit fucking worked';
										header("Location: /484/applications/index_application.php");
									}
									else{
										echo $conn->error;
									}
									
									 
									 }
									 }
									 
									?>
                                </form>
                            </div>
                        </div>
                    </div>
            <!-- buttons -->
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

		
									
    </body>
	
</html>