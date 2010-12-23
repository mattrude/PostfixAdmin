<?php
require_once('header.php');

$latest = "2.3.2";

if(!isset($_GET['version'])) {
	$version = '0.1'; # dummy version to enforce displaying the latest one
}
else {
	$version = $_GET['version'];
}
if(strcmp($version,$latest) >= 0) {
	echo "Congratulations - you're running the latest version of PostfixAdmin";
}
else {
	echo "Upgrade available - the latest version is $latest"; 
}

require_once('footer.php');
?>
