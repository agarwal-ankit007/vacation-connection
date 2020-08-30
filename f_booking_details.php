<html>
<head>
    
    
    
    
    <script>
    
    function redirect()
        {
           window.location = "after_login.php" ;
        }
    
    
    </script>
    
    
    <style>
    
        .o1
        {
           
            
         background: linear-gradient(to top left, #fa9e1b,#287864);
            
            
        }
    
        .o2
        {
           padding-left: 250px;
            padding-right: 250px;
            padding-bottom: 180px;
             padding-top: 100px;
        }
        
        
        .out
        { width: 100%;
            height: 450px;
            text-transform: uppercase;
            background: whitesmoke;
            border: 5px #287864 dashed;
            border-top-right-radius: 25px;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
            border-bottom-right-radius: 25px;
        }
        
    .top
        {
            
        font-size: 25px;
        
            
        
        }
        
        .top1
        {
            font-size: 25px;
        }
        
        
        .details
        {
            padding-top: 50px;
        }
        .table
        {
            
            height: 200px;
            width: 1000px;
            
            
            padding: 10px;
            font-size: 20px;
            text-align: center;
        
        }
        
        .button
        {
            margin-top: 70px;
        }
        .home
        {
            height: 50px;
            width: 150px;
            font-size: 20px;
            background: rgba(20,100,80,1);
            color: white;
            border: none;
            border-bottom-right-radius: 25px;
            border-bottom-left-radius: 25px;
            border-top-right-radius: 25px;
            border-top-left-radius: 25px;
        }
        .home:hover
        {
            transform: translateY(-3px);
            box-shadow: 0 8px 2px 0 rgba(20,100,80,1);
            background:  rgba(50,130,110,1);
        }
        
        .icon
        {
            height: 20px;
            width: 40px;
        }
        
    
    </style>
    
    
    </head>
<?php
    
    session_start();
    $fname = $_SESSION['entered_fname'];
    $lname = $_SESSION['entered_lname'];
    $fid = $_SESSION['flight_number'];
    $depart = $_SESSION['departure_date'];
    $seats = $_SESSION['flight_seats'];
    $from = $_SESSION['flight_from'];
    $to = $_SESSION['flight_to'];
    //$cus_id = $_SESSION['cid'];
    
    $image = $_SESSION['f_image'];
    $company = $_SESSION['company'];
    $amt=$_SESSION['total'];
    $depart_time=$_SESSION['dep_time'];
    
    ?>
    
    <body>
        <div class="o1">
            <div class="o2">
        <div class="out">
        
        <div class="top">
       <center><h1>Your Booking Is Successful</h1></center> 
        </div>
        
        <div class="top1">
        
       <center><h2>Booking Details</h2></center> 
        </div>
        
        <div class="details">
            <center>
        <table class="table">
            
            <tr>
            <td>
               <?php echo '<img src = "'?><?php echo $image ?><?php echo '" class = "icon">'; ?> <?php echo $company; ?> </td>
            <td>
                flight no :<?php echo $fid; ?>
                </td>
            
            </tr>
            
            
            <tr>
            <td>
                Firstname : <?php echo $fname; ?> </td>
            <td>
                Lastname : <?php echo $lname; ?>
                </td>
            
            </tr>
            
            <tr>
            <td>
                Flying From : <?php echo $from; ?> </td>
            <td>
                Flying To : <?php echo $to; ?>
                </td>
            
            </tr>
            
            
            <tr>
            <td>
                Travel Date : <?php echo $depart; ?> </td>
            <td>
                Departure Time : <?php echo $depart_time; ?>
                </td>
            
            </tr>
            
            
            <tr>
            <td>
                Seats : <?php echo $seats; ?> </td>
            <td>
                Amount Paid : <?php echo $amt; ?>
                </td>
            
            </tr>
            
            </table>
                </center>
        
        </div>
    
    <div class="button">
        <center>
        <button onclick="redirect()" class="home">Home</button>
            </center>
        </div>
    </div>
            </div>
        </div>
    </body>
    

</html>