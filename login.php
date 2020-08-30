
<?php
$email = $_POST['email'];
$password = $_POST['password'];


if(!empty($email) and !empty($password))
{
$user = 'root';
$pass = '';
$db = 'vacation_connection';

$conn = new mysqli('localhost',$user,$pass,$db);
    if(mysqli_connect_error())
    {
        die('connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
        $sql = "SELECT * From customer Where email='$email' and password='$password' ";
            
        $result = $conn->query($sql);
        
        if($result->num_rows != NULL)
        {
             while($row = $result->fetch_assoc())
             {
                 global $username;
                 $username = $row["firstname"]." ".$row["lastname"];
                 $cus_id = $row["cus_id"];
                 $fname = $row["firstname"];
                 $lname = $row["lastname"];
             }
            
            session_start();
            $_SESSION['uname'] = $username;
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['cid'] = $cus_id;
            header("Location: ./after_login.php");
        }
        
        else
        {
             echo "incorrect email or password";
        }
            
        
        $conn->close();
    }
}
else
{
    echo "All fields are requirred";
    die();
}

?>