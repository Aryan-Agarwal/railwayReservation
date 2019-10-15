<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Cancellation</title>
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
<div class="container">
    <div class="jumbotron train">
        <form action="cancel.php" method="GET">
<h2><b>Ticket Cancellation</b></h2>
<label>PNR Number</label><br><input type="text" name="PNR"><br>
<br>
<input class="btn btn-danger" type="submit" value="Cancel" />
</form>   
    </div>
</div>
  <br>
  <br>
  <br><br><br><br><br>
   <?php
        include("footer.php");
        ?>
    </body>
</html>
