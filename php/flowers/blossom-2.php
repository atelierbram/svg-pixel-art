<?php
$thisPortrait= "Blossom";
$thisLang="en";
$thispageDesc="Blossom";
$thisAuthor="Bram de Haan";
$thisOrg="Atelier Bram de Haan";
$thisType="fruit";
$thisPage="grapefruit";
$thisWebsite="svg-pixel-art";
$prevUrl="portraits/pixel-artists/svend-smital.html";
$nextUrl="portraits/pixel-artists/denise-wilton.html";

include "../inc/config.php";
include "../inc/head-portraits.php";
?>
<style>
body,
.select-menu select,
.container,
.footer {
  background-color: #e0af9f;
}
svg { max-width: 100%;}
</style>
</head>
<body <?php if ($thisType!="") echo "class=\"$thisType\""; ?>>
<div <?php if ($thisPage!="") echo "class=\"$thisPage wrapper\""; ?>>
<?php include "../inc/header-portraits.php" ?>
<?php include "../inc/select-menu-pa.php" ?>
<div id="svg-container" class="container svg-container"></div>
<div id="caption-container" class="container caption-container">
  <h1 class="alpha"><?php if ($thisPortrait!="") echo $thisPortrait;?></h1>
  <pre><?php if ($thispageDesc!="") echo "$thispageDesc"; ?>

More at: <a href="http://drububu.com/">drububu.com</a>
</pre>
</div>
<?php include "../inc/nav-portraits.php" ?>
<?php include "../inc/footer.php" ?>
</div><!-- /.wrapper -->
<script>
var imgObj = new Image();
// imgObj.src = "<?php if ($rootUrl!="") echo $rootUrl; ?>assets/img/png/blossom-2_32x32.png";

imgObj.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAYFBMVEXRqLLfsbH////26+jYub/s1tToy8XGmaW/i5anZGDRpJq6d3/gw8j68u/lwLzy5OP9+/Xx4NzGlILw3Nfr0s1uIBLkzNKKRC3t2t6cRVLAdVvalp/BWyi8OCu8iWmUKg7PkV4lAAACZklEQVR4Xl2SBwolOQxEJTnm0Dn8cP9bbv1mYIcpMMbUs1USpm7q7KOU3qte+HN9/hFJKcOWIqKGdDHX38SFEy3SIV3n1gH0P9Y0PQBourxA/H4r+BKvD6zp0Z8S8XstXV/v992k5/SUmP4iiF/f2kYNt7XJM4c9XFOcphjjw1xUT40UMhmRFO77u+4TkYuPHoAZ0aR9CqKG5M89EP8A4gf5UGoChSAQOSJ/VwuPdWWuPE20X4eYsLsNQHOkiYZhgv+II32/331dg3ZbKVm3zokr6WqtrRWL6YVY3jmdjXFxiCzvF2drl2XBAvED3KGp5o20mUtXMdkBEzIGBL1eq9+0Xu53aFKaElGlNPPz5xkIgG84ttyu9XsrmZVAXSkDfwwQAF777lS5v6c7xFqRAr/My/wD5vkHrOsmXZLD+4oiW6V6b8vyP4BhA5jNYTDy3dmGHO2pAdHr8tSkdzAbZfUJeN9wnY21IFoj5xx1gb9o01qftIjwxfOMWQCYibx3C64vmUJsNnIRqbcdEGIqS9755FkTaQ5riDEupSi0N35b6zOdKQSfkiOda9g/U6Sl9H7kgU7s6IXO80yIATGFdb9u3QSBfsHtxKVQ8u65T36arn3fk+4A4t3K4CmOg9yWz9NrSgEfFsSaELkmbs1adLkRKQDJhf0Mr9eVUCXlfNOhlEIWZUhv5DKnhM+YUiJOeC6bQ/VndmUQ/EOGcz54IqcbB62KqCZQL6UROVJyEHZCUn1wyLCGHiItVztwKbeyaUKreSN/p911KUbztukaYyOt8F1Qwfu7Hnye6HPbcs1ZUzbRmf8Axbs0PfSU1P8AAAAASUVORK5CYII=";
</script>

<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/libs/d3.v3.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script> -->
<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/convert-to-svg_circle-alt.js"></script>
<script>
document.getElementById("nav").addEventListener('change',function () {
    window.location = this.value;
},false);
</script>
</body>
</html>
<?php ?>
