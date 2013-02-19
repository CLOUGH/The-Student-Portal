<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Student Portal Instillation</title>
    <script type="text/javascript" src="../common/jquery/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="install.js"></script>
    <link href="stylesheet.css" rel="stylesheet" type="text/css">
    <link href="../common/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="../common/bootstrap/js/bootstrap.js"></script>
    <script src="../common/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Website Installation and Setup</h2>
        <div id="error-messages">
        </div>
        <p>Fill in the forms form fields bellow</p>
        <form  method="post">

            <div class="row-fluid">
            <div class="span10">
                <div class="span5">
                    <p>
                        </label><span class="required">*</span>MySQL Username:</label>
                        <input type="text" name="mysql_username" maxlength="20"/>
                    </p>
                    <p>
            	       </label>MySQL Password: </label>
                       <input type="password" name="mysql_password" maxlength="20" />
                    </p>
                    <p>
                        </label><span class="required">*</span>MYSQL Server</label>
                        <input type="text" name="mysql_host" value="http://" />
                    </p>
                </div>
                <div class="span5">
                    <p>
                        <label><span class="required">*</span>Admin Username:</label>
                        <input type="text" name="admin_username" maxlength="20"/>
                    </p>
                    <p>
                        <label>Password: </label>
                        <input type="password" name="admin_password" maxlength="20"/>
                    </p>
                    <p>
                        <label>Confirm Password: </label>
                        <input type="password" name="admin_confirm_password" maxlength="20"/>
                    </p>
                    <p>
                        <label><span class="required">*</span>Email: </label>
                        <input type="text" name="admin_email" />
                    </p>
                    <p>
                        <label><span class="required">*</span>First Name: </label>
                        <input type="text" name="admin_fname" maxlength="20"/>
                    </p>
                    <p>
                        <label><span class="required">*</span>Last Name: </label>
                        <input type="text" name="admin_lname" maxlength="20"/>
                    </p>
                </div>
                <div class="row-fluid">
                    <div class="span10 pagination-centered">
                        <input type="submit" value="Install" class="btn"/>
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div>
</body>
</html>
