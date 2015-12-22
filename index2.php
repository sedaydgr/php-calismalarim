<?php

       header("content-type: text/html; charset=utf8");
   
   $sayi1 = 5;
   $sayi2 = 5;
   
   if($sayi1 > $sayi2)
   {
	   echo 'Büyük sayi : '. $sayi1;
   }
   elseif ($sayi2 > $sayi1)
   {
	   echo 'Büyük sayi : '. $sayi2;
   }
   else
	   echo 'Sayilar eşit';
	   