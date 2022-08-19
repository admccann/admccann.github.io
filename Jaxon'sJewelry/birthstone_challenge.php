<!-- this code pulls the standard header and style information from corresponding "includes" php sub files -->
<?php
$page_title = "Birthstone Challenge";
include ('includes/header.inc.php');
include ('includes/style.inc.php');
?>
<!-- The body of the document is where the page's visible content goes -->

<!-- the body class contains specific elements for the body -->
<body>
<div class="container">
    <header>
        <div class="center">
            <img
                    src="images/JaxonsJewelryLogoOpt.png"
                    alt="Jaxon's Jewelry Logo"
                    width="350"
            />
        </div>
    </header>

    <main>
        <h1>Take the Birthstone Challenge!</h1>


        <form id="form1" name="form1" method="get" action="signupChallenge.php"
              enctype="application/x-www-form-urlencoded">

Enter your name, birthdate (yyyy-mm-dd) and phone number to enter the Birthstone Challenge!
            <p>First Name <input type="text" name="first_name" id="first_name" />
                &nbsp; &nbsp; Last Name <input type="text" name="last_name" id="last_name" />   <br>

                Birthdate <input name="dob" id="dob" type="text" size="20" placeholder="yyyy-mm-dd"
                       value="<?php if(!isset($_GET['dob']))
                           date("Y-m-d");
                       else echo $_GET['dob'];?>" /> <br>

                Phone Number <input type="text" name="pnumber" size="12" id="pnumber" placeholder="999-999-9999"
                                    value="<?php if(!empty($_GET['pnumber'])) echo $_GET['pnumber'] ?>" />
                <br>
                <input type="submit" name="submit" value="Submit Form"><br>

            <br>

            <p><a href="showChallenge.php">Show Participants</a></p>
        </form>

    </main>
    <!-- this code pulls the standard navigation code from the corresponding "includes" php sub files -->
    <?php
    include ('includes/nav.inc.php')
    ?>


    <!--  this code pulls the standard footer code from the corresponding "includes" php sub files> -->
    <?php
    include ('includes/footer.inc.php')
    ?>




