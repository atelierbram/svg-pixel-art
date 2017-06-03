<?php
$thisPortrait= "Collection";
$thisLang="en";
$thispageDesc="Collection of Pixel Artists";
$thisAuthor="Bram de Haan";
$thisOrg="Atelier Bram de Haan";
$thisType="portrait-gallery";
$thisPage="pixelart-portraits";
$thisWebsite="svg-pixel-art";
$thisUrl="/";
$prevUrl="";
$nextUrl="";

include "inc/config.php";
include "inc/head-portraits.php";
?>
</head>
<body <?php if ($thisType!="") echo "class=\"$thisType\""; ?>>
<div <?php if ($thisPage!="") echo "class=\"$thisPage wrapper\""; ?>>
<?php include "inc/header-portraits.php" ?>
</header>
<div class="svg-gallery">

<div class="row">
<div class="col"><figure class="effeckt-caption" data-effeckt-type="quarter-slide-up"><a href="<?php echo $rootUrl ?>portraits/pixel-artists/arjan-westerdiep.html"><img src="<?php echo $rootUrl ?>php/inc/svg/arjan-westerdiep.svg" alt="Arjan Westerdiep" /></a><figcaption><div class="effeckt-figcaption-wrap"><p>Arjan Westerdiep</p></div></figcaption></figure></div>
<div class="col"><figure class="effeckt-caption" data-effeckt-type="quarter-slide-up"><a href="<?php echo $rootUrl ?>portraits/pixel-artists/denise-wilton.html"><img src="<?php echo $rootUrl ?>php/inc/svg/denise-wilton.svg" alt="Denise Wilton" /></a><figcaption><div class="effeckt-figcaption-wrap"><p>Denise Wilton</p></div></figcaption></figure></div>
<div class="col"><figure class="effeckt-caption" data-effeckt-type="quarter-slide-up"><a href="<?php echo $rootUrl ?>portraits/pixel-artists/gary-j-lucken.html"><img src="<?php echo $rootUrl ?>php/inc/svg/gary-j-lucken.svg" alt="Gary J. Lucken" /></a><figcaption><div class="effeckt-figcaption-wrap"><p>Gary J. Lucken</p></div></figcaption></figure></div>
</div>
<div class="row">
<div class="col"><figure class="effeckt-caption" data-effeckt-type="quarter-slide-up"><a href="<?php echo $rootUrl ?>portraits/pixel-artists/jenn-schiffer.html"><img src="<?php echo $rootUrl ?>php/inc/svg/jenn-schiffer.svg" alt="Jenn Schiffer" /></a><figcaption><div class="effeckt-figcaption-wrap"><p>Jenn Schiffer</p></div></figcaption></figure></div>
<div class="col"><figure class="effeckt-caption" data-effeckt-type="quarter-slide-up"><a href="<?php echo $rootUrl ?>portraits/pixel-artists/kai-vermehr.html"><img src="<?php echo $rootUrl ?>php/inc/svg/kai-vermehr.svg" alt="Kai Vermehr" /></a><figcaption><div class="effeckt-figcaption-wrap"><p>Kai Vermehr</p></div></figcaption></figure></div>
<div class="col"><figure class="effeckt-caption" data-effeckt-type="quarter-slide-up"><a href="<?php echo $rootUrl ?>portraits/pixel-artists/paul-robertson.html"><img src="<?php echo $rootUrl ?>php/inc/svg/paul-robertson.svg" alt="Paul Robertson" /></a><figcaption><div class="effeckt-figcaption-wrap"><p>Paul Robertson</p></div></figcaption></figure></div>
</div>
<div class="row">
<div class="col"><figure class="effeckt-caption" data-effeckt-type="quarter-slide-up"><a href="<?php echo $rootUrl ?>portraits/pixel-artists/shaun-inman.html"><img src="<?php echo $rootUrl ?>php/inc/svg/shaun-inman.svg" alt="Shaun Inman" /></a><figcaption><div class="effeckt-figcaption-wrap"><p>Shaun Inman</p></div></figcaption></figure></div>
<div class="col"><figure class="effeckt-caption" data-effeckt-type="quarter-slide-up"><a href="<?php echo $rootUrl ?>portraits/pixel-artists/steffen-sauerteig.html"><img src="<?php echo $rootUrl ?>php/inc/svg/steffen-sauerteig.svg" alt="Steffen Sauerteig" /></a><figcaption><div class="effeckt-figcaption-wrap"><p>Steffen Sauerteig</p></div></figcaption></figure></div>
<div class="col"><figure class="effeckt-caption" data-effeckt-type="quarter-slide-up"><a href="<?php echo $rootUrl ?>portraits/pixel-artists/svend-smital.html"><img src="<?php echo $rootUrl ?>php/inc/svg/svend-smital.svg" alt="Svend Smital" /></a><figcaption><div class="effeckt-figcaption-wrap"><p>Svend Smital</p></div></figcaption></figure></div>
</div>

</div>

<?php include "inc/footer.php" ?>
</div><!-- /.wrapper -->
<script>
var imgObj = new Image();
imgObj.src = "";
</script>
<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/libs/d3.v3.min.js"></script>
<script src="<?php if ($rootUrl!="") echo $rootUrl; ?>assets/js/convert-to-svg.js"></script>
</body>
</html>
<?php ?>
