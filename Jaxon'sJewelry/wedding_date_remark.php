
<head>
    <title>Wedding Theme Ideas</title>
</head>
<body>
<h1>On Your Special Day</h1>
<hr />
<!--this conditional statement works with the form on the index page to provide wedding guidance based on the month the user enters. If a month isn't entered,
the user is instructed to try again by default-->
<?php
$Month = $_GET["month"];
switch ($Month) {
    case "January":
        echo "Snowy themes make beautiful January weddings! Pearls make wonderful bridesmaid gifts as well 
        as the perfect touch for the bride herself.";
        break;
    case "February":
        echo "Make it a day of LOVE with whimsical and romantic pairings like red and pink. 
        Stop in to see our fabulous selection of rubies, a great idea for bridal party gifts!";
        break;
    case "March":
        echo "Celebrate your wonderful day with
        spring’s earliest bursts of color, flowers and delicate life forms: Lilies
         of Valley and Shasta daisies, daffodils and tulips, butterflies and dragonflies. Come
         see our selection of fine gemstones for bridesmaid gifts!";
        break;
    case "April":
        echo "Pastels like lavender or yellow, or combos with a modern bent like pink and lime green. A monochromatic look using all shades of 
        pink is also totally spring (and stunning). Paired with peridot and amethyst, you can't go wrong!";
        break;
    case "May":
        echo "Some of the best colors for a May wedding are ones that can convey brightness, elegance, and whimsical romance. Colors that 
        also represent the flowers in season include purple, peach, and blue. A sapphire bracelet is the perfect something blue!";
        break;
    case "June":
        echo "Silver will always be a great choice for a wedding. Combine it with fuchsia and you have yourself a classy, 
        elegant wedding with photographs that will surely stand out anywhere. Fuchsia wedding bouquets for bridesmaids 
        in silver gowns are a combination that will work gorgeously. Also, you can include silver accents in your wedding stationery, 
        from saving the dates to the wedding invitations. Don’t forget silver wedding accessories for the bride.";
        break;
    case "July":
        echo "Start the mid-summer with the primary colors yellow, blue, and orange. Creating a combination of their many shades 
        will create vibrancy for various wedding styles. Stop in to see our lovely selection of gemstone earrings, perfect
        for this wonderful occasion.";
        break;
    case "August":
        echo "The bright August ends the summer and heralds the fall. Orange and rich pink are perfect for the wanderlust bride having a park wedding. 
        Use orange in its many shades as the primary color and complement with rich pink. Jaxon's offers a wide array of 
        pink topaz, perfect for a flower girl gift.";
        break;
    case "September":
        echo "Some of the best fall wedding colors for September are red, marigold, and green. These colors go well with flowers like 
        Astilbe, Dahlias, Gladioli, Achillea, Alstromeria, and Delphiniums. Brown topaz and citrine make gorgeous fall wedding accessories.";
        break;
    case "October":
        echo "Fall is a beautiful and cozy season to tie the knot. Burgundy and gold are the perfect combos for a vintage wedding. Garnets
         set in 14k yellow gold are the perfect bridesmaid accessory.";
        break;
    case "November":
        echo "Purple and navy blue are the hit colors for November weddings. Both colors work beautifully with olive-green to give nature’s 
        aesthetic appeal. Amethyst bridesmaid gifts are a perfect touch, and don't forget a vintage sapphire hair comb for something old AND something blue.";
        break;
    case "December":
        echo "A Christmas wedding, need we say more? But you may also want to consider choosing an all white wedding, which
         is perfect for winter when the landscape itself will coordinate with the theme. White bridesmaids' dresses and tuxedos, an all white wedding cake, 
         and an elegant white bridal bouquet are stunning details for this simple theme. And for a touch of color visit Jaxon's for 
         our fabulous selection of gemstones, as well as silver and gold jewelry.";
        break;
    default:
        echo "You did not enter a valid month, please try again.";
}
?>

</body>