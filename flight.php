<html>

<head>
    
    <style>
    .box
        {
            
            height: 100px;
            width: 100px;
            
            background: red;
        }
    
    </style>
    
    </head>

<body>
    <?php

include_once "./connection_estab.php";


for($i=0;$i<5;$i++)
{
    echo '<div class="box"></div>'.'<br>';
}


?>
    
    </body>
</html>