<!--
  Group C
  CSCI 4750
-->
<?php 
$folderEscape = "";
if (!($currentPage == 'home')){
$folderEscape = "../";
}
else $folderEscape = "";


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo "$title" ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/styles.css" />
</head>
<body>
<header>
    <div class = "back-img">
        <div class = "ban-text">
            <h1><?php echo "$title" ?></h1>
        </div>
    </div>
</header>

<div class = "topnav">
    <a href = "<?php echo $folderEscape?>index.php">Home</a>
    <a href = "/Kennels_R_us/products/index.php">Products</a>
    <a href = "<?php echo $folderEscape?>#cart">Cart</a>
    <a href = "<?php echo $folderEscape?>#about">About</a>
</div>