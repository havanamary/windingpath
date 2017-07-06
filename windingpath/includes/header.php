<?php include 'config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
       <meta charset="utf-8" />
       <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       <meta name="viewport" content="width=device-width, initial-scale" />
            <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
            <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
                <script src="js/script.js"></script>
                    <link rel="stylesheet" href="css/index.css" />
                    <link rel="stylesheet" href="css/nav.css" />
                    <link rel="stylesheet" href="css/social.css" />
                <script>
                    function myFunction() {
                        var x = document.getElementById("myTopnav");
                        if (x.className === "topnav") {
                            x.className += " responsive";
                        } else {
                            x.className = "topnav";
                        }
                    }
                </script>
</head>
<body>
    <div id="header">
            <a href= "../index.php">
                <?php include 'wplogo.php';?>
            </a>
                <div class="cta"> 
                    <a href="https://www.gofundme.com/gwt453zk">DONATE</a>
                </div>     
    </div>
        <nav>
            <ul class="topnav" id="myTopnav">
                <li>
                    <a href="index.php">About</a>
                    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()" > &#9776; </a>
                </li>
                <li>
                    <a href="mission.php">Mission</a>
                </li>
                <li>
                    <a href="services.php">Services</a>
                </li>
                <li>
                    <a href="resources.php">Resources</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    <div id="body">