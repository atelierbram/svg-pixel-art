<?php
$thisPortrait= "Shaun Inman";
$thisLang="en";
$thispageDesc="Shaun Inman is a designer and developer living and working out of Chattanooga, Tennessee. Originally from Norwood, Massachusetts, he studied Graphic Design at the Savannah College of Art & Design after which he spent a few years in Baltimore, Maryland. His interest in design gradually shifted to web design and development thanks to many well-documented open-source and standards-based technologies.";
$thisAuthor="Bram de Haan";
$thisOrg="Atelier Bram de Haan";
$thisType="portraits";
$thisPage="shaun-inman";
$thisWebsite="svg-pixel-art";
$thisUrl="portraits/pixel-artists/shaun-inman.html";
$prevUrl="portraits/pixel-artists/paul-robertson.html";
$nextUrl="portraits/pixel-artists/steffen-sauerteig.html";

include "../../inc/config.php";
include "../../inc/head-portraits.php";
?>
<style>
.select-menu select,
.container,
.footer {
  background-color: #927644;
}
body {
  background-color: #c3d1cb;
}
</style>
</head>
<body <?php if ($thisType!="") echo "class=\"$thisType\""; ?>>
<div <?php if ($thisPage!="") echo "class=\"$thisPage wrapper\""; ?>>
<?php include "../../inc/header-portraits.php" ?>
<?php include "../../inc/select-menu-pa.php" ?>
<div id="svg-container" class="container svg-container"></div>
<div id="caption-container" class="container caption-container">
  <h1 class="alpha"><?php if ($thisPortrait!="") echo $thisPortrait;?></h1>
  <pre><?php if ($thispageDesc!="") echo "$thispageDesc"; ?>

More at: <a href="http://shauninman.com">shauninman.com</a>, and <a href="http://dribbble.com/shauninman">dribbble</a>
</pre>
</div>
<?php include "../../inc/nav-portraits.php" ?>
<?php include "../../inc/footer.php" ?>
</div><!-- /.wrapper -->
<script>
var imgObj = new Image();
imgObj.src = "<?php if ($rootUrl!="") echo $rootUrl; ?>assets/img/pixel-artists/ShaunInman.png";
</script>

<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/libs/d3.v3.min.js"></script>
<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/convert-to-svg.js"></script>
<script>
document.getElementById("nav").addEventListener('change',function () {
    window.location = this.value;
},false);
</script>
</body>
</html>
<?php ?>
