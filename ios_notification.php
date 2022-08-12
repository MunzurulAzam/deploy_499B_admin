<?php
session_start();
if(!isset($_SESSION['login']) || (isset($_SESION['login']) && $_SESSION['login'] == 0)){
    header("location:index.php");
}
include 'controllers/clinic.php';
$admin = new dashboard();

if(isset($_POST['updatenotification']))
{
    
    $ioskey=$_POST['ioskey'];
    $id=$_POST['id'];
    $data=$admin->getiosnotificationinfoid($id);
        if($data)
            $editnotification=$admin->editiosnotification($id,$ioskey);
            if($editnotification)
            {
                ?>
                <script>
                    window.location='ios_notification.php';
                </script>
                <?php
            }
}


if(isset($_POST['insertnotification']))
{
    $ioskey=$_POST['ioskey'];

        $addnotification=$admin->addiosnotification($ioskey);
        if($addnotification)
        {
            ?>
            <script>
            window.location='ios_notification.php';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
            alert("Network Error Try Again..");
            </script>
            <?php 
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="description" content="Clinic Admin Panel Login Witch control android and ios application data.">
    <meta name="author" content="Freaktemplate">
    <meta name="keyword" content="Mobile App With Web development and design technology">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinic Admin | Notification</title>
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="asset/css/simple-line-icons.css"/>
    <link rel="stylesheet" type="text/css" href="asset/css/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="asset/css/mediaelementplayer.css"/>
    <link rel="stylesheet" type="text/css" href="asset/css/red.css"/>
    <link href="asset/css/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body class="dashboard">
<?php
include 'include/header.php';
?>
<div class="container-fluid mimin-wrapper">
    <?php
    include 'include/sidebar.php';
    ?>
    <div id="content">
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-12 col-sm-12">
                    <h4 class="animated fadeInLeft"><i class="icon icon-list"></i> Notification </h4>
                    <div style="margin-top: -31px;padding-bottom: 6px;" class="animated fadeInRight" align="right"><a href="dashboard.php" class="badge badge-primary"><i class="fa fa-long-arrow-left"></i> Back</a></div>
                </div>
            </div>
        </div>

         <?php
            $notificationinfo = $admin->getiosnotificationinfo();

            if($notificationinfo)
            {?>
                <div class="col-md-12">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h4>Update Notification Detail</h4>
                </div>
                <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                    <div class="col-md-12">
                        <form class="cmxform signupForm" method="post" enctype="multipart/form-data" action="">
                            <div id="firststep">
                            <div class="col-md-6">

                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" value="<?php echo $notificationinfo['ioskey'];?>" name="ioskey" required>
                                    <span class="bar"></span>
                                    <label>IOS Server key</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                 <input type="hidden" name="id" value="<?php echo $notificationinfo['id'];?>">
                                <input class="submit btn btn-danger" type="submit" name="updatenotification"  value="Save Changes">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>
                
            <?php }
            else
            {?>
                <div class="col-md-12">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h4>Filling Up Notification Detail</h4>
                </div>
                <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                    <div class="col-md-12">
                        <form class="cmxform signupForm" method="post" enctype="multipart/form-data" action="">
                            <div id="firststep">
                            <div class="col-md-6">
                                
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" value="" name="ioskey" required>
                                    <span class="bar"></span>
                                    <label>ios API Key</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input class="submit btn btn-danger" type="submit" name="insertnotification"  value="Save">
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>
            <?php
            }
         ?>       

        
</div>

<script>
    
</script>
<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<!-- plugins -->
<script src="asset/js/moment.min.js"></script>
<script src="asset/js/jquery.validate.min.js"></script>
<script src="asset/js/icheck.min.js"></script>
<script src="asset/js/jquery.nicescroll.js"></script>
<!-- custom -->
<script src="asset/js/main.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $(".signupForm").validate({
            errorElement: "em",
            errorPlacement: function(error, element) {
                $(element.parent("div").addClass("form-animate-error"));
                error.appendTo(element.parent("div"));
            },
            success: function(label) {
                $(label.parent("div").removeClass("form-animate-error"));
            },
            rules: {
                validate_firstname: "required",
                validate_lastname: "required",
                validate_username:
                {
                    required: true,
                    minlength: 2
                },
                validate_password:
                {
                    required: true,
                    minlength: 5
                },
                validate_confirm_password:
                {
                    required: true,
                    minlength: 5,
                    equalTo: "#validate_password"
                },
                validate_email: {
                    required: true,
                    email: true
                },
                validate_agree: "required"
            },
            messages: {
                validate_firstname: "Please enter your firstname",
                validate_lastname: "Please enter your lastname",
                validate_username:
                {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                validate_password:
                {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                validate_confirm_password:
                {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                validate_email: "Please enter a valid email address",
                validate_agree: "Please accept our policy"
            }
        });
        $("#specilitits").validate({
            errorElement: "em",
            errorPlacement: function(error, element) {
                $(element.parent("div").addClass("form-animate-error"));
                error.appendTo(element.parent("div"));
            },
            success: function(label) {
                $(label.parent("div").removeClass("form-animate-error"));
            },
            rules: {
                validate_firstname: "required",
                validate_lastname: "required",
                validate_username:
                {
                    required: true,
                    minlength: 2
                },
                validate_password:
                {
                    required: true,
                    minlength: 5
                },
                validate_confirm_password:
                {
                    required: true,
                    minlength: 5,
                    equalTo: "#validate_password"
                },
                validate_email: {
                    required: true,
                    email: true
                },
                validate_agree: "required"
            },
            messages: {
                validate_firstname: "Please enter your firstname",
                validate_lastname: "Please enter your lastname",
                validate_username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                validate_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                validate_confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                validate_email: "Please enter a valid email address",
                validate_agree: "Please accept our policy"
            }
        });

    });
</script><!-- end: Javascript -->

</body>
</html>