<ul>
<?php

$images = glob('img/*.jpg');
foreach ($images as $image) {
	echo "<li><a href=\"item.php?image=$image\">$image</a></li>";
}

?>
</ul>
