<?php
require_once('class/class.dbClass.php');
require_once('class/class.mainClass.php');
$db=new mainClass();


if(isset($_POST['btn']))
{
$db->addDoctor($_POST);
}

?>




<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>MedLife</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="../index.php" class="logo-name text-lg text-center">Medlife</a>
                                <p class="text-center m-t-md">Please register your account.</p>
                                <form class="m-t-md"  method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                    </div>
                                    <div class="form-group">
                                       

                                        <select class="form-control" name="count">
                                            <option>-Select Country-</option>
                                            <?php echo $db->viewCountry(0); ?>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Qualification" name="quali" >
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Addresss" name="address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="email" name="mail">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password" name="pass">
                                    </div>
                                    <div class="form-group">
                                           
                                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Graduated from" name="grad">
                                        </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" placeholder="selectphoto" name="A1">
                                    </div>
                                    <div class="form-group">
                                    <select class="form-control" name="depart">
                                            <option>-Department-</option>
                                            <?php echo $db->viewdepartment(0); ?>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                       

                                       <select class="form-control" name="count">
                                           <option>-Select Country-</option>
                                           <?php echo $db->viewCountry(0); ?>

                                       </select>
                                   </div>

                                    <div class="form-group">
                                        <textarea name="details" class="form-control" placeholder="Extra Details"   rows="5"></textarea>
                                    </div>
                                    <button type="submit" name="btn" class="btn btn-success btn-block">Register</button>
                                 
                                  
                                </form>
                                <p class="text-center m-t-xs text-sm"><?php echo date('Y'); ?> &copy; Medlife.</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/modern.min.js"></script>
        
    </body>
</html>