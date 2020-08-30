<!DOCTYPE html>
<html lang="en">

    
    
                            <?php
                                $location = $_POST['location'];
                                $date = $_POST['date'];
                                $activity = $_POST['activity'];
                                
                                
                       
       
        
        
                                if(!empty($location) and !empty($date) and !empty($activity))
                                {
                                    $user = 'root';
                                    $pass = '';
                                    $db = 'vacation_connection';

                                    $conn = new mysqli('localhost',$user,$pass,$db);
                                }
                                else
                                {
                                    header("Location: ./after_login.php");
                                }
        
    
   /* $customer_id = $_GET["cus_id"];
    //echo $customer_id;
    //echo "hello";
  
    $q1 = "select * from customer where cus_id = '$customer_id';";
                             $res = $conn->query($q1);
        
        if($res->num_rows != NULL)
        {
             while($r1 = $res->fetch_assoc())
             {
                 global $username;
                 $username = $r1["firstname"]." ".$r1["lastname"];
                 //$cus_id = $row["cus_id"];
             }
        }
    
    */
    session_start();
     $customer_id = $_SESSION['cid'];
     $username = $_SESSION['uname'];
    
    //$try = $_SESSION['try'];
    //echo $try;
    
                            ?>
    
    
<head>
    <title>Activities</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Vacation Connection Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">


    <style>
        .box {
            height: 100px;
            width: 100%;
            background: yellow;
        }

        .try {
            color: white !important;
            text-align: center;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 15px;
            
        }
        
    
        .uname
        {
            color: white;
            margin-top: 8px;
            font-size: 13px;
            letter-spacing: 1px;
            text-transform: uppercase;
        
            margin-right: -100px!important;
        }
        
        .flight_icon
        {
            
            width: 100%;
            object-fit:cover;
            
        }
        
        .offers_price
        {
            margin-left: -100px;
        }
        
        .time
        {
            font-size: 20px;
            font-weight: 600;
            color: black;
            text-transform: uppercase;
        }
        
        .arrow
        {
            color: black!important;
            font-size: 20px;
        }
        
        .lower
        {
            font-size: 15px;
        }
        
        
        .display_top
        {
            margin-left: 200px;
            margin-right: 200px;
            display: flex;
            flex-direction: row;
            
            margin-top: 50px;
            margin-bottom: 25px;
            height: 300px;
        }
       
        .display_sorry
        {
            width: 100%;
            font-size: 40px;
            line-height: 5px;
            text-transform: uppercase;
            font-weight: 600;
            text-align:center;
            color: black;
            letter-spacing: 1px;
            word-spacing: 10px;
            margin-top: 80px;
            margin-bottom: -70px!important;
        }
        
        
        
    </style>

    
    <?php
    
    
    
    ?>


