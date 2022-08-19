<!-- this code pulls the standard header and style information from corresponding "includes" php sub files -->
<?php
$page_title = "Jaxson's Gallery";
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
<!-- this creates a form where customers can enter their phone number to receive special sale notifications-->
          <form action="gallery.php" method="get"
                enctype="application/x-www-form-urlencoded">

              <!-- this is a function that allows different messages to be returned, seasonal, sales, etc... when asking for a users phone number-->
              <?php
              function get_mobile_number() {
                  $special_message = "Enter your mobile phone number below to receive special preview notifications of our sales!";
                  return $special_message;
              }

              $return_info = get_mobile_number();
              echo $return_info;
              ?>
              <br>
              <br>
              <!-- this asks the user to enter their phone number if there is no data entered yet, then, once data is entered, it validates that the data submitted-->
              <!--              in the phone number form is numerical only and returns an error message if there are any non-numeric entries. It removes-->
              <!--              specific characters such as spaces, dashes or parenthesis-->
              <input type="text" name="pnumber" size="12"
                     value="<?php if(!empty($_GET['pnumber'])) echo $_GET['pnumber'] ?>" />

              <input type="submit" value="Submit"/>
              <br>
              <?php
              if (!isset($_GET['pnumber']))
                  echo "<br>Please enter your mobile phone number.";
              else {
                  $phone = $_GET['pnumber'];
                  $valid_phone = str_replace("-", "", $phone);
                  $valid_phone = str_replace(" ", "", $valid_phone);
                  $valid_phone = str_replace("(", "", $valid_phone);
                  $valid_phone = str_replace(")", "", $valid_phone);
                  if (!is_numeric($valid_phone))
                      echo "<br>You did not enter a valid mobile phone number, please try again.";
                  else if (strlen($valid_phone) !== 10)
                      echo "<br>Please enter a valid phone number";
                  else
                      echo "<br>Your mobile phone number is $valid_phone, thank you!.";
              }
              ?>

          </form>

          <hr />

        <h2>A ring you can treasure forever... </h2>

<!--these are placeholders for future images of jewelry-->

          <div>
          <!-- the div tag is used to create a generic container -->
          <!-- this div also has a class included that adds a background color -->
          <div class="col">
            <!-- The figure tag and figcaption tags are used for product images and graphics with captions -->
            <figure>
              <img
                src="#"
                width="288"
                height="288"
                alt="3 carat emerald cut engagement ring"
              />
              <figcaption>3 carat emerald cut engagement ring</figcaption>
            </figure>
          </div>

          <div class="col">
            <figure>
              <img
                src="#"
                width="288"
                height="288"
                alt="Vintage Wedding Band"
              />
              <figcaption>Vintage Wedding Band</figcaption>
            </figure>
          </div>

          <div class="col">
            <figure>
              <img
                src="#"
                width="288"
                height="288"
                alt="1 Carat Pave Set Band"
              />
              <figcaption>1 carat Pave Set Band</figcaption>
            </figure>
          </div>

          <div class="col">
            <figure>
              <img
                src="#"
                width="288"
                height="288"
                alt="Yellow Gold Comfort Fit Wide Band"
              />
              <figcaption>Yellow Gold Comfort Fit Wide Band</figcaption>
            </figure>
          </div>

          <div class="col">
            <figure>
              <img
                src="#"
                width="288"
                height="288"
                alt="2 carat cushion cut engagement ring"
              />
              <figcaption>2 carat cushion cut engagement ring</figcaption>
            </figure>
          </div>

          <div class="col">
            <figure>
              <img
                src="#"
                width="288"
                height="288"
                alt="Vintage Wedding Set"
              />
              <figcaption>Vintage Wedding Set</figcaption>
            </figure>
          </div>

      </main>
        <!-- this code pulls the standard navigation code from the corresponding "includes" php sub files -->
        <?php
        include ('includes/nav.inc.php')
        ?>

        <!--  this code pulls the standard footer code from the corresponding "includes" php sub files> -->
        <?php
        include ('includes/footer.inc.php')
        ?>



