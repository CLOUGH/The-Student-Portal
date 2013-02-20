<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" title="style">
    <script type="text/javascript" src="../common/jquery/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="login.js"></script>
    <script type="text/javascript" src="../common/jquery/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="js/jquery.innerfade.js"></script>
        <script type="text/javascript">
       $(document).ready(
                function(){
                    $('#news').innerfade({
                        animationtype: 'slide',
                        speed: 750,
                        timeout: 2000,
                        type: 'random',
                        containerheight: '1em'
                    });
                    
                    $('ul#portfolio').innerfade({
                        speed: 1000,
                        timeout: 5000,
                        type: 'sequence',
                        containerheight: '220px'
                    });
                    
                    $('.fade').innerfade({
                        speed: 1000,
                        timeout: 6000,
                        type: 'random_start',
                        containerheight: '6.5em'
                    });
                    
                    $('.adi').innerfade({
                        speed: 'slow',
                        timeout: 5000,
                        type: 'random',
                        containerheight: '150px'
                    });

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
            <div class="fade"> 
                <p>
                    <span class="heading">Admin Access</span><br />
                    Admin features now added, Admin has all access to system.
                </p>
                <p>
                    <span class="heading">Student Access</span><br />
                    Students will now be able to login and register for courses.
                </p>
                <p>
                    <span class="heading">New Features Comming Soon</span><br />
                    Check Back Frequently.
                </p>
            </div>       
            </div>
        </div>
    </div>
</body>
</html>
