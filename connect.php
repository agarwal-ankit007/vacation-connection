<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$cus_mobile = (string)$_POST['cus_mobile'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

if(!empty($firstname) and !empty($email) and !empty($gender) and !empty($cus_mobile) and !empty($password) and !empty($confirm) and ($password==$confirm) and strlen($cus_mobile)==10)
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
        $SELECT = "SELECT email From customer Where email = ? Limit 1";
        $INSERT = "INSERT Into customer (firstname,lastname,email,gender,cus_mobile,password) Values(?,?,?,?,?,?)";
            
            //prepare statements
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
    
        $rnum = $stmt->num_rows;
        
        if($rnum==0)
        {
            $stmt->close();
            
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssis",$firstname,$lastname,$email,$gender,$cus_mobile,$password);
            $stmt->execute();
            
            
            
            header("Location: ./login.html");
            
        }
        else
        {
            echo "email already exists";
        }
        $stmt->close();
        $conn->close();
    }
}
else
{
    echo "All fields are required";
    die();
}

?>