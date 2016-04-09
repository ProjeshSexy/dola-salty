<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Smartest ecommerce</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../App-resourcess/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="../App-resourcess/assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="../App-resourcess/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../App-resourcess/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../App-resourcess/assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../App-resourcess/assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="../App-resourcess/assets/plugins/owl-carousel2/../App-resourcess/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../App-resourcess/assets/plugins/owl-carousel2/../App-resourcess/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="../App-resourcess/assets/plugins/animate/animate.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../App-resourcess/assets/css/theme.css" rel="stylesheet">
    <link href="../App-resourcess/assets/css/theme-green-1.css" rel="stylesheet" id="theme-config-link">
    <link href="../App-resourcess/assets/css/login.css" rel="stylesheet">
    <!-- Head Libs -->
    <script src="../App-resourcess/assets/plugins/modernizr.custom.js"></script>

    <!--[if lt IE 9]>
    <script src="../App-resourcess/assets/plugins/iesupport/html5shiv.js"></script>
    <script src="../App-resourcess/assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="wide">
<!-- PRELOADER -->

<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">
<div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">

    <div class="modal-dialog" style="margin-left: 90px;">
        <div class="modal-content" style="width: 1142px;">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> -->
            <div class="top-content" style="width: 1142px;height: 600px;">
            
            <div class="inner-bg">
                  
                    <div class="row" style="padding-left:0px;">
                        <div class="col-sm-5">
                           
                            <div class="form-box">
                                <div class="form-top" >
                                    <div class="form-top-left">
                                        <h2>Login</h2>
                                        <p >Please Enter Credentials</p>

                                    </div>

                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                <div id="top"></div>
                                <div class="form-bottom">
                                    
                                        <div class="form-group login-username">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" id="username_page" name="username" placeholder="Username..." class="form-username form-control" id="input_user" required>
                                        </div>
                                        <div class="form-group login-password">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" id="password_page" name="password" placeholder="Password..." class="form-password form-control" id="input_pass" required>
                                        </div>
                                        <div class="error">
                                            <div id="error-message"></div>
                                        </div>
                                        <button type="submit" id="login_btn_page" class="btn btn-theme login_btn_page">Sign in!</button>
                                     
                                </div>
                            </div>
                        
                            <div class="social-login">
                                <h3>...or login with:</h3>
                                <div class="social-login-buttons">
                                    <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                        <i class="fa fa-facebook"></i> Facebook
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                        <i class="fa fa-twitter"></i> Twitter
                                    </a>
                                    <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                        <i class="fa fa-google-plus"></i> Google Plus
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                            
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Sign up now</h3>
                                        <p>Fill in the form below to get instant access!</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div id="top-reg"></div>
                                <div class="form-bottom">
                                    <!-- <form role="form" action="" method="post" id="modal_signup" class="registration-form"> -->
                                        <div class="form-group">
                                            <label class="sr-only" for="form-first-name">Username</label>
                                            <input type="text" name="username" id="id-username-p" placeholder="Username..." class="form-first-name form-control">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="email" id="id-email-p" placeholder="Email..." class="form-email form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="password" id="id-password-p" placeholder="Password..." class="form-password form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Re-type Password</label>
                                            <input type="password" name="re-password" id="id-re-password-p" placeholder="Re-type Password" class="form-password form-control">
                                        </div>
                                        
                                        <div class="error-reg">
                                            <div id="error-message-reg"></div>
                                        </div>

                                        <button type="submit" id="reg-submit" class="btn btn-theme reg-submit">Sign me up!</button>
                                    <!-- </form> -->
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                
            </div>
            
        </div>



        </div>
        <!-- /.modal-content -->

    </div>
    <!-- /.modal-dialog -->
  
    
</div>


    <!-- Popup: Shopping cart items -->
    <div class="modal fade popup-cart" id="popup-cart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="container">
                <div class="cart-items">
                    <div class="cart-items-inner">
                        
                        <div class="media" id="media-id">
                            <p class="pull-right item-price"></p>
                            <div class="media-body">
                                <h4 class="media-heading item-title summary">Subtotal</h4>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Popup: Shopping cart items -->

    <!-- Header top bar -->
    <div class="top-bar">
        <div class="container">
           <section class="page-section">
            <div class="container">
                <div class="message-box">
                    <div class="message-box-inner">
                        <h2>BD FOOD ZONEs</h2>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>
    <!-- /Header top bar -->

    <!-- HEADER -->
    <header class="header fixed">
        
        <div class="navigation-wrapper">
            <div class="container">
                <!-- Navigation -->
                <nav class="navigation closed clearfix">
                    <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                    <ul class="nav sf-menu">
                       <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        
                           <li class="active"><a href="../root-directory/">Home</a> 
                        </li>
                        <li><a href=""></a>
                           
                        </li>
                        
                       
                        
                        <li><a href="../our-menu/">Our Menu</a>
                            
                        </li>

                        <li><a href="../our-catalog/">Our Catalog</a>
                        <li><a href="../about-us/">About us</a></li>
                         <li><a href="../contact-us/">Contact</a></li>
                         <?php 
                                   $auth =new Auth ();

                                   if ($auth->check_login_status() == TRUE)
                                    {

                                      echo '<li><a href="../App-roots/App-config/App-models/models/m_log_out.php" ><img src="../App-resourcess/assets/img/icon-1.png" alt=""/> <span class="hidden-xs" id="login_status">Logout</span></a></li>';

                                       /* echo '<li><a href="../includes/models/m_log_out.php" > <span class="hidden-xs">Log Out</span>
                                      <i class="glyphicon glyphicon-log-in hide visible-xs "></i> </a></li>';
                                      */
                                      if ($auth->check_login_status_admin() == TRUE)
                                        {
                                      echo '<li class="icon-form"><a 
                                                            href="../admin/"><img src="../App-resourcess/assets/img/icon-2.png" alt=""/><span class="colored">Admin</span></span></a></li>';
                                          $_SESSION['admin'] = FALSE;
                                         $_SESSION['loggedin'] = FALSE;
                                        }else{
                                              echo '<li class="icon-form"><a data-toggle="modal"  data-target="#ModalLogin" data-dismiss="modal"
                                                            href=""><img src="../App-resourcess/assets/img/icon-2.png" alt=""/><span class="colored">Change Password</span></span></a></li>';
                                        
                                      $_SESSION['loggedin'] = FALSE;

                                        }  


                                    }else if($auth->check_login_status() == FALSE){
                                        echo '<li class="icon-user"><a data-toggle="modal" data-target="#ModalLogin" data-dismiss="modal"
                                                            href="#"><img src="../App-resourcess/assets/img/icon-1.png" alt=""/> <span id="login_status">Login</span></a></li>
                                              ';
                                    echo '<li class="icon-form"><a data-toggle="modal" data-target="#ModalLogin" data-dismiss="modal"
                                                            href="#"><img src="../App-resourcess/assets/img/icon-2.png" alt=""/> <span>Not a Member? <span class="colored">Sign Up</span></span></a></li>
        
                                                   ';
                                    } 
                                    ?>
                       
                        <li> 
                   
                        <a href="#" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs" id="cart-info"> 0 item(s) - $0.00 </span> <i class="fa fa-angle-down"></i></a>
                        <!-- Mobile menu toggle button -->
                        
                   </li>
                       
                        
                    </ul>
                </nav>
                <!-- /Navigation -->
            </div>
        </div>
    </header>
    <!-- /HEADER -->
