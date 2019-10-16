<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Train Availability"/>
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    
    <?php
        include("header.php");
        ?>
<div class="container">
   <div class="jumbotron  train">
       <h2><?php echo "Available Stations"; ?> </h2>
       <hr>
<label><?php echo "Chennai"; ?></label><br>
<label><?php echo "Bengaluru"; ?></label><br>
<label><?php echo "Kodaikanal"; ?></label><br>
<label><?php echo "Hyderabad"; ?></label><br>
<label><?php echo "Trichy"; ?></label><br>
<label><?php echo "Madurai"; ?> </label><br>
<label><?php echo "Coimbatore"; ?></label><br>
<label><?php echo "Kanyakumari"; ?></label><br>
<label><?php echo "Bhubaneshwar"; ?></label><br>
<br>
<div>

<form action="search.php" method="GET">
<h3>From Station: </h3><input type="text" name="query"><br>
<h3>To Station: </h3><input type="text" name="query2" ><br>
<h3>Date:</h3><input type="text" name="query3" /><br><br>
<input class="btn btn-primary" type="submit" value="Search">
</form>
   </div>
    
</div>
</div>


<?php
include("footer.php");
?>


    </body>
</html>