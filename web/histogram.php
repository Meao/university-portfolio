<?php

# Load data for the diagram
$rates = json_decode(file_get_contents('https://kodaktor.ru/j/rates'));
$names = array_map(function($x) { return $x -> name; }, $rates);

# Set up dimensions and margins
$width = 800;
$height = 200;
$margin = 5;
$colNum = count($names);
$colWidth = ($width - 3*$margin - $colNum*$margin) / $colNum; # scale column size by the number of columns
$scaleY = 1.5;

# Set up True Type font to display cyrillic messages
$font = realpath('.').'/calibri.ttf';
$fontSize = 12;

# Create canvas and colors
$canvas = imageCreate($width, $height);
$red = imageColorAllocate($canvas, 200, 0, 0);
$blue = imageColorAllocate($canvas, 0, 0, 100);
$black = imageColorAllocate($canvas, 0, 0, 0);
$white = imageColorAllocate($canvas, 255, 255, 255);

# Set up diagram borders and header
imageFilledRectangle($canvas, 0, 0, $width, $height, $white);
imageRectangle($canvas, $margin, $margin, $width-$margin, $height-$margin, $blue);
imageTTFText($canvas, $fontSize, 0, 2*$margin, 4*$margin, $black, $font, "Марина Кривцун");

# Create columns
array_walk($rates, function($x, $i) use ($canvas, $height, $margin, $scaleY, $colWidth, $red, $black, $font, $fontSize) {
  #error_log(floatval($x -> sell));
  
  $x1 = $margin*2 + $i*$margin + $i*$colWidth;
  $x2 = $x1 + $colWidth;
  $y1 = $height - $scaleY*($margin + 1 + floatval($x -> sell));
  $y2 = $height - ($margin + 1);
  
  imageFilledRectangle($canvas, $x1, $y1, $x2, $y2, $red);
	
	$label = $x -> name;
	// calculate position to center labels
	$textbox = imageTTFbbox($fontSize, 0, $font, $label);
	$xCenter = ($colWidth / 2) - (($textbox[2] - $textbox[0]) / 2);
	
	$xtext = $x1 + $xCenter;
	$ytext = $y2 - $margin;
	
  imageTTFText($canvas, $fontSize, 0, $xtext, $ytext, $black, $font, $label);
});

# Output image
header('Content-Type: image/png');
imagepng($canvas);

# Delete image from memory
imagedestroy($canvas);

?>
