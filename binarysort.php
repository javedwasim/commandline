<?php
# Complete the function below.
# DO NOT MODIFY anything outside this function!
function binarySort($numbers) {
	
	$data = array();
	for($i=0;$i<count($numbers);$i++){
		$binaryCount = countSetBits($numbers[$i]);	
		$data[] = array('decimal' => $numbers[$i], 'binary' => $binaryCount);
		$decimal[$i] = $data[$i]['decimal'];
		$binary[$i] = $data[$i]['binary'];
	}	
	
   array_multisort($binary, SORT_ASC, $decimal, SORT_ASC, $data);
   //build sorted array for decimal elements
   $sorted_array = array();   
   foreach($data as $key => $value){			 
		$sorted_array[] = $value['decimal'];   
   }     
   return $sorted_array;
}

# DO NOT MODIFY THE CODE BELOW THIS LINE!
$handle = fopen("php://stdin", "r");
fscanf($handle, "%d",$n);

$numbers = array();

for($numbers_i = 0; $numbers_i < $n; $numbers_i++){
    fscanf($handle, "%d", $numbers[]);
}

$result = binarySort($numbers);
echo implode("\n", $result);
//echo "<pre>"; print_r($result);

function countSetBits($n)
{
    $count = 0;
    while ($n)
    {
      $n &= ($n-1) ;
      $count++;
    }
    return $count;
}