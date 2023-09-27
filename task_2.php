<?php
$numbers=range(1,10);
function removeEvenNumbers($arr){
    $result=array();
    foreach($arr as $number){
        if($number %2 ==1){
            $result[]=$number;
        }
    }
    return  $result;
}
$filteredNumbers = removeEvenNumbers($numbers);
print_r($filteredNumbers);

?>