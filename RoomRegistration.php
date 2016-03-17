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
    <title>Register B&B: theB&Bhub</title>
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

            //header("Location: OwnerReviewPage.php"); ||



        }else{
            echo "<p id='loginText'>currently not logged in";


        }

        ?>
        <script>
            function logout() {

                window.location = "SearchBB.php?value=logout";
            }
        </script>

    </div>
</section>

<section class="container" id="navigation2">
    <div>
        <nav role="main">
            <ul>
                <li><a href="help.php#helpsection">Help</a></li>
                <li><a href="help.php#contactsection">Contact</a></li>
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





        <?php

        $bb = $_GET['bbname'];

        $sesh = $_SESSION['user'];
        echo "<p>Add Room to <strong>".$bb;
        echo"</strong></p>"



        ?>
</div>
</section>




<section class="container" id="content2">



    <form action="bbRoomReviewPage.php" method="POST">

        <table class="table3">
            <tr><td colspan="3"><p>* Required Fields</p></td>

            <tr>
                <td><label for="bbname">B&B Name: *</label></td>
                <td><select id="bbname" class="inputform" name="bbname">
                        <option value="<?php echo"".$bb ?>"><?php echo"".$bb ?></option></td>




                            <tr><td class="small"><p>* Required Fields</p></td></tr>

                            <tr>

                                <td><label for="bbid">B&B ID: *</label></td>
                                <td><input type="text" id="bbid" class="inputform" name="bbid" value="DB insert B&B ID read only" size="20" maxlength="10" readonly /></td>
                                <td><label for="price">Price: *</label></td>
                                <td><input type="text" id="price" class="inputform" name="price" placeholder="Enter Price Per\Night" size="20" maxlength="10" required /></td>

                            </tr>
                            <tr>
                                <td><label for="roomname">Room Name: *</label></td>
                                <td><input type="text" id="roomname" class="inputform" name="roomname" placeholder="Enter Room Name" size="20" maxlength="25" required /></td>

                                <td>
                                    <label for="nbrofpeople">Room Sleeps: *</label></td>
                                <td><select class="inputform" id="nbrofpeople" name="nbrofpeople">
                                        <option value="">Select Occupant Nbr</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>

                                <td><label for="roomdescription">Room Description: *</label></td>
                                <td><input type="text" id="roomdescription" class="inputform" name="roomdescription" placeholder="Enter Room Description" size="30" maxlength="50" required /></td>

                                <td>
                                    <label for="imageurl">Image URL: *</label></td>
                                <td><input type="text" id="imageurl" class="inputform" name="imageurl" placeholder="Enter Image URL" size="30" maxlength="50" required /></td>

                            </tr>
                            <tr>
                                <td colspan="4"><p align="right" ><input id="submit" type="submit" value="Submit" class="submit" /></p></td>
                            </tr>
                        </table></form>

                </section>
                <section class="spacer" id="spacer">


                </section>

<section class="container" id="featured">
    <div class="centre">

        <p>Need help with the form?</p>
    </div>
</section>


<section id="mycontainer">

    <button class="accordion">Adding you bed and breakfast name</button>
    <div class="panel">
        <p>Enter the name of your bed and breakfast as you want it displayed on the site. This will be the name returned in the search results. Maximum number of characters is 50.</p>
    </div>

    <button class="accordion">Address?</button>
    <div class="panel">
        <p>Enter the address of your bed and breakfast including the city and postcode.  </div>

    <button class="accordion">City?</button>
    <div class="panel">
        <p>Blah... Blah... Blah...</p>
    </div>


    <button class="accordion">Telephone?</button>
    <div class="panel">
        <p>Blah... Blah... Blah...</p>
    </div>


    <button class="accordion">Email?</button>
    <div class="panel">
        <p>Blah... Blah... Blah...</p>
    </div>

    <button class="accordion">B&B Description?</button>
    <div class="panel">
        <p>Blah... Blah... Blah... </div>


    <button class="accordion">Room Description?</button>
    <div class="panel">
        <p>Blah... Blah... Blah...</p>
    </div>

    <button class="accordion">Check In Time</button>
    <div class="panel">
        <p>Blah... Blah... Blah... </p></div>


    <button class="accordion">Check Out Time?</button>
    <div class="panel">
        <p>Blah... Blah... Blah...</p>
    </div>

    <button class="accordion">Upload Picture?</button>
    <div class="panel">
        <p>Blah... Blah... Blah...</p> </div>




    <button class="accordion lastaccordion">Pets Allowed?</button>
    <div id="foo" class="panel lastpanel">
        <p>Blah... Blah... Blah...</p>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function(){
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
            }
        }
    </script>


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