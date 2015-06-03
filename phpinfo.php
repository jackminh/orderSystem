<?php
	$num = 5;
    var_dump(add($num));
 	function add($num){
 		if($num == 1){
 			return 1;
 		}else if($num >1){
 			$count = $num * add($num - 1);
 			return $count;
 		}else{
 			echo "please enter a right number!";
 		}
 	}


?>
