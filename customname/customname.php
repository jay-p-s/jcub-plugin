<?php
   /*
   Plugin Name: Customname
   Plugin URI: http:// jaspreets.sgedu.site/
   Description: Get your name in any color you want and know what color is lucky for you.
   Version: 1.0
   Author: Jaspreet Singh
   Author URI: http:// jaspreets.sgedu.site/
   License: GPL2
   */
   add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
	 if(!empty($_POST["submit"])) { 
	 	$name =$_POST['Name'];
	 	$color =$_POST['favcolor'];
	 
	 	
	 	$num = ord($name[0]);  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
  
  
  if($sum>=0 && $sum<=5)
  		$content .= '<div><h5 style="color:'.$color.';">Hello '.$name.'! <br>Your favourite color is  '.$color.' <br>Your today\'s lucky flower is Rose.</h5> </div><br>';
  else if($sum>=6 && $sum<=10)
  				$content .= '<div><h5 style="color:'.$color.';">Hello '.$name.'! <br>Your favourite color is  '.$color.' <br>Your today\'s lucky flower is Astr. </h5> </div><br>';
  else if($sum>=10 && $sum<=15)
  		$content .= '<div><h5 style="color:'.$color.';">Hello '.$name.'! <br>Your favourite color is  '.$color.' <br>Your today\'s lucky flower is Lotus.</h5> </div><br>';
  else if($sum>=15 && $sum<=20)
  		$content .= '<div><h5 style="color:'.$color.';">Hello '.$name.'! <br>Your favourite color is  '.$color.' <br>Your today\'s lucky flower is Sunflower. </h5> </div><br>';
   

	}
	
	
    return $content .='<div> <form action="" method="Post">
   Name : <input type="text" name="Name"  placeholder="Enter Your Name"  required><br> 
  <label for="favcolor">Select your favorite color:</label>
  <input type="color" id="favcolor" name="favcolor" value="#ff0000" required>
  <input type="submit" name="submit" value="Submit">
  
</form> </div>';
}
?>