<!DOCTYPE html>
<html>
    <head>
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
               <h2> Sign up </h2> 
               <hr>
            <form autocomplete="on" action="register.php">
                    <br>
                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label><br>
                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                    <br> 
                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label><br>
                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                    <br> 
                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label><br>
                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                    <br> 
                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label><br>
                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                    <br><br>
                    <input class="btn btn-primary" type="submit" value="Sign up"/> 
                    <br>
                    <label>
                        Already a member ?
                    </label>
				    <a href="log.php"> Go and log in </a>
            </form>
        </div>
        <?php
    include("footer.php")
    ?>
    </body>
</html>