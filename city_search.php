<html>
<?php 
    
    $city =strtolower($_POST['city']);
    
    if($city=='mumbai' or $city=='amritsar' or $city=='ajmer' or $city=='goa' or $city=='kutch' or $city=='jammu' or $city=='manali' or $city=='dharamshala' )
    {
     header("Location: ./$city.php");   
    }
    else if(empty($city))
    {
    	header("Location: ./index.php");
    }
    else
    {
         header("Location: ./sorry.html");
    }
?>

</html>
