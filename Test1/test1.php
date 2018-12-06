<?php  
/*
input [1,2,3,4,5] , 3
output [4,5,1,2,3]

input ['a', 'b', 'c', 'd', 1, 2, 3] , 10
output ['d', 1, 2, 3, 'a', 'b', 'c']
*/ 

$input = array(1,2,3,4,5);
$num =  3;

$output = moving($input, $num);
print_r($output);

echo '<br>------------------<br>';

$input = array(1,2,3,4,5);
$num =  4;

$output = moving($input, $num);
print_r($output);

echo '<br>------------------<br>';

$input = array('a', 'b', 'c', 'd', 1, 2, 3);
$num = 10;

$output = moving($input, $num);
print_r($output);



function moving($input, $num){
	$result = array();
	
	$count = count($input);
	
	$new_array = $input;
	
	while(1){
		if(count($new_array) < $num){
			$new_array = array_merge($new_array, $input);
		}else{
			break;
		}
	}
	
	$new_array = array_slice($new_array, $num);

	//print_r($new_array); exit;
	
	while(1){
		if(count($new_array) < $count){
			$new_array = array_merge($new_array, $input);
		}else{
			break;
		}
	}
	
	for($i=0; $i<$count; $i++){
		
		$result[$i] = $new_array[$i];
		
	}
	
	return $result;
}

