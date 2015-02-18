<?
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include "config.inc.php";
$search = "%" . $_POST["search_id"] . "%";


$query = "SELECT * FROM gallery_photos WHERE photo_caption LIKE '$search' LIMIT 1";
$result = mysql_query ($query);



if ($result) {
	while ($row = mysql_fetch_array ($result)) {
		echo $row['photo_id'];
	} 
} else {
	echo "No results founds !";
}

?>
