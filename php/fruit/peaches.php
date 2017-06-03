<?php
$thisPortrait= "Peaches";
$thisLang="en";
$thispageDesc="You gotta love Peaches";
$thisAuthor="Bram de Haan";
$thisOrg="Atelier Bram de Haan";
$thisType="portraits";
$thisPage="peaches";
$thisWebsite="svg-pixel-art";
$thisUrl="portraits/pixel-artists/arjan-westerdiep.html";
$prevUrl="portraits/pixel-artists/svend-smital.html";
$nextUrl="portraits/pixel-artists/denise-wilton.html";

include "../inc/config.php";
include "../inc/head-portraits.php";
?>
<style>
.select-menu select,
.container,
.footer {
  background-color: #cecacf;
}
body {
  background-color: #cecacf;
}
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
imgObj.src = "<?php if ($rootUrl!="") echo $rootUrl; ?>assets/img/png/peaches_32x32.png";
</script>

<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/libs/d3.v3.min.js"></script>
<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/convert-to-svg_circle-alt.js"></script>
<script>
document.getElementById("nav").addEventListener('change',function () {
    window.location = this.value;
},false);
</script>
</body>
</html>
<?php ?>
