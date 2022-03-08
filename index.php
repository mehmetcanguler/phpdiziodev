<?php 



$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function gezegen($planet,$n) {
// shuffle($planets);
// if (in_array("",$planets)||in_array(NULL,$planets));


  $uzunluk = count($planet);
 
  for($i=0;$i<$uzunluk;$i++){
    
    if($planet[$i]==NULL) 
      unset($planet[$i]);
  }
 
  $rand_keys=array_rand($planet, $n);
    for($j=0;$j<$n;$j++){
        print_r ($planet[$rand_keys[$j]]."<br>");
    }
//   echo $planet[$rand_keys[0]];
 
}


print_r(gezegen($planets,6));

?>