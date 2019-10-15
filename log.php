<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>Login and Registration Form</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
<?php
        include("header.php");
        ?>
       <br><br>
        <div class="container jumbotron train">
                            <form autocomplete="on" action="login.php"> 
                                <h3>Log in</h3> 
                                <br>
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label><br>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                <br>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label><br>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                <br> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								<br>
                                    <input class="btn btn-success" type="submit" value="Login" /> 
                                    <br>
									<label>Not a member yet ?</label>
                            </form>
                            <a href="registration.php">Join us</a>
                        </div>
                        <br>
  <br><br><br><br><br>
<?php
        include("footer.php");
        ?>
</body>
</html>