<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" title="style">
    <script type="text/javascript" src="../common/jquery/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="login.js"></script>
    <script type="text/javascript" src="../common/jquery/jquery.backstretch.min.js"></script>
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
        </div>
    </div>
</body>
</html>
