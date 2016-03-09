<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon"
          type="image/png"
          href="assets/b&bicon.png">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Register: theB&Bhub</title>
</head>

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

</div>
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

<section class="spacer" id="spacer">


</section>



<section class="container" id="featured">
    <div class="centre">
        <p>Here are the B&Bs listed under your ownership:</p>
    </div>
</section>


<body>




<main>
    <!--onsubmit="return validateOwner(this);"  javascript method-->
    <div class="">
        <table class="table1">

        <?php
        /**
         * Created by PhpStorm.
         * User: 9540730
         * Date: 25/02/2016
         * Time: 13:45
         */
        if($_POST['bbname']!= null) {
            $owneremail = $_SESSION['user'];
            //$ownerid= $_POST['ownerid'];   [ownerid] '".$ownerid."',
            $bbname = $_POST['bbname'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $bbdescription = $_POST['bbdescription'];
            $roomdescription = $_POST['roomdescription'];
            $price = $_POST['price'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $picture =$_POST['picture'];
            $pets = $_POST['pets'];
            $conn = new PDO ("sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            try {
                $st1 = "INSERT INTO [B&B] ([bbname], [address], [city], [telephone], [email], [price], [checkin], [checkout]) VALUES ('" . $bbname . "', '" . $address . "', '" . $city . "', '" . $telephone . "', '" . $owneremail . "', '" . $price . "', '" . $checkin . "', '" . $checkout . "')";
                $conn->exec($st1);
            } catch (PDOException $e) {
                print"$e";
            }
        }
        ?>


        <?php
        $email = $_SESSION['user'];
        $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        try{
            $st = $conn-> query("SELECT * FROM [B&B] WHERE [email] = '$email'");
            foreach($st->fetchAll() as $row) {
                $newhtml =
                    <<<NEWHTML

                       <table class="table1"> <tr>
                   <td>{$row[city]}</td>
                    <td id="bbname">{$row[bbname]}</td>
                    <td>{$row[address]}</td>
                    <td>{$row[email]}</td>
            </tr>
            <tr><td><a href="RoomRegistratiion.php?bbname='{$row[bbname]}'"><input type="submit" value="Add Room to this BB"></input></a></td></tr>
            </table>
NEWHTML;
                print($newhtml);
            }
        }
        catch(PDOException $e)
        {print"$e";}
        ?>

            </table>
</main>




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