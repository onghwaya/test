<?php

$seq = (is_numeric($_REQUEST['seq']))?$_REQUEST['seq']:1;

switch ($seq) {
  case 1:
   echo 111;
   break;
  case 2:
    echo 2222;
   break;
  case 3:
	  echo 333;
      break;
  case 4:
  	  echo 4;
   break;
  case 5:
  	  echo 5;
   break;
  case 6:
  	  echo 6;
   break;
  case 7:
  	  echo 7;
   break;
  case 8:
  	  echo 8;
   break;
   default:
   	  echo 9;
   break;
 }
 ?>