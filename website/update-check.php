<?php
require_once('header.php');

$latest = "2.3.6";

if(!isset($_GET['version'])) {
	$version = '0.1'; # dummy version to enforce displaying the latest one
}
else {
	$version = $_GET['version'];
}

# remove anything that is not a digit and not a dot
# also remove anything after such an invalid character to avoid wrong results
# TODO: this will fail to compare versions like "2.3rc7" with "2.3rc8"
$version = preg_replace("/[^0-9.].*/", "", $version);

if(version_compare2($version,$latest) >= 0) {
	echo "Congratulations - you're running the latest version of PostfixAdmin";
}
else {
	echo "Upgrade available - the latest version is $latest"; 
}

require_once('footer.php');


//Compare two sets of versions, where major/minor/etc. releases are separated by dots.
//Returns 0 if both are equal, 1 if A > B, and -1 if B < A.
function version_compare2($a, $b)
{
    $a = explode(".", rtrim($a, ".0")); //Split version into pieces and remove trailing .0
    $b = explode(".", rtrim($b, ".0")); //Split version into pieces and remove trailing .0
    foreach ($a as $depth => $aVal)
    { //Iterate over each piece of A
        if (isset($b[$depth]))
        { //If B matches A to this depth, compare the values
            if ($aVal > $b[$depth]) return 1; //Return A > B
            else if ($aVal < $b[$depth]) return -1; //Return B > A
            //An equal result is inconclusive at this point
        }
        else
        { //If B does not match A to this depth, then A comes after B in sort order
            return 1; //so return A > B
        }
    }
    //At this point, we know that to the depth that A and B extend to, they are equivalent.
    //Either the loop ended because A is shorter than B, or both are equal.
    return (count($a) < count($b)) ? -1 : 0;
} 

?>
