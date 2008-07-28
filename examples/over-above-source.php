<?php
$size = 40;
$pad = 2;
$width = ($pad + $size + $pad);
$height = $width;
$sur = new CairoImageSurface(FORMAT_ARGB32,$width,$height);
$con = new CairoContext($sur);

$con->translate($pad, $pad);
$con->moveTo($size/2, $size/2);
$con->relLineTo($size/2, 0);
$con->relLineTo($size/-2, $size/2);
$con->closePath();

$con->setOperator(OPERATOR_SOURCE);
$con->setSourceRgba(1,0,0,0.5);

$con->fill();

$con->arc($size/2, $size/2, $size/4, 0, 2*M_PI);
$con->setOperator(OPERATOR_OVER);
$con->setSourceRgba(0,1,0,0.5);

$con->fill();

$sur->writeToPng(dirname(__FILE__)  . "/over-above-source-php.png");
?>

