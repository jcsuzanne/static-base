<?php
include 'theview.php';
?>
<!doctype html>
<html class="no-js lang-fr layout--<?php echo $layout ?>" lang="fr">
<head>
<title><?php echo $share['metaTitle'] ?></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="mobile-web-app-capable" content="yes">
<!-- SEO -->
<meta name="robots" content="index, follow">
<meta name="description" content="<?php echo $share['rawText'] ?>" />
<meta property="og:title" content="Peter McVerry Trust">
<meta property="og:site_name" content="pmvt">
<meta property="og:url" content="<?php echo $share['url'] ?>">
<meta property="og:description" content="<?php echo $share['rawText'] ?>">
<meta property="og:image" content="<?php echo $share['img'] ?>" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:type" content="website">
<meta property="og:image:width" content="1024" />
<meta property="og:image:height" content="563" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Peter McVerry Trust">
<meta name="twitter:description" content="<?php echo $share['rawText'] ?>">
<meta name="twitter:image:src" content="<?php echo $share['img'] ?>">
<link rel="canonical" href="<?php echo $share['url'] ?>" />
<!-- ASSETS -->
<!-- Styles -->
<link rel="stylesheet" type="text/css" href="build/front.css" media="all" />
<!-- Javascript -->
<script type="text/javascript" src="build/top.js"></script>
<!-- Javascript -->
<script>
// <![CDATA[
var config = {
    env: "<?php echo $env ?>",
    lang: "<?php echo $lang ?>",
    pathAssets: "public/"
}
// ]]>
</script>
</head>
<body>
<div id="master">
    <?php require_once('views/partials/header.php'); ?>
    <!-- view start -->
    <?php require_once("views/$view.php"); ?>
    <!-- view end -->
</div>
<script type="text/javascript" src="build/front.js"></script>
</body>
</html>