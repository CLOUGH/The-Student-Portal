<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" title="style">
    <link type="text/css" rel="stylesheet" href="css/rhinoslider-1.05.css" />
    <script type="text/javascript" src="../common/jquery/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="login.js"></script>
    <script type="text/javascript" src="../common/jquery/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="js/rhinoslider-1.05.min.js"></script>
    <script type="text/javascript" src="js/mousewheel.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
            
           $(document).ready(function() {
                $('#slider').rhinoslider({
                    showTime: 9000,
                    controlsMousewheel: false,
                    controlsKeyboard: false,
                    controlsPrevNext: false,
                    controlsPlayPause: false,
                    autoPlay: true,
                    pauseOnHover: true,
                    showCaptions: 'always',
                    showBullets: 'never',
                    showControls: 'never'
                });
            });
        </script>
        <style type="text/css">
            body { background-color:#000; }
            
            #slider {
                width:600px;
                height:80px;
                
                /*IE bugfix*/
                padding:0;
                margin:0;
            }
            
            #slider li { list-style:none; }
            
            #page {
                width:600px;
                margin:50px auto;
            }
        </style>     
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
            <div id="page">
            <ul id="slider">
                <li><img src="img/slider/slider1.png" alt="" /></li>
                <li><img src="img/slider/slider2.png" alt="" /></li>
            </ul>
        </div>
        </div>
    </div>
</body>
</html>
