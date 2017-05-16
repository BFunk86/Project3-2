<?php
    // Include Change Class
    require_once "class_ChangeYoung.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
       CSC 2410 Web Programming
       Project 3
       Part 2: Calculate Change

       Author: Brandon Young
       Date: 5/12/2017

       Filename: CalculateChangeYoung.php
    -->
    <meta charset="UTF-8">
    <title>Project3-2</title>
    <!-- Latest compiled and mninified JQuery for Bootstrap to work -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Calculate Change</h1>
    </div>
    <div class="row">
        <div class="col-xs-5">
            <?php

            $displayForm = true;

            // Show form if no submit has occured
            if(!isset($_POST['submit'])) {
                include "inc_TransactionFormYoung.php";
            } else {

                // Get Posted values from form
                $owed = stripslashes($_POST['owed']);
                $paid = stripslashes($_POST['paid']);
                // Instantiate new Change object
                $Change = new Change($owed, $paid);
                // Save the returned array from getChange
                $output = $Change->getChange();

                // Loop through the output returned from getChange and output it to the screen
                foreach($output as $line) {
                    echo "<p>$line</p>";
                } // end foreach



            } // end if else


            ?>
        </div><!-- .col-xs-5 -->
    </div><!-- .row -->
</div>
</body>
</html>