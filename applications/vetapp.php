<!-- PHP Functionality -->
<?php

	$servername = 'localhost';
	$username = 'root';
	$password = 'JohnGuo16';
	$database = 'project';
	
	// Create connection
	$conn = new mysqli($servername,$username,$password,$database);
	
	// Check connection
	if (!$conn) 
	{
		echo 'Not Connected to DB';
	}
	
	if (isset($_POST['account']))
	{
		
		// Applicant info
		$fname = $_POST['fnamedbox'];
		$address = $_POST['addressbox'];
		$city = $_POST['citybox'];
		$state = $_POST['statebox'];
		$zip = $_POST['zipbox'];
		$phone = $_POST['phonebox'];
		$email = $_POST['emailbox'];
		
		// Format the date to be compatible with MySQL
		$dob = $_POST['dobbox'];
		$dobfmt = DateTime::createFromFormat('m/d/Y', $dob);
		$dobfmtfinal = $dobfmt->format('Y-m-d');
		
		$avail = $_POST['avbox'];
		$allergies = $_POST['allbox'];
		
		// Applicant emergency contact info
		$fnameEC = $_POST['ecfnamebox'];
		$addressEC = $_POST['ecaddressbox'];
		$phoneEC = $_POST['ecphonebox'];
		$relEC = $_POST['ecrelbox'];
		$policy = $_POST['policy'];
		
		// Additional Information
		$medtraining = $_POST['medtrainingbox'];
		$env = $_POST['envbox'];
		$dirty = $_POST['dirtybox'];
		
								
		// Create query
		$sql = "INSERT INTO Application VALUES (:fname, :address, :city, :state, :zip,
												:phone, :email, :dobfmtfinal, :avail,
												:allergies, :fnameEC, :addressEC, :phoneEC,
												:relEC, :policy, :medtraining, :env, :dirty)";
												
		$stmt = $conn->prepare($sql);
		
		
		$stmt->bind_param("ssssiissbssisbsss", $fname, $address, $city, $state, $zip,
												$phone, $email, $dobfmtfinal, $avail,
												$allergies, $fnameEC, $addressEC, $phoneEC,
												$relEC, $policy, $medtraining, $env, $dirty);
		$stmt->execute();						 
				
	}				
									
?>
<!-- PHP ENDS HERE -->

<!-- HTML STARTS HERE -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vet Application</title>


    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

      <link href="css/custom.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" href="static/stylesheets/app.css">
<script src="static/scripts/library.js"></script>
<script src="static/scripts/base.js"></script>
<script src="static/scripts/chart.js"></script>
<script src="static/scripts/initialize.js"></script>




    <link href="custom.css" rel="stylesheet" type="text/css" media="screen">

    <!-- Custom CSS -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="header">
   <ul class="con">
    <div id="header2">
        <li> 
           <a href="profile_app.html"><img src="img/profile-widget-avatar.jpg" height=30px width=30px> Jennifer Alba </a>
         </li>
           <li id="settings">
           <a href="profile_settings_app.html"><img src="settings.png" class="img-responsive"></a>
       </li>
       <li id="exit">
           <a href="log-in/login_2.php"><img src="exit.png" class="img-responsive"></a>
       </li>               

   </ul>
</div>






<!-- NAVIGATION BAR -->
           
<div id="stream">
   <div class="con">
       <div class="tile" id="hello">
        <div class="col-sm-12">
         <h2><span>Hi,</span> Jennifer</h2>
          <p>You last visited <strong>two hours</strong> ago</p>
       </div>
   </div>
   <div>
 </div>

  <div class="row">
    <div class="container">
        <ul id="nav" class="nav">
        <li> 
           <a  class="tile" href="index_application.html"> 
              <span class="vector"><img src="home.png" class="img-responsive"></span>
           <span class="title"><strong>Home</strong></span>
         </a>
         </li>

            <li> 
           <a  class="tile" href="animalcareapp.html"> 
              <span class="vector"><img src="owl.png" class="img-responsive"></span>
           <span class="title"><strong>Animal Care</strong></span>
         </a>
         </li>

        <li> 
           <a  class="tile" href="transportapp.html"> 
              <span class="vector"><img src="truck.png" class="img-responsive"></span>
           <span class="title"><strong>Transport Team</strong></span>
         </a>
         </li>  

          <li> 
           <a  class="tile" href="outreachapp.html"> 
              <span class="vector"><img src="charity.png" class="img-responsive"></span>
           <span class="title"><strong>Outreach Docents</strong></span>
         </a>
         </li> 

          <li> 
           <a  class="tile" href="vetapp.html"> 
              <span class="vector"><img src="vet.png" class="img-responsive"></span>
           <span class="title"><strong>Veterinarian</strong></span>
         </a>
         </li>   


   </ul>
