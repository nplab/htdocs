<?php
$chunksize = 10; // px
$srcImageName = "image.jpg";

$imagesize = getimagesize($srcImageName);
$chunksPerRow = floor($imagesize[1]/$chunksize);
$chunksPerCol = floor($imagesize[0]/$chunksize);
$srcImage = imagecreatefromjpeg($srcImageName);

for ($row = 0; $row < $chunksPerRow; $row++) {
    echo '<div class="row">';
    for ($col = 0; $col < $chunksPerCol; $col++) {
        $chunkName =  "chunks/chunk-".$row."-".$col.".jpg";
        $chunk = imagecreatetruecolor($chunksize, $chunksize);
        imagecopy($chunk, $srcImage, 0, 0, $col*$chunksize, $row*$chunksize, $chunksize, $chunksize);
        imagejpeg($chunk, $chunkName, 85);
        imagedestroy($chunk);
        echo '<img class="chunk" onload="refreshTimestamp();" src="'.$chunkName.'"/>';
        echo "\n";
    }
    echo '</div>';
}
