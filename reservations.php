<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="UTF-8" />
        <title></title>
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
                <h2>Train Reservation</h2>
                <hr>
                <br>
<div>
<form action="reservation.php" method="GET">
<div class="row">
    <div class="col-xs-3">
        <label>Username</label><br><input type="text" name="username" />
    </div>
    <div class="col-xs-3">
        <label>Name</label><br><input type="text" name="name" />
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-3">
        <label>Age</label><br><input type="number" name="age">  
    </div>
    <div class="col-xs-3">
        <label>Gender</label><br><input type="text" name="gender">
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-3">
        <label>Berth Preference</label><br><input type="text" name="berth">
    </div>
    <div class="col-xs-3">
        <label>Class</label><br><input type="text" name="class">
    </div>
</div>
<br>
<div class="row">
    <div class="col-xs-3">
        <label>Nationality</label><br><input type="text" name="nationality" />
    </div>
    <div class="col-xs-3">
        <label>Train no.</label><br><input type="number" name="trainno" />        
    </div>
</div>
<br>
<label>Train Name</label><br><input type="text" name="trainame" /><br><br>
<input class="btn btn-success" type="submit" value="Reserve" />
</form>
</div>
        </div>
<?php
        include("footer.php")
        ?>
    </body>
</html>