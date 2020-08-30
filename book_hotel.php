<!DOCTYPE html>
<html>
    
    <head>
    <title>booking</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="vacanation connection project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
   
    

	
	<link type="text/css" rel="stylesheet" href="styles/book_flight.css" />

	
        
    
    </head>
    
    
<?php
    
    $user = 'root';
$pass = '';
$db = 'vacation_connection';

$conn = new mysqli('localhost',$user,$pass,$db);
    
     

    
    
  session_start(); 
  $check_in = $_SESSION['check_in_date'];
  $hid = $_GET['hotel_id'];
  $check_out = $_SESSION['check_out_date'];
  $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $cus_id = $_SESSION['cid'];
    $total_rooms = $_SESSION['total_rooms'];
    $sql = "SELECT * From hotel Where hid='$hid';";
      $result = $conn->query($sql);
     if($result->num_rows != NULL)
        {
             while($row = $result->fetch_assoc())
             {
                 $location = $row["location"];
                 $price = $row["price"];
                 $hname = $row["name"];
                 $image = $row["image"];
                 
             }
           
        }
    $days =abs(round(strtotime($check_out) - strtotime($check_in))/86400);
    $amount = $total_rooms * $price * $days;
    
    
    
     $_SESSION['total']=$amount;
    
    $_SESSION['hname'] = $hname;
    $_SESSION['location']=$location;
   $_SESSION['hotel_image'] = $image;
        
?>

<body>
    
    
    <div id="booking" class="section" style="background-image: url(<?php echo $image; ?>);">
		<div class="section-center" style="margin-left:25%;">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post">
							<div class="form-group">
								<div class="form-checkbox">
									<label for="roundtrip">
										
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
										<span class="form-label">check-in date</span>
										<input class="form-control" type="text" value="<?php echo $check_in; ?>" readonly="readonly">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">check-out date</span>
										<input class="form-control" type="text" value="<?php echo $check_out; ?>" readonly ="readonly">
									</div>
								</div>
							</div>
                            
                            
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">hotel</span>
										<input class="form-control" type="text" value="<?php echo $hname; ?>" readonly ="readonly" style="padding-right:0px;">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">city</span>
										<input class="form-control" type="text" value="<?php echo $location; ?>" readonly ="readonly" >
									</div>
								</div>
                               
                                <div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Rooms</span>
										
										<input class="form-control" type="text" value="<?php echo $total_rooms; ?>" readonly ="readonly" >
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Total Amount</span>
										<input class="form-control" type="text" value="<?php echo $amount; ?>" readonly ="readonly" >
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" name="submit" style="background: rgba(20,100,80,1);">Book</button>
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
        
        $INSERT = "INSERT Into books_hotel (firstname,lastname,check_in,check_out,rooms_booked,total_amt,cus_id,hid) Values(?,?,?,?,?,?,?,?)";
        
         $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssiiii",$fname,$lname,$check_in,$check_out,$total_rooms,$amount,$cus_id,$hid);
            $stmt->execute();
        
        echo '<script type="text/javascript">

          window.onload = function () { alert("Booking Successfull"); 
          
          window.location = "h_booking_details.php";
          }

</script>';
        //echo "successful";
         $_SESSION['entered_fname']=$fname;
        $_SESSION['entered_lname']=$lname;
        $_SESSION['hotelid']=$hid;
        
    }
    
    ?>
    
</body>


</html>