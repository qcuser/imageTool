<?php
     require_once("imageTool.php");
     $imgTool = new imageTool('image/');
     $image = '123456.jpg';
     $waterImg = 'water.png';
//      $imgTool->addWater($image,$waterImg,0,100,'water_',1);
echo $imgTool->addTextmark($image,"吱吱吱吱",60, dirname(__FILE__)."\msyh.ttf",30,110,1);
//$imgTool->compressImg($image,50,0);