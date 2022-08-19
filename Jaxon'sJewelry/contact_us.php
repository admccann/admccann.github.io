<!-- this code pulls the standard header and style information from corresponding "includes" php sub files -->
<?php
$page_title = "Contact Jaxon's";
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
        <h1>Contact Us</h1>

        <p class="center">
          Please call: &nbsp; (254) 555-1234,
          <a href="mailto:angeimccann@gmail.com" title="link to Jaxon's email"
            >Email</a
          >
          or reach out to us on
          <a
            href="https://www.facebook.com/"
            target="Jaxon's Jewelry Facebook Page"
            >Facebook</a>.
        </p>


        <p class="center">
          We are located at: &nbsp;  801 North Valley Mills Drive, Waco, TX 76711
        </p>

        <div class="center">
          <img
            src="#"
            alt="Map of Jaxon's location in Waco, Texas"
            width="500"
          />
        </div>

        <p class="center">
          Hours of Operation: &nbsp;&nbsp;Monday - Saturday, 8a to 7p
        </p>
      </main>
        <!-- this code pulls the standard navigation code from the corresponding "includes" php sub files -->
        <?php
        include ('includes/nav.inc.php')
        ?>


        <!--  this code pulls the standard footer code from the corresponding "includes" php sub files> -->
        <?php
        include ('includes/footer.inc.php')
        ?>



