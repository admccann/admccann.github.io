<!-- this code pulls the standard header and style information from corresponding "includes" php sub files -->
<?php
$page_title = "Jaxon's Jewelry";
include ('includes/header.inc.php');
include ('includes/style.inc.php');
?>

<!-- the body class contains specific elements for the body. This also contains css classes to change the way it looks -->
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
      <!-- this is the main center section of the page -->
      <main>
		  
	  	        <h1>Excellence in Design</h1>
          <hr />
          <p>
              Jaxon's extensive selection of engagement, bridal, and wedding jewelry
              is sure to please even the most discerning customer. In addition to our extensive modern selection,
              we also have some of the finest pieces of estate jewelry available.
         <br />
         <br />
              We welcome you to come in and take a look at our fantastic inventory
              from yesterday and today.
          </p>
<!--          hard return page separator-->
          <hr />

<!--        form section that has to be in html format-->



          <h2>It's Your Day</h2>
          <p>
              It's your big day, and you want everything to be perfect. Let us help you choose the right jewelry
              for your wedding theme, here are some ideas.
          </p>

<!--      An array that holds the suggested types of jewelry to be used in specific wedding themes and prints it on the page as a list, using the foreach loop-->
          <?php
          $weddingJewelry = array(
              "Modern Minimalist: Classic South Sea Pearls",
              "Glamorous: Diamonds Set in Platinum",
              "Vintage: Antique 14k Gold Locket",
              "Bohemian: Layered Freshwater Pearls",
              "Fairytale: Swarovski Crystal and Pearl Tiara",
              "Romantic: Pearls Set in 14k Rose Gold Filigree",
              "Rustic: Freshwater Pearl Halo");
         foreach ($weddingJewelry as $selection) {
              echo "<p>$selection</p>";
          }
          ?>
          <hr />
          <p>
              Enter the month of your wedding below for classic, traditional and even whimsical wedding and gift suggestions!
          </p>

<!--this creates a form field that returns wedding theme ideas based on the month the user enters and pulls the information from
the wedding_date_remark.php page-->
          <form action="wedding_date_remark.php" method="get" >
              <p>Month of Wedding (case sensitive): <input type="text" name="month" />
                  <input type="submit" />
              </p>
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