</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="phone">+45 345 3324 56789</div>
                            <div class="social">
                                <ul class="social_list">
                                    <li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-snapchat" aria-hidden="true"></i></a></li>
                                    <li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="user_box ml-auto">
                               
                                <div class="user_box_login user_box_link uname"><?php echo $username; ?></div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                            <div class="logo_container">
                                <div class="logo"><a href="#"><img src="images/logo.png" alt="">Vacation Connection</a></div>
                            </div>
                            <div class="main_nav_container ml-auto">
                                <ul class="main_nav_list">
                                    <li class="main_nav_item"><a href="after_login.php">home</a></li>
                                    <li class="main_nav_item"><a href="about.html">about us</a></li>
                                    <li class="main_nav_item"><a href="#">offers</a></li>
                                    <li class="main_nav_item"><a href="blog.html">news</a></li>
                                    <li class="main_nav_item"><a href="contact.html">contact</a></li>
                                </ul>
                            </div>
                            <div class="content_search ml-lg-0 ml-auto">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <form id="search_form" class="search_form bez_1">
                                <input type="search" class="search_content_input bez_1">
                            </form>

                            <div class="hamburger">
                                <i class="fa fa-bars trans_200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
                <div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                <ul>
                    <li class="menu_item"><a href="index.html">home</a></li>
                    <li class="menu_item"><a href="about.html">about us</a></li>
                    <li class="menu_item"><a href="offers.php">offers</a></li>
                    <li class="menu_item"><a href="blog.html">news</a></li>
                    <li class="menu_item"><a href="contact.html">contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_back.jpg"></div>
            <div class="home_content">
                <div class="home_title">WELCOME TO <?php echo $location ?></div>
            </div>
        </div>

        <!-- Offers -->

        <div class="offers" id="jump">

            <!-- Search -->

            <div class="search ">
                <div class="search_inner search-back">

                    <!-- Search Contents -->

                    <div class="container fill_height no-padding">
                        <div class="row fill_height no-margin">
                            <div class="col fill_height no-padding ">


                                <!-- Search Panel -->

                                 <div class="search_panel active">
                            <form action="disp_activity.php" method="post" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                <div class="search_item">
                                    <div>location</div>
                                    <input type="text" name="location" class="source search_input" required="required">
                                </div>
                                
                                <div class="search_item">
                                    <div>Date</div>
                                    <input type="date" name="date" min="<?php echo $tom ?>" class="check_in search_input" placeholder="YYYY-MM-DD" required="required">
                                </div>
                                <div class="search_item">
                                    <div>Activity</div>
                                    <select name="activity" id="adults_5" class="dropdown_item_select search_input">
                                        <option>Boating</option>
                                        <option>Bungee Jumping</option>
                                        <option>Helicopter</option>
                                        <option>Jetski</option>
                                        <option>Paragliding</option>
                                        <option>Parasailing</option>
                                        <option>Scooba Diving</option>
                                        <option>Skiing</option>
                                        <option>Treking</option>
                                        <option>Waterpark</option>
                                    </select>
                                </div>
                                <button class="button search_button">search<span></span><span></span><span></span></button>
                            </form>
                        </div>

                            
							<!-- Search Panel -->

                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers -->
            <?php
            if(mysqli_connect_error())
                                {
                                    die('connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
                                }
                                else
                                {           
                                    $sql ="select * from activities where location = '$location' and name='$activity';";
                                    $result = $conn->query($sql);
                                    $row_count = mysqli_num_rows($result);                       
                                    
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc()) 
                                        {
                                            $act_id = $row["act_id"];
                                            
                                            $img = $row["icon"];
                                            
                                            $cost=$row["price"];
                                            
                                            //$rating[]=$row["rating"];
                                            //echo $hid.$row["name"].'<br>';
                                        }
                                        
                                    }
                                }
                    ?>
           
            
            <?php
            
            if ($result->num_rows > 0) {
    
        echo ' <div class="display_top">
                                            
                                <div class="offers_image_background flight_icon"  style="background-image:url('?><?php echo $img; ?><?php echo ');top:15px;"></div>
                                                                    
                                            
                                            </div> ';
            }
            
             else
                                    {
                                         echo ' <div class="display_sorry">
                                            
                                <div class="sorry_in">'?><?php echo "Sorry, ".$activity." is not availabe in ".$location;?><?php echo '</div>
                                                                    
                                            
                                            </div> ';
                                            
                                        
                                        
                                    }
            
            ?>
                                            
            
            
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 temp_col"></div>
                    
                    <div class="col-lg-12">
                        <!-- Offers Grid -->

                        <div class="offers_grid">

                            <!-- Offers Item -->


                            <?php
                                
                                
                                          if($result->num_rows > 0)
                                          {
                                            
                                              $_SESSION['date']= $date ;
                                            
                                            $_SESSION['location']=$location ;
                                              $_SESSION['activity']=$activity ;
                                              $_SESSION['cost']=$cost ;
                                              $_SESSION['img']=$img ;
                                            
                                            
                                              
                                            echo '
                                            
                                            
                                            
                                                                <div class="offers_item rating_4">
                                                                <div class="row">
                                                               
                                                                <div class="col-lg-3 col-1680-4">
                                                                <div class="offers_image_container">
                        										
                        										
                        										
                        									</div>
                        								</div>
                        								<div class="col-lg-8" >
                                                        
                                                        <div class="time" style="position:absolute;top:25px;left:-300px;">'?><?php echo $location; ?><?php echo '<span></span></div>
                        										
                        									<div class="offers_content">
                        										<div class="offers_price" style="position:absolute;top:25px;right:350px;">inr '?><?php echo $cost; ?><?php echo '<span></span></div>
                        										
                                                                
                                                                
                                                                <div class="time" style="position:absolute;top:25px;left:-170px;">'?><?php echo $activity; ?><?php echo '<span></span></div>
                        										
                                                                
                                                                
                                                                
                                                                
                                                                <div class="time" style="position:absolute;top:25px;left:30px;">'?><?php echo $date; ?><?php echo '<span></span></div>
                        										
                                                                
                                                                
                                                                
                        										<div class="button book_button" style="position:relative;right:-500px;bottom:35px;" ><a href="./book_activity.php?act_id='?><?php echo $act_id ; ?><?php echo'">book<span></span><span></span><span></span></a></div>
                        										
                        										
                        										
                                                                
                                                                
                        									</div>
                                                            
                        								</div>
                                                        
                        							</div>
                                                    <hr>
                        						</div>

                      
                                                ';
                                                 echo '<br>';
                                      
                                       
                                        
                        
                                    }
                                   
                                    
                                        
                                    
                                    
                                    
                                
                                    
                                    
                            
                                  
        
                                
                            
                            ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_content footer_about">
                                <div class="logo_container footer_logo">
                                    <div class="logo"><a href="#"><img src="images/logo.png" alt="">vacation connection</a></div>
                                </div>
                                <p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
                                <ul class="footer_social_list">

                                    <li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-snapchat"></i></a></li>
                                    <li class="footer_social_item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">blog posts</div>
                            <div class="footer_content footer_blog">

                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_image"><img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
                                    <div class="footer_blog_content">
                                        <div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
                                        <div class="footer_blog_date">Nov 29, 2019</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_image"><img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
                                    <div class="footer_blog_content">
                                        <div class="footer_blog_title"><a href="blog.html">New destinations for you</a></div>
                                        <div class="footer_blog_date">Nov 29, 2019</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class="footer_blog_item clearfix">
                                    <div class="footer_blog_image"><img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
                                    <div class="footer_blog_content">
                                        <div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
                                        <div class="footer_blog_date">Nov 29, 2019</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">tags</div>
                            <div class="footer_content footer_tags">
                                <ul class="tags_list clearfix">
                                    <li class="tag_item"><a href="#">design</a></li>
                                    <li class="tag_item"><a href="#">fashion</a></li>
                                    <li class="tag_item"><a href="#">music</a></li>
                                    <li class="tag_item"><a href="#">video</a></li>
                                    <li class="tag_item"><a href="#">party</a></li>
                                    <li class="tag_item"><a href="#">photography</a></li>
                                    <li class="tag_item"><a href="#">adventure</a></li>
                                    <li class="tag_item"><a href="#">travel</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_column">
                        <div class="footer_col">
                            <div class="footer_title">contact info</div>
                            <div class="footer_content footer_contact">
                                <ul class="contact_info_list">
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">202 mahatma gandhi road</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text">2556-808-8613</div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
                                    </li>
                                    <li class="contact_info_item d-flex flex-row">
                                        <div>
                                            <div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div>
                                        </div>
                                        <div class="contact_info_text"><a href="#">www.vconnection.com</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Copyright -->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2  ">
                        <div class="copyright_content d-flex flex-row align-items-center">
                            <div>
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by vacation connection developers
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 order-lg-2 order-1">
                        <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                            <div class="footer_nav">
                                <ul class="footer_nav_list">
                                    <li class="footer_nav_item"><a href="index.html">home</a></li>
                                    <li class="footer_nav_item"><a href="#">about us</a></li>
                                    <li class="footer_nav_item"><a href="offers.html">offers</a></li>
                                    <li class="footer_nav_item"><a href="blog.html">news</a></li>
                                    <li class="footer_nav_item"><a href="contact.html">contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/offers_custom.js"></script>

</body>

</html>