</div>
</div>
</div>
</div>
</div>




    <!-- Page Content -->
  
            

<div id="animalcareapplication">
      <div class="scroll con">
          <div class="section current" title="Animal Care App" id="animalcareapp">
          <form class="form-horizontal">

            <fieldset>


<!-- Form Name -->
<legend>Veterinarian Application</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Full Name">Full Name</label>  
  <div class="col-md-4">
  <input id="Full Name" name="fnamebox" pattern="^[a-zA-Z ]+$" title="(Letters only!)" type="text" placeholder="" class="form-control input-md" required>
  
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Address</label>  
  <div class="col-md-4">
  <input id="Address" name="addressbox" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="City">City</label>  
  <div class="col-md-4">
  <input id="City" name="citybox" pattern="^[a-zA-Z ]+$" title="(Letters only!)" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">State</label>  
  <div class="col-md-4">
  <input id="State" name="statebox" pattern="^[a-zA-Z ]+$" title="(Letters only!)" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Zipcode</label>  
  <div class="col-md-4">
  <input id="Zipcode" name="zipbox" type="number" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone Number</label>  
  <div class="col-md-4">
  <input id="Phone" name="phonebox" type="number" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="Email" name="emailbox" type="email" placeholder="Please enter a valid email address" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Date of Birth (ex: MM/DD/YYYY)</label>  
  <div class="col-md-4">
  <input id="DateBirth" name="dobbox" type="date" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- This needs to be changed to a different way of entering data -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Availability (Mon-Fri)</label>  
  <div class="col-md-4">
  <input id="Availability" name="avbox" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Please list any allergies/or special needs.</label>  
  <div class="col-md-4">
  <input id="allergies" name="allbox" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<h4>Emergency Contact</h4>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Full Name </label>  
  <div class="col-md-4">
  <input id="ecfname" name="ecfnamebox" pattern="^[a-zA-Z ]+$" title="(Letters only!)" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Address</label>  
  <div class="col-md-4">
  <input id="ecaddress" name="ecaddressbox" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone Number</label>  
  <div class="col-md-4">
  <input id="ecphone" name="ecphonebox" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Relationship to participant</label>  
  <div class="col-md-4">
  <input id="ecrel" name="ecrelbox" pattern="^[a-zA-Z ]+$" title="(Letters only!)" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Agree to Our Policy</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="checkboxes-0">
      <input type="checkbox" name="policy" id="checkboxes-0" value="1">
      *
    </label>
  </div>
</div>


<h4>Additional Information</h4>



<!-- Form Name -->


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Please describe any previous medical or veterinary training you have completed.</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="medtrainingbox" name="medtrainingbox"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">The case load at the Center can be unpredictable and vary greatly depending on the time of year.  Please describe the work environment that you work best in including how you best retain information that is taught to you.</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="envbox" name="envbox" ></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Taking care of animals is a messy job that requires all team members to clean out dirty crates, chop rats or mice for feeding to patients, and collect fecal samples for analysis for example.  Is this something that you foresee struggling with?</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="dirtybox" name="dirtybox" ></textarea>
  </div>
</div>

<form class="form-horizontal">
<fieldset>




<!-- Button -->
<!-- <div id="submitbutton" class="col-sm-10 col-sm-offset-4"> -->
         <!--   <a class="btn btn-large btn-info" href="thankyou.html">Submit Application</a> -->
          <!--   </div> -->
<input type ="submit" id="submitbutton" value="submit application" />








          </div>
      </div>
  </div>





   <!-- FOOTER -->
  <div id="footer">
      <div class="con">
     
      </div>
  </div>
</body>
</html>
    </div>



    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


