<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
//$line = trim(fgets(STDIN)); // reads one line from STDIN
fscanf(STDIN, "%d\n", $testcase); // reads number from STDIN
for($i = 1; $i <= $testcase; $i++)
{
   $line = fgets(STDIN);
   $arr = explode(" ", $line);
   $size = sizeof($arr);
   $min  = $arr[0];
   $max = $arr[0];
   for ($j = 1; $j < $size; $j++)
   {
        if ($arr[$j] < $min)
        {
            $min = $arr[$j];
        }
   }
   for ($j = 1; $j < $size; $j++)
   {
        if ($arr[$j] > $max)
        {
            $max = $arr[$j];
        }
   }
    fprintf(STDOUT, "Case %d: Among %d numbers %d is maximum and %d is minimum\n", $i, $size, $max, $min);
 

}