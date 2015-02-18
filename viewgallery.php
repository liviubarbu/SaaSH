	<script type="text/javascript" src="js/highslide-with-gallery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/highslide.css" />
<script type="text/javascript">
hs.graphicsDir = 'images/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: 0.75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>
<?php
	include("config.inc.php");

	// initialization
	$result_array = array();
	$counter = 0;


	// Category Listing


 if( empty($cid) && empty( $pid ) )
	{
		$number_of_thumbs_in_row = 5;

		$result = mysql_query( "SELECT photo_id,photo_caption,photo_filename FROM gallery_photos WHERE photo_category=1 ORDER by photo_id DESC LIMIT 72" );
		$nr = mysql_num_rows( $result );

		if( empty( $nr ) )
		{
			$result_final = "";
		}
		else
		{
			while( $row = mysql_fetch_array( $result ) )
			{

$result_array[] ="
		

<a href='".$images_dir."/".$row[2]."' class='highslide' onclick='return hs.expand(this)' width='100%' height='100%' title='Photo ID: ".$row['photo_caption']."'>
<img src='".$images_dir."/tb_".$row[2]."' border='0' alt='Photo ID: ".$row['photo_caption']."' title='Photo ID: ".$row['photo_caption']."' width='80' height='80' /></a>
<div class='highslide-caption'>
			<table width='100%'><tr><td style='font-size:18px;font-weight:bold'>
			ID: ".$row['photo_caption']."
			</td><td align='right'><img src='images/social-media.jpg' border='0'></td></tr></table>
</div>	";

				}
			mysql_free_result( $result );	

			$result_final = "";
	
			foreach($result_array as $thumbnail_link)
			{
				if($counter == $number_of_thumbs_in_row)
				{	
					$counter = 1;
					$result_final .= "";
				}
				else
				$counter++;

				$result_final .= "".$thumbnail_link."";
			}
	
		}
	}

	// Full Size View of Photo
	else if( $pid )
	{
		$result = mysql_query( "SELECT photo_caption,photo_filename FROM gallery_photos WHERE photo_id='".addslashes($pid)."'" );
		list($photo_caption, $photo_filename) = mysql_fetch_array( $result );
		$nr = mysql_num_rows( $result );
		mysql_free_result( $result );	

		if( empty( $nr ) )
		{
			$result_final = "\t<tr><td>No Photo found</td></tr>\n";
		}
		else
		{
			$result = mysql_query( "SELECT category_name FROM gallery_category WHERE category_id='".addslashes($cid)."'" );
			list($category_name) = mysql_fetch_array( $result );
			mysql_free_result( $result );	

			$result_final .= "<tr>\n\t<td>
						<a href='viewgallery.php'>Categories</a> &gt; 
						<a href='viewgallery.php?cid=$cid'>$category_name</a></td>\n</tr>\n";

			$result_final .= "<tr>\n\t<td align='center'>
					<br />
					<img src='".$images_dir."/".$photo_filename."' border='0' alt='".$photo_caption."' />
					<br />
					$photo_caption
					</td>
					</tr>";
		}
	}

echo <<<__HTML_END
<html><head></head>
<body style="margin:0 0 auto;">
<div style='margin:0px;width:100%;'>
<center>
$result_final
</center>
</div>
</body></html>
__HTML_END;
?>
