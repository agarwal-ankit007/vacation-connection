<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Flight Booking</title>

	
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
    
    $fid = $_GET['flight_id'];
    
    session_start();
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $depart = $_SESSION['departure_date'];
    $seats = $_SESSION['flight_seats'];
    $from = $_SESSION['flight_from'];
    $to = $_SESSION['flight_to'];
    $cus_id = $_SESSION['cid'];
    
    
    //echo $depart;
    
     $sql = "SELECT * From flight Where fid='$fid';";
      $result = $conn->query($sql);
     if($result->num_rows != NULL)
        {
             while($row = $result->fetch_assoc())
             {
                 $depart_time = $row["departure"];
                 $price = $row["price"];
                 $arrival_time = $row["arrival"];
                 $image = $row["icon"];
                 $company = $row["company"];
             }
           
        }
    
    $amt = $seats * $price;
    
    $_SESSION['total']=$amt;
    $_SESSION['dep_time']=$depart_time;
    $_SESSION['f_image'] = $image;
    $_SESSION['company']=$company;
   
    
    ?>
    

<body>
	<div id="booking" class="section" style="background-image: url(images/flightbooking.jpg);">
		<div class="section-center" style="margin-left:25%;">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post">
							<div class="form-group">
								<div class="form-checkbox">
									<label for="roundtrip">
										<img src="<?php echo $image ?>" class="icon">
										<span></span> <?php echo $company; ?>
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
										<span class="form-label">Flying from</span>
										<input class="form-control" type="text" value="<?php echo $from; ?>" readonly ="readonly">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Flying to</span>
										<input class="form-control" type="text" value="<?php echo $to; ?>" readonly ="readonly">
									</div>
								</div>
							</div>
                            
                            
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Travel Date</span>
										<input class="form-control" type="date" value="<?php echo $depart; ?>" readonly ="readonly" style="padding-right:0px;">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Departure</span>
										<input class="form-control" type="time" value="<?php echo $depart_time; ?>" readonly ="readonly" >
									</div>
								</div>
                                <div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Arrival</span>
										<input class="form-control" type="time" value="<?php echo $arrival_time; ?>" readonly ="readonly" >
									</div>
								</div>
                                <div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Seats</span>
										
										<input class="form-control" type="text" value="<?php echo $seats; ?>" readonly ="readonly" >
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Total Amount</span>
										<input class="form-control" type="text" value="<?php echo $amt; ?>" readonly ="readonly" >
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="submit" style="background: rgba(20,100,80,1);">Book flight</button>
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
        
        $INSERT = "INSERT Into books_flight (firstname,lastname,res_date,departure,seats,cost,fid,cus_id) Values(?,?,?,?,?,?,?,?)";
        
         $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssiisi",$fname,$lname,$depart,$depart_time,$seats,$amt,$fid,$cus_id);
            $stmt->execute();
        
        echo '<script type="text/javascript">

          window.onload = function () { alert("Booking Successfull"); 
          
          window.location = "f_booking_details.php";
          }

</script>';
        //echo "successful";
        
        $_SESSION['entered_fname']=$fname;
        $_SESSION['entered_lname']=$lname;
        $_SESSION['flight_number']=$fid;
    }
    
    ?>

    
    
</body>

</html>