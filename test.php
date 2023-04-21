<?php

$result = [];
$result1 = [-1];
array_push($result1, 1);
array_push($result, $result1);
//var_dump($result);
echo gettype($result[0][0]), "<br>";
var_dump($result[0][0]);
echo "<br>";
echo count($result), "<br>";
echo count($result1), "<br>";

$a = [1,3,6,3,3, 6,7,6,6,2,2,1,1,1,1,1];
$b = [1,7,4,0];
$c = $a + $b;
print_r($c);
echo "<br>";

$d = array_count_values($a);
$a = array_unique($a);
$a = array_values($a);
arsort($d);
var_dump($d);

$e = array_keys($d);
var_dump($e);
$af = [2];
if ($af == []):
    {
        echo 5;
    }
endif;
//strpos($data[$i],$key)

//echo "<br>", $d[2], "<br>";
//sort($a);
//print_r($a);