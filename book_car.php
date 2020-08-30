<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Car Booking</title>

	
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
    
    $car_id = $_GET['car_id'];
    
    session_start();
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $booking_date = $_SESSION['travel_date'];
    $days = $_SESSION['days'];
    $pickup = $_SESSION['pickup'];
    $drop = $_SESSION['drop'];
    $cus_id = $_SESSION['cid'];
    
    
    //echo $depart;
    
     $sql = "SELECT * From cars Where car_id='$car_id';";
      $result = $conn->query($sql);
     if($result->num_rows != NULL)
        {
             while($row = $result->fetch_assoc())
             {
                 $type = $row["type"];
                 $price = $row["price"];
                 
                 $image = $row["img"];
                 
             }
           
        }
    
    $amt = $days * $price;
    
    $_SESSION['total']=$amt;
    
    $_SESSION['c_image'] = $image;
    $_SESSION['type']=$type;
   
    
    ?>
    

<body>
	<div id="booking" class="section" style="background-image: url(images/<?php echo $drop ?>.jpg);">
		<div class="section-center" style="margin-left:30%;">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post">
							<div class="form-group">
								<div class="form-checkbox">
									<label for="roundtrip">
										<div style="display:flex;flex-direction:row;align-items:center;">
                                        <div>
                                        <img src="<?php echo $image ?>" class="icon">
                                        </div>
                                        <div>
										<span></span> <?php echo $type; ?>
                                        </div>
                                        </div>
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
										<span class="form-label">Booking from</span>
										<input class="form-control" type="text" value="<?php echo $pickup; ?>" readonly ="readonly">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Booking upto</span>
										<input class="form-control" type="text" value="<?php echo $drop; ?>" readonly ="readonly">
									</div>
								</div>
							</div>
                            
                            
							<div class="row">
								<div class="col-md-6">
									<div class="form-group" style="width:180px;">
										<span class="form-label">Booking Date</span>
										<input class="form-control" type="date" value="<?php echo $booking_date; ?>" readonly ="readonly" style="padding-right:0px;"  >
									</div>
								</div>
								
                              
                                <div class="col-md-6">
									<div class="form-group" style="width: 80px;">
										<span class="form-label">Days</span>
										
										<input class="form-control" type="text" value="<?php echo $days; ?>" readonly ="readonly" >
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
										<button class="submit-btn" name="submit" style="background: rgba(20,100,80,1);">Book Car</button>
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
        
        $INSERT = "INSERT Into books_car (firstname,lastname,pickup,date,days,type,cost,cus_id,car_id) Values(?,?,?,?,?,?,?,?,?)";
        
         $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssisiii",$fname,$lname,$pickup,$booking_date,$days,$type,$amt,$cus_id,$car_id);
            $stmt->execute();
        
        echo '<script type="text/javascript">

          window.onload = function () { alert("Booking Successfull"); 
          
          window.location = "c_booking_details.php";
          }

</script>';
        //echo "successful";
        
        $_SESSION['entered_fname']=$fname;
        $_SESSION['entered_lname']=$lname;
        $_SESSION['carid']=$car_id;
    }
    
    ?>

    
    
</body>

</html>