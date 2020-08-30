<html>

<head>
    
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <style>
        
        
        .main_out
        {
            background: linear-gradient(to top left, #fa9e1b,#287864);
            height: 100%;
            padding:0px!important;
        }
        
        .top
        {
            
            font-size: 50px;
            text-align: center;
            font-weight: 700;
            text-transform: capitalize;
            word-spacing: 20px;
            padding-top: 40px;
            padding-bottom: 40px;
            text-decoration:underline;
            
        
        }
        
        .out
        {
           /* background: linear-gradient(to top left, #fa9e1b,#287864);*/
             display: flex;
            flex-wrap: nowrap;
            flex-direction:column;
        }
        
        
        .row
        {
            display: flex;
            flex-wrap: nowrap;
            flex-direction:row;
            
            font-size: 30px;
            text-transform:capitalize;
            word-spacing: 10px;
            text-align: center;
            
            height: 100px;
            
            
        }
        
        .icon
        {
            padding-top: 30px;
            width: 150px;
            font-size: 40px;
        }
        
        
        .short_detail
        {
            padding-top: 30px;
        }
        
        
        .detail
        {
           
            text-align: end;
            padding-left: 50px;
            margin-left: 50px;
            position: absolute;
            padding-top: 30px;
            right: 300px;
            
            
        }
        
        .detail a
        {
            text-decoration: none;
            
        }
       
        .btn
        {
            position: absolute;
            left: 100px;
            padding-top: 20px;
            left: 1300px;
            
        }
        
    .btn button
        {
            height: 50px;
            width: 120px;
            
            font-size: 20px;
            text-transform: uppercase;
            border-top-right-radius: 15px;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            
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
        
    
    </style>
    
    </head>
    
    
<?php

//include_once './connection_estab.php';

$user = 'root';
$pass = '';
$db = 'vacation_connection';

$conn = new mysqli('localhost',$user,$pass,$db);


session_start();
$cus_id = $_SESSION['cid'];
$username = $_SESSION['uname'];

//$type = $_GET['b_type'];
//$_SESSION['btp'] = $type;


//$_SESSION['try']= 55;
                    
//echo $cus_id;




    $today = date("Y-m-d");



    $tom = strftime("%Y-%m-%d",strtotime("$today +1 day"));
    $co = strftime("%Y-%m-%d",strtotime("$tom +1 day"));
    $date_check = strftime("%Y-%m-%d",strtotime("$today +7 day"));

    

?>


<?php 
    
            $sql1 ="select f.source , f.destination , bf.res_date , bf.bid 
from flight f , books_flight bf
where f.fid = bf.fid and bf.cus_id = '$cus_id';";
          //$sql1 = "SELECT * From books_flight Where cus_id='$cus_id';";
      $result1 = $conn->query($sql1);
         $rnum = $result1->num_rows;                                   
     if($result1->num_rows != NULL)
        {
             while($row1 = $result1->fetch_assoc())
             {
                $tdate[]=$row1["res_date"];
                 $bid[] = $row1["bid"];
                 $source[]=$row1["source"];
                 $destination[]=$row1["destination"];
              
             }
           
        }
$count=0;
    
    echo '<div class="main_out"><div class="top">Flight Bookings</div>';
    
for($i=0;$i<$rnum;$i++)
{

    
echo '<div class="out"><div class="row"><div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div><div class="short_detail">'?><?php echo $source[$i]." "." to ".$destination[$i]." <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"></i> ".$tdate[$i];echo "</div>"; ?><?php 


    echo '<div class="detail"><a href="main_details.php?bid='?>
<?php echo $bid[$i];?><?php echo '">';echo "details"; echo "</a></div>";
if($tdate[$i]>$date_check)
{
    echo '<div class="btn"><form method="post"><button class="home" name="cancel'?><?php echo $i; ?><?php echo'">cancel</button></form></div>';
    if(isset($_POST["cancel$i"]))
    {
       
        $query = "CALL delete_fbooking($bid[$i]);";
        mysqli_query($conn,$query);
        
       
        
        echo '<script>
        window.location = "flight_details.php";
        
        </script>';
        
        break;
        
        
    }
    
}
    else
    {
        echo '<div class="btn"><form method="post"><input type="button" class="home" value="Cannot Cancel" disabled name="cancel'?><?php echo $i; ?><?php echo'"></form></div>';
    
    }
    
    
?>

<?php echo '</div></div><hr><br>';
}

if($rnum == 0)
{
    echo '<div style="font-size:40px;font-weight:600;text-align:center;text-transform:uppercase;margin-top:15%;word-spacing:10px;">sorry, you don\'t have any bookings</div>';
}
    
    echo '</div>';
                                           
?>
    
    
    </html>