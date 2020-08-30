<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Activity Booking</title>

	
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	
	<link type="text/css" rel="stylesheet" href="styles/bootstrap4/bootstrap.min.css" />

	
	<link type="text/css" rel="stylesheet" href="styles/book_flight.css" />

	
    
    
    <style>
    
    .icon
        {
            height: 40px;
            width: 50px;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
    .form-checkbox
        {
            text-transform: uppercase;
        }
    </style>
    
    

</head>
    
    
    <?php
    
    
    
    $user = 'root';
$pass = '';
$db = 'vacation_connection';

$conn = new mysqli('localhost',$user,$pass,$db);
    
    $act_id = $_GET['act_id'];
    
    session_start();
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $date = $_SESSION['date'];
    //$seats = $_SESSION['flight_seats'];
    $location = $_SESSION['location'];
    $activity = $_SESSION['activity'];
    $cus_id = $_SESSION['cid'];
    $img = $_SESSION['img'];
    $cost = $_SESSION['cost'];
    
    
    //echo $depart;
    
     
    
   
    
   
    
    ?>
    

<body>
	<div id="booking" class="section" style="background-image:url(<?php echo $img; ?>);">
		<div class="section-center" style="margin-left:25%;">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post">
							<div class="form-group">
								<div class="form-checkbox">
									<label for="roundtrip">
										<?php echo $activity; ?>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Firstname</span>
										<input class="form-control" type="text" value="<?php echo $fname; ?>" name="finame">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Lastname</span>
										<input class="form-control" type="text" value="<?php echo $lname; ?>" name="laname">
									</div>
								</div>
							</div>
                            
                            
                            <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">City</span>
										<input class="form-control" type="text" value="<?php echo $location; ?>" readonly ="readonly">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Activity</span>
										<input class="form-control" type="text" value="<?php echo $activity; ?>" readonly ="readonly">
									</div>
								</div>
							</div>
                            
                            
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" type="date" value="<?php echo $date; ?>" readonly ="readonly" style="padding-right:0px;">
									</div>
								</div>
								
                                <div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Persons</span>
										
										<input class="form-control" type="text" name="nop" required>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Price per person</span>
										<input class="form-control" type="text" value="<?php echo $cost; ?>" readonly ="readonly" >
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="submit" style="background: rgba(20,100,80,1);">Confirm Booking</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    
    <?php
    
    if(isset($_POST['submit']))
    {
        $fname = $_POST['finame'];
        $lname = $_POST['laname'];
        $nop = $_POST['nop'];
        $total = $cost * $nop;
        
        $INSERT = "INSERT Into books_activities (firstname,lastname,location,date,persons,type,cost,cus_id,act_id) Values(?,?,?,?,?,?,?,?,?)";
        
         $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssisiii",$fname,$lname,$location,$date,$nop,$activity,$total,$cus_id,$act_id);
            $stmt->execute();
        
        echo '<script type="text/javascript">

          window.onload = function () { alert("Booking Successfull"); 
          
          window.location = "a_booking_details.php";
          }

</script>';
        //echo "successful";
        
        $_SESSION['entered_fname']=$fname;
        $_SESSION['entered_lname']=$lname;
        $_SESSION['act_id']=$act_id;
        $_SESSION['persons'] = $nop;
        $_SESSION['total']=$total;
    }
    
    ?>

    
    
</body>

</html>