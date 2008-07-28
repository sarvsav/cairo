<?php
$sur = new CairoImageSurface(FORMAT_ARGB32, 10, 10);
$con = new CairoContext($sur);

$con->pushGroup();
$con->setSourceRgb(0,0,1);
$con->paint();

$con->popGroupToSource();
$con->setOperator(OPERATOR_SOURCE);
$con->paint();

$sur->writeToPng(dirname(__FILE__)  . "/group-paint-php.png");
?>

