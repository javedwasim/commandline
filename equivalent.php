<?php
# Complete the function below.
# DO NOT MODIFY anything outside this function!
function Twins($a, $b) {
	//loop through array length
	for($j=0;$j<count($a);$j++){
		$data[] = str_split($a[$j]);
		$data1[] = str_split($b[$j]);
		//compare first string and check length are equal for strings.	
		if(count($data[$j])==count($data1[$j])){
			$result = createResult($data[$j],$data1[$j]);
			if(count($result)==count($data1[$j])){
				$compare[] = "Yes";	
			}else{
				$compare[] = "No";	
			}
		}else{
			$compare[] = "No";		
		}
	}	
	return $compare;
}

# DO NOT MODIFY THE CODE BELOW THIS LINE!
$handle = fopen("php://stdin", "r");
fscanf($handle, "%d",$n1);

$string1 = array();
$string2 = array();

for($string1_i = 0; $string1_i < $n1; $string1_i++){
    fscanf($handle, "%s", $string1[]);
}

fscanf($handle, "%d",$n2);

for($string2_i = 0; $string2_i < $n2; $string2_i++){
    fscanf($handle, "%s", $string2[]);
}

$result = Twins($string1, $string2);
echo implode("\n", $result);


function swapedArray($data){
	$newstr = array();
	for($i=0;$i<2;$i++){
		if($i%2==0){
			$newstr = swap($data,$i,$i+2);								
		}else{			
			$newstr = swap($newstr,$i,$i+2);
		}
	}
	return $newstr;
}


function swap (&$ary,$element1,$element2)
{
	$temp=$ary[$element1];
	$ary[$element1]=$ary[$element2];
	$ary[$element2]=$temp;
	return $ary;
}


function createResult($data,$data1){	
	$result =  array();
	$compare = array();		
	for($i=0;$i<count($data);$i++){		
		if($i%2==0){
			$compare[$data[$i]] = "e";
		}else{
			$compare[$data[$i]] = "o";
		}		
	}	
	$compare1 = array();	
	for($i=0;$i<count($data1);$i++){		
		if($i%2==0){		
			$compare1[$data1[$i]] = "e";
		}else{
		
			$compare1[$data1[$i]] = "o";
		}		
	}
	foreach($compare as $key1=>$val1){		
		foreach($compare1 as $key2=>$val2){			
			if($key1==$key2 && $val1==$val2){
				$result[]="Yes";
			}
		}
	}	
	return $result;

}