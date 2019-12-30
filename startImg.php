<?php
     require_once("imageTool.php");
     $imgTool = new imageTool('image/');
     $image = '123456.jpg';
     $waterImg = 'water.png';
      $imgTool->addWater($image,$waterImg,0,100,'water_',1);
//$imgTool->compressImg($image,50,0);