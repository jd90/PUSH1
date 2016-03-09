<?php
session_start();
?>





<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <link rel="icon"
          type="image/png"
          href="assets/b&bicon.png">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Search Results: theB&Bhub</title>

</head>
<body>

<section class="container" id="banner">
    <div class="floatleft">
        <img src = "assets/bnblogocroporange.png" id="img">
    </div>
    <div class="floatright">

        <?php
        if ($_SESSION["user"] != null) {
            echo "<p id='loginText'>Currently signed in as: " . $_SESSION["user"];
            echo "    not you?</p><button id='logout()' onclick='logout()'>LOGOUT</button>";
        }else{
            echo "<p id='loginText'>currently not logged in";
        }
        ?>
    </div>
    <script>
        function logout() {
            window.location = "SearchBB.php?value=logout";
        }
    </script>
</section>


<section class="container" id="navigation2">
    <div>
        <nav role="main">
            <ul>
                <li><a href="B&Bregistration.php">Contact</a></li>
                <li><a href="B&Bregistration.php">Register</a></li>
                <li><a href="OwnerSignIn.php">Member Area</a></li>
                <li><a href="SearchBB.php">Search</a></li>
            </ul>
        </nav>
    </div>
</section>



<section class="googlemap" id="mapapi">



    <script>
        function initialize()
        {
            var mapProp = {
                center: new google.maps.LatLng(40.508742,-0.120850),
                zoom:5,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }

        function loadScript()
        {
            var script = document.createElement("script");
            script.type = "text/javascript";
            script.src = "http://maps.googleapis.com/maps/api/js?key=&sensor=false&callback=initialize";
            document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>



<!--
    <script>
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(57.2, -2.2), zoom: 10
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);

        function viewonmap(){

            map = new google.maps.Map()

        }


    </script>
-->

</section>

<section class="spacer" id="spacer">


</section>

<section class="container" id="featured">
    <div class="centre">
        <p>Here are your search results...</p>

</div>
    </section>

<div id="mapView">
    <div id="googleMap" style="width:500px;height:500px;"></div>

</div>

<section class="container" id="content2">


    <div class="main">


    <?php

    $city = $_POST['location'];
    echo "<p>You searched for ".$city.". Results are ordered by ascending price</p>";
    $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    try{
        $st = $conn-> query("SELECT * FROM [B&B] WHERE [city] = '$city' ORDER BY [price]");


        foreach($st->fetchAll() as $row) {
            $newhtml =
                <<<NEWHTML
                    <div class="table4">

    <p><strong>{$row[bbname]}</strong></p>
    <p><strong>{$row[email]}</strong></p>
    <p><strong>£{$row[price]} Per Night</strong></p>
    <p><strong>{$row[address]}</strong></p>
    <p><strong>{$row[longitude]}</strong></p>
    <p><strong>{$row[latitude]}</strong></p>





    <p><a href="Customerinfo.php"><input type="submit" value="BOOK" /></a></p>
    <p><input type="submit" id="viewonmap" value="View on Map" /></p>



</div>
NEWHTML;
            print($newhtml);
        }
    }
    catch(PDOException $e)
    {print"$e";}
    ?>

</div>
    </section>


<section class="spacer" id="spacer">


</section>

<section class="container" id="foot">

    <div id="footernav">
        <nav role="sub">
            <ul>
                <li><a href="B&Bregistration.php">Contact</a></li>
                <li><a href="B&Bregistration.php">Register</a></li>
                <li><a href="OwnerSignIn.php">Member Area</a></li>
                <li><a href="SearchBB.php">Search</a></li>
            </ul>
        </nav>
    </div>



    <div id="copyright">
        <hr width="100%" size="1">
        <p>Copyright. Team D Solutions.</p>
    </div>

</section>




</body>
</html>
