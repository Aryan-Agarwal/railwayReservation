<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
	font-family:Rockwell;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Train Availability</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Train Availability"/>
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <body style="font-size:20px;">
    <br><br>
<?php
?>
<?php

echo "<div class='container jumbotron train'>";
    echo "<h2>Ticket Details</h2>";     
    $link = mysqli_connect("localhost", "root", "", "simple-website");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }


	$username	= $_GET['username'];
	


    $sql = "SELECT * FROM reservations where username='$username'";    
if($result = mysqli_query($link, $sql)){

        if(mysqli_num_rows($result) > 0){


echo "<table>";                
				echo "<tr>";
                    echo "<th>Name</th>  ";
                    echo "<th>Age  </th>  ";
                    echo "<th>Gender </th>  ";
                    echo "<th>Berth </th>  ";
                    echo "<th>Class</th>  ";
                    echo "<th>Nationality </th>  ";
                    echo "<th>Train Number </th>  ";		
				    echo "<th>Train Name</th>  ";
                    echo "<th>PNR Number </th>  ";
                echo "</tr>";
            
            while($row = mysqli_fetch_array($result)){

                echo "<tr>";
                    echo "<td>" . $row['Name'] .   "</td>";
                    echo "<td>" . $row['Age'] .   "</td>";
                    echo "<td>" . $row['Gender'].  "</td>";
                    echo "<td>" . $row['BirthPreference'] .   "</td>";
echo "<td>" . $row['Class'].  "</td>";
echo "<td>" . $row['Nationality'].  "</td>";
echo "<td>" . $row['TrainNumber'].  "</td>";
echo "<td>" . $row['TrainName'].  "</td>";
echo "<td>" . $row['pnr'].  "</td>";
                echo "</tr>";
            }
            echo "</table>";
echo "</div>";
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    // Close connection
    mysqli_close($link);
    ?>
<?php
include("footer.php");
?>



