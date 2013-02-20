<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" title="style">
    <script type="text/javascript" src="../common/jquery/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="login.js"></script>
    <script type="text/javascript" src="../common/jquery/jquery.backstretch.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.easing.min.1.3.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.jcontent.0.8.min.js"></script>
        <script type="text/javascript" language="javascript">
            $("document").ready(function(){
               
                $("div#demo3").jContent({orientation: 'horizontal', 
                                         easing: "easeOutCirc", 
                                         duration: 0,
                                         auto: true,
                                         pause_on_hover: true,
                                         direction: 'next',
                                         pause: 8000});
                                     
                               
            });
        </script>                    
    <?php session_start();?>
</head>

<body>
    <div class="wrapper" >
    	<div class="content">
            <form action="login.php" method="post">
                <h1>The Student Portal </h1>
                <div class="error-messages">
                    <?php if(isset($_SESSION['error_message'])): ?>
                    <p>
                        <?php echo $_SESSION['error_message'];
                         unset($_SESSION['error_message']);?>
                    </p>

                    <?php endif;?>
                </div>
                <p>
                    <label  for="user_name">Username </label><br />
                    <input type="text" name="user_name" id="username" maxlength="50" class="text"/>
                </p>
                <p>
                    <label for="password">Password</label><br />
                    <input type="password" name="password" id="password" maxlength="20" class="text"/>
                </p>
                <p id="submit">
                    <input class="button" type="submit" name="Login" value="Login"/>
                </p>
            </form>
             <div id="demo3" class="demo3">     
            <div class="slides">
                <div style="margin-right:10px;" >
                    <p class="title">Admin Section Added</p>
                    <p class="txt">
                        Admins can now login and make changes to subjects and update student information
                    </p>
                </div>
                <div style="margin-right:10px;">
                    <p class="title">Student Section Added</p>
                    <p class="txt">
                        Students now have access to the system
                    </p>
                </div>
            </div>     
        </div>
    </div>
</body>
</html>
