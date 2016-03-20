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

                window.location = "SearchBB.php";
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

        <p>Bed and breakfast registration form</p>
    </div>
</section>



<section>




        <form action="bbReviewPage.php" method="POST">

            <table class="table3">
                <tr><td colspan="3"><p>* Required Fields</p></td>

                <tr>
                    <td><label for="bbname">B&B Name: *</label></td>
                    <td><input id="bbname" type="text" class="inputform" name="bbname" placeholder="Enter B&B Name" size="20" maxlength="30" required /></td>
                    <td><label for="bbdescription">B&B Description: *</label></td>
                    <td><input id="bbdescription" type="text" class="inputform" name="bbdescription" placeholder="Enter B&B Description" size="30" maxlength="50" required /></td>
                    <td><label  for="checkin">Check-in Time: *</label></td>
                    <td><select id="checkin" class="inputform" name="checkin">
                            <option value="">Check-in Time</option>
                            <option value="9">09:00:00</option>
                            <option value="10">10:00:00</option>
                            <option value="11">11:00:00</option>
                            <option value="12">12:00:00</option>
                            <option value="13">13:00:00</option>
                            <option value="14">14:00:00</option>
                            <option value="15">15:00:00</option>
                            <option value="16">16:00:00</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="address">Address: *</label></td>
                    <td><input id="address" type="text" class="inputform" name="address" placeholder="Enter the first line of the Address" size="30" maxlength="50" required /></td>
                    <td><label for="telephone">Telephone: *</label></td>
                    <td><input id="telephone" type="text" class="inputform" name="telephone" placeholder="Enter your Telephone Number" size="20" maxlength="20" required /></td>
                    <td><label  for="checkout">Check-out Time: *</label></td>
                    <td><select id="checkout" class="inputform" name="checkout">
                            <option value="">Check-out Time</option>
                            <option value="9">09:00:00</option>
                            <option value="10">10:00:00</option>
                            <option value="11">11:00:00</option>
                            <option value="12">12:00:00</option>
                            <option value="13">13:00:00</option>
                            <option value="14">14:00:00</option>
                            <option value="15">15:00:00</option>
                            <option value="16">16:00:00</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="address2">Address Line 2: *</label></td>
                    <td><input id="address2" type="text" class="inputform" name="address2" placeholder="Enter the second line of the Address" size="30" maxlength="50" required /></td>
                    <td><label for="mobile">Mobile: *</label></td>
                    <td><input id="mobile" type="text" class="inputform" name="mobile" placeholder="Enter your Mobile Number" size="20" maxlength="20" required /></td>
                    <td><label for="picture">Image URL: *</label></td>
                    <td><input id="picture" type="text" class="inputform" name="picture" placeholder="Enter Image URL" size="30" maxlength="250" required /></td>
                </tr>
                <tr>
                    <td><label for="postcode">Postcode: *</label></td>
                    <td><input id="postcode" type="text" class="inputform" name="postcode" placeholder="Enter the Postcode" size="20" maxlength="8" required /></td>
                    <td><label for="email">Email: *</label></td>
                    <td><input id="email" type="text" class="inputform" name="email" placeholder="Enter you Email Address" size="30" maxlength="50" required /></td>
                    <td><label  for="pets">Pets Allowed: *</label></td>
                    <td><select id="pets" class="inputform" name="pets">
                            <option value="">Yes or No</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="city">City: *</label></td>
                    <td><input id="city" type="text" class="inputform" name="city" placeholder=" Enter City" size="20" maxlength="20" required /></td>
                    <td><label for="latitude">Latitude: *</label></td>
                    <td><input id="latitude" type="text" class="inputform" name="latitude" placeholder="Enter the Latitude of B&B" size="20" maxlength="20" required /></td>
                    <td><label hidden for="ownerid">Owner ID: *</label></td>
                    <td><input hidden id="ownerid" type="text" class="inputform" name="ownerid" value="<?php echo"".$_SESSION['ownerid'];?>" size="20" maxlength="10" readonly /></td>
                </tr>
                <tr>
                    <td><label for="region">Region: *</label></td>
                    <td><input id="region" type="text" class="inputform" name="region" placeholder="Enter Region" size="20" maxlength="30" required /></td>
                    <td><label for="longitude">Longitude: *</label></td>
                    <td><input id="longitude" type="text" class="inputform" name="longitude" placeholder="Enter Longitude of B&B" size="20" maxlength="20" required /></td>

                </tr>
                <tr>
                    <td colspan="6"><p><input type="submit" value="Submit" class="btn3" /></p></td>
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
                <li><a href="SearchBB.php">Search</a></li>
                <li><a href="OwnerSignIn.php">Member Area</a></li>
                <li><a href="B&Bregistration.php">Register</a></li>
                <li><a href="help.php#contactsection">Contact</a></li>
                <li><a href="help.php#helpsection">Help</a></li>
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