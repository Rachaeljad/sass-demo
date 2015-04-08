<?php
 
 $userName= "Rachael";
 
 $pageID = strtolower($pageTitle);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $pageTitle;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel ="stylesheet" href="style.css">
</head>

<body id="<?php echo $pageID;?>">

<header>
	<div class="row clearfix">

<a href="index.php"><img class="logo" src="logo.png"/></a>

<?php include 'nav.php';?>
</div>

</header>