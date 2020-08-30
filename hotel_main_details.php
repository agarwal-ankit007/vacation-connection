<html>
<head>
    
    
    <?php

//include_once './connection_estab.php';

$user = 'root';
$pass = '';
$db = 'vacation_connection';

$conn = new mysqli('localhost',$user,$pass,$db);

?>
    
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
        
            padding-top: 20px;
        
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
    
    
    
    $bid = $_GET['bid'];
    
    
    
    
    $sql = "CALL hdetails($bid);";
    $display = mysqli_query($conn,$sql);
    
    
    
        while($result = mysqli_fetch_array($display) )
       {
        
        $fname = $result['firstname'];
        $lname = $result['lastname'];
        $rooms = $result['rooms_booked'];
        $amt = $result['total_amt'];
        
        $location = $result['location'];
        $hname = $result['name'];
            
        $check_in = $result['check_in'];
        $check_out = $result['check_out'];
        
            
       }
         
    
    ?>
    
    <body>
        
       <div class="o1">
            <div class="o2">
        <div class="out">
      
        <div class="top1">
        
       <center><h2>Booking Details</h2></center> 
        </div>
        
        <div class="details">
            <center>
        <table class="table">
            <tr>
            <td>
                Firstname : <?php echo $fname; ?> </td>
            <td>
                Lastname : <?php echo $lname; ?>
                </td>
            
            </tr>
            
            <tr>
            <td>
               Location : <?php echo $location; ?> </td>
            <td>
                Hotel : <?php echo $hname; ?>
                </td>
            
            </tr>
            
            
            <tr>
            <td>
                Check_in Date : <?php echo $check_in; ?> </td>
            <td>
                Check_out Date : <?php echo $check_out; ?>
                </td>
            
            </tr>
            
            
            <tr>
            <td>
                Rooms : <?php echo $rooms; ?> </td>
            <td>
                Amount Paid : <?php echo $amt; ?>
                </td>
            
            </tr>
            
            </table>
            
           
                </center>
        
        </div>
    
    <div class="button">
        <center>
        <button onclick="redirect()" class="home">HOME</button>
            </center>
        </div>
    </div>
           </div>
        </div>
    </body>
    

</html>