
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
    <title>help & Contact: theB&Bhub</title>
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
        <script>
            function logout() {
                window.location = "http://iainscott-rgu.azurewebsites.net/home.php?value=logout";
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



<section class="container" id="featured"><a name="contactsection"></a>
    <div class="centre">

        <p>Contact Section</p>
    </div>
</section>


<section class="container" id="content2">
    <table class="table6">
        <tr><td colspan="2"><p>If you have a problem... if nobody else can help... and if you can find us... maybe you can hire... The A-Team.</p></td></tr>
        <tr><td><p>Contact Email Address: </p></td><td><p>theBnBhub@gmail.com</p></td></tr>
        <tr><td valign="top"><p>Incorporated Business Address:</p></td><td valign="top"><p>
                    School of Computing Science and Digital Media
                    <br>The Sir Ian Wood Building
                    <br>Robert Gordon University
                    <br>Garthdee Road
                    <br>Aberdeen
                    <br>AB10 7GJ

                </p></td></tr>



    </table>



</section>


<section class="spacer" id="spacer">


</section>






<section class="container" id="featured"><a name="helpsection"></a>
    <div class="centre">

        <p>Help Section</p>
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
                <li><a href="B&Bregistration.html">Register</a></li>
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