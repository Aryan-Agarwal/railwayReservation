<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <title>Train Availability</title>
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
<h2>Print Your Ticket</h2>
<form action="display2.php" method="GET">

<label>Username</label><br><input type="text" name="username"><br><br>

<input class="btn btn-primary" type="submit" value="Get Details">


</form>
</div>
<br>
  <br>
  <br><br><br><br><br>
<?php
        include("footer.php");
        ?>
    </body>
</html>

