
//Let’s say you have a site that requires you to log in with your username and password to 
//access the pages that have information about your account. 
//When you log in, the credentials are passed to the database. 
//If the username and password match what is in the database, you will be authenticated for a session.
//A session is a specified amount of time that an authenticated user will have access to specific pages and 
//activities on the application.
//At any time in the authentication process, 
//a malicious user can gain unauthorized access to the session.  
//As attacks get more sophisticated, it is more important for web applications safeguard against them.
//Sometimes you don’t realize how simple some solutions can be.  One way you can start is by being proactive!

    //Require your users to have a strong password!  

    //It is also best practice to require users to change their password regularly in case of credential stuffing.  

    //Implementing an account lockout from too many failed attempts can prevent brute force attacks!

    //If your application has some default username/password combinations, ensure they are deleted from the database.

    //Require multi-factor authentication for users to log in.
    //preventHijacking()  function in SessionManager used to limit a session to a specific host and IP address. 
    //If the host and IP address are not the same, it will not authenticate.

    <?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">
   
   <head>
      <title>Tutorialspoint.com</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
        function preventHijacking()
{
	if(!isset($_SESSION['IPaddress']) || !isset($_SESSION['userAgent']))
		return false;

	if ($_SESSION['IPaddress'] != $_SERVER['REMOTE_ADDR'])
		return false;

	if( $_SESSION['userAgent'] != $_SERVER['HTTP_USER_AGENT'])
		return false;

	return true;
}
            $msg = '';
            $_SESSION['IPaddress']=$_SERVER['REMOTE_ADDR']
                  $_SESSION['userAgent']=$_SERVER['HTTP_USER_AGENT']
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'seif' && 
                  $_POST['password'] == '1234'&&preventHijacking()) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = seif" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>
