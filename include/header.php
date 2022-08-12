<style type="text/css">
    .goog-logo-link {
   display:none !important;
}
.goog-te-gadget{
   color: transparent !important;
}
.goog-te-gadget .goog-te-combo{
   color: black !important;
}
</style>
<?php
    $userinfo = $admin->getuserinfo($_SESSION['uid']);
?>
<nav class="navbar navbar-default header navbar-fixed-top">
    <div class="col-md-12 nav-wrapper">
        <div class="navbar-header" style="width:100%;">
            <div class="opener-left-menu is-open" >
                <img src="uploads/logo.png" style="height:53px;width:55px;margin-bottom:-34px" />
            </div>
            <a href="#" onclick="window.location='dashboard.php' " class="navbar-brand">
                <b>Clinic Admin</b>
            </a>

            <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name">

                    <div id="google_translate_element" style="margin-top: -10px;"></div>

                    <script type="text/javascript">
                    function googleTranslateElementInit() {
                      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                    }
                    </script>

                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>

                <li class="user-name notranslate"><span><?php  echo $userinfo['username']; ?></span></li>
                <li class="dropdown avatar-dropdown">
                    <img src="uploads/<?php echo $userinfo['image']; ?>" title="<?php echo $userinfo['email']; ?>" class="img-circle avatar"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                    <ul class="dropdown-menu user-dropdown">
                        <li><a href="#" onclick="window.location='myprofile.php'"><span class="fa fa-user"></span> My Profile</a></li>
                        <li><a href="#" onclick="window.location='changepassword.php'" class=" "><span class="fa fa-lock"></span> Change Password</a></li>
                        <li><a href="#" onclick="window.location='include/logout.php'"><span class="fa fa-power-off "></span> Logout</a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
      </div>
    </div>
</nav>








