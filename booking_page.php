<!DOCTYPE html>
<html lang="en">

    
    
                            <?php
                            
                                $destination = $_POST['destination'];
                                $check_in = $_POST['check_in'];
                                $check_out = $_POST['check_out'];
                                $rooms = $_POST['rooms'];
                       
       
        
        
                                if(!empty($destination) and !empty($check_in) and !empty($check_out) and !empty($rooms) and $check_out > $check_in)
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
    <title>Hotels</title>
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
                    <li class="menu_item"><a href="#">offers</a></li>
                    <li class="menu_item"><a href="blog.html">news</a></li>
                    <li class="menu_item"><a href="contact.html">contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_back.jpg"></div>
            <div class="home_content">
                <div class="home_title">WELCOME TO <?php echo $destination ?></div>
            </div>
        </div>

        <!-- Offers -->

        <div class="offers">

            <!-- Search -->

            <div class="search ">
                <div class="search_inner search-back">

                    <!-- Search Contents -->

                    <div class="container fill_height no-padding">
                        <div class="row fill_height no-margin">
                            <div class="col fill_height no-padding ">


                                <!-- Search Panel -->

                                <div class="search_panel active">
                                    <form action="booking_page.php" method="post" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                        <div class="search_item">
                                            <div>destination</div>
                                            <input type="text" name="destination" class="destination search_input" required="required">
                                        </div>
                                        <div class="search_item">
                                            <div>check in</div>
                                            <input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>check out</div>
                                            <input type="date" name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>rooms</div>
                                            <select name="rooms" id="adults_1" class="dropdown_item_select search_input">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>

                                        <div class="extras">
                                            <ul class="search_extras clearfix">
                                                <li class="search_extras_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="search_extras_1" class="search_extras_cb">
                                                        <label for="search_extras_1">Pet Friendly</label>
                                                    </div>
                                                </li>
                                                <li class="search_extras_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="search_extras_2" class="search_extras_cb">
                                                        <label for="search_extras_2">Car Parking</label>
                                                    </div>
                                                </li>
                                                <li class="search_extras_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="search_extras_3" class="search_extras_cb">
                                                        <label for="search_extras_3">Wireless Internet</label>
                                                    </div>
                                                </li>
                                                <li class="search_extras_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="search_extras_4" class="search_extras_cb">
                                                        <label for="search_extras_4">Reservations</label>
                                                    </div>
                                                </li>
                                                <li class="search_extras_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="search_extras_5" class="search_extras_cb">
                                                        <label for="search_extras_5">Private Parking</label>
                                                    </div>
                                                </li>
                                                <li class="search_extras_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="search_extras_6" class="search_extras_cb">
                                                        <label for="search_extras_6">Smoking Area</label>
                                                    </div>
                                                </li>
                                                <li class="search_extras_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="search_extras_7" class="search_extras_cb">
                                                        <label for="search_extras_7">Wheelchair Accessible</label>
                                                    </div>
                                                </li>
                                                <li class="search_extras_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="search_extras_8" class="search_extras_cb">
                                                        <label for="search_extras_8">Pool</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more_options">
                                            <div class="more_options_trigger">
                                                <a href="#">load more options</a>
                                            </div>
                                            <ul class="more_options_list clearfix">
                                                <li class="more_options_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="more_options_1" class="search_extras_cb">
                                                        <label for="more_options_1">Pet Friendly</label>
                                                    </div>
                                                </li>
                                                <li class="more_options_item">
                                                    <div class="clearfix">
                                                        <input type="checkbox" id="more_options_2" class="search_extras_cb">
                                                        <label for="more_options_2">Car Parking</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <button class="button search_button">search<span></span><span></span><span></span></button>
                                    </form>
                                </div>

                            
							<!-- Search Panel -->

                                <div class="search_panel">
                                    <form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
                                        <div class="search_item">
                                            <div>destination</div>
                                            <input type="text" class="destination search_input" required="required">
                                        </div>
                                        <div class="search_item">
                                            <div>check in</div>
                                            <input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>check out</div>
                                            <input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="search_item">
                                            <div>adults</div>
                                            <select name="adults" id="adults_6" class="dropdown_item_select search_input">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <div class="search_item">
                                            <div>children</div>
                                            <select name="children" id="children_6" class="dropdown_item_select search_input">
                                                <option>0</option>
                                                <option>02</option>
                                                <option>03</option>
                                            </select>
                                        </div>
                                        <button class="button search_button">search<span></span><span></span><span></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-1 temp_col"></div>
                    <div class="col-lg-11">

                        <!-- Offers Sorting -->
                        <div class="offers_sorting_container">
                            <ul class="offers_sorting">
                                <li>
                                    <span class="sorting_text">price</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }' data-parent=".price_sorting"><span>show all</span></li>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "price" }' data-parent=".price_sorting"><span>ascending</span></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="sorting_text">location</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>default</span></li>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'><span>alphabetical</span></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="sorting_text">stars</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="filter_btn" data-filter="*"><span>show all</span></li>
                                        <li class="sort_btn" data-isotope-option='{ "sortBy": "stars" }'><span>ascending</span></li>
                                        <li class="filter_btn" data-filter=".rating_3"><span>3</span></li>
                                        <li class="filter_btn" data-filter=".rating_4"><span>4</span></li>
                                        <li class="filter_btn" data-filter=".rating_5"><span>5</span></li>
                                    </ul>
                                </li>
                                <li class="distance_item">
                                    <span class="sorting_text">distance from center</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="num_sorting_btn"><span>distance</span></li>
                                        <li class="num_sorting_btn"><span>distance</span></li>
                                        <li class="num_sorting_btn"><span>distance</span></li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="sorting_text">reviews</span>
                                    <i class="fa fa-chevron-down"></i>
                                    <ul>
                                        <li class="num_sorting_btn"><span>review</span></li>
                                        <li class="num_sorting_btn"><span>review</span></li>
                                        <li class="num_sorting_btn"><span>review</span></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <!-- Offers Grid -->

                        <div class="offers_grid">

                            <!-- Offers Item -->


                            <?php
                                
                                if(mysqli_connect_error())
                                {
                                    die('connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
                                }
                                else
                                {           
                                    $sql ="select * from hotel where location='$destination';";
                                    $result = $conn->query($sql);
                                    $row_count = mysqli_num_rows($result);                       
                                    
                                    if ($result->num_rows > 0) 
                                    {
                                        while($row = $result->fetch_assoc()) 
                                        {
                                            $hid[] = $row["hid"];
                                            $hname[] = $row["name"];
                                            $img[] = $row["image"];
                                            $trooms[]=$row["trooms"];
                                            $cost[]=$row["price"];
                                            $rating[]=$row["rating"];
                                            //echo $hid.$row["name"].'<br>';
                                        }
                                    }
                                    for($i=0;$i<$row_count;$i++)
                                    {
                                        
                                        $q = "select * from books_hotel where hid='$hid[$i]';";
                                        $available = $conn->query($q);
                                        $rc = mysqli_num_rows($available);
                                        //$row1 = $available->fetch_assoc();
                                        if($available->num_rows>0)
                                        {
                                            while($row1 = $available->fetch_assoc())
                                            {
                                                $c_in[] = $row1["check_in"];
                                                $c_out[] = $row1["check_out"];
                                                $r_booked[] = $row1["rooms_booked"];
                                            }
                                        }
                                        
                                
                                        $difference =abs(round(strtotime($check_out) - strtotime($check_in))/86400);
                                        $max1=0;
                                        $try=0;
                                        $check_var = $check_in;
                                        
                                        for($j=0;$j<$difference;$j++)
                                        {
                                            
                                                
                                            $max=0;
                                            for($k=0;$k<$rc;$k++)
                                            {
                                                
                                                if(($check_var >= $c_in[$k]) and ($check_var < $c_out[$k]))
                                                {


                                                    $max = $max + $r_booked[$k];

                                                }
                                            }
                                
                                            if($max > $max1)
                                            {
                                                $max1 = $max;
                                            }
                                            $check_var = strftime("%Y-%m-%d",strtotime("$check_var +1 day"));
                                            
                                        }
                                        $available_rooms = $trooms[$i]-$max1 ;
                                        if($available_rooms > 0)
                                        {
                                            $_SESSION['check_in_date']= $check_in ;
                                            $_SESSION['check_out_date']= $check_out ;
                                            $_SESSION['total_rooms']= $rooms ;
                                            
                                            
                                            
                                            echo '
                                        <div class="offers_item rating_4">
                                        <div class="row">
                                        <div class="col-lg-1 temp_col"></div>
                                        <div class="col-lg-3 col-1680-4">
                                        <div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background"  style="background-image:url('?><?php echo $img[$i]; ?><?php echo ')"></div>
										<div class="offer_name try">'?><?php echo $hname[$i]; ?><?php echo '</div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">inr '?><?php echo $cost[$i]; ?><?php echo '<span>per night</span></div>
										<div class="rating_r rating_r_'?><?php echo $rating[$i]; ?><?php echo ' offers_rating" data-rating="'?><?php echo $hname[$i]; ?><?php echo '">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="./book_hotel.php?hotel_id='?><?php echo $hid[$i] ; ?><?php echo'">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">Rooms Available</div>
												
											</div>
											<div class="offer_reviews_rating text-center">'?><?php echo $available_rooms ; ?><?php echo '</div>
										</div>
									</div>
								</div>
							</div>
						</div>

                      
                      ';
                        echo '<br>';
                                      
                                        }
                                        
                                        
                        
                        }
        
    }
                            
                        ?>



                            <!--

  <div class="offers_item rating_4" style="background:blue;">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
                            <!--					<div class="offers_image_background" style="background-image:url(images/offer_1.jpg)"></div>
										<div class="offer_name"><?php  ?>
                                            
                                            
                                            </div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$70<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    
                        
                       -->


                            <!-- Offers Item -->
                            <!--
						<div class="offers_item rating_3">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@thoughtcatalog -->
                            <!--						<div class="offers_image_background" style="background-image:url(images/offer_5.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">eurostar hotel</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$50<span>per night</span></div>
										<div class="rating_r rating_r_3 offers_rating" data-rating="3">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->

                            <!--			<div class="offers_item rating_5">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@mindaugas -->
                            <!--							<div class="offers_image_background" style="background-image:url(images/offer_6.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">grand castle</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$110<span>per night</span></div>
										<div class="rating_r rating_r_5 offers_rating"  data-rating="5">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->

                            <!--				<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@rktkn -->
                            <!--<div class="offers_image_background" style="background-image:url(images/offer_7.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">eurostar hotel</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$50<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->

                            <!--			<div class="offers_item rating_3">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@itsnwa -->
                            <!--								<div class="offers_image_background" style="background-image:url(images/offer_8.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">grand castle</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$90<span>per night</span></div>
										<div class="rating_r rating_r_3 offers_rating" data-rating="3">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												<div class="offer_reviews_title">very good</div>
												<div class="offer_reviews_subtitle">100 reviews</div>
											</div>
											<div class="offer_reviews_rating text-center">8.1</div>
										</div>
									</div>
								</div>
							</div>
						</div>
-->
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
