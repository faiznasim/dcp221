<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);
for($i = 1; $i <= $testcase; $i++)
{
   $line = fgets(STDIN);
   $arr = explode(" ", $line);
   $size = sizeof($arr);

   $max = (int)$arr[0];
   for ($j = 1; $j < $size; $j++)
   {
        if ((int)$arr[$j] > $max)
        {
            $max = (int)$arr[$j];
        }
   }
   $min  = (int)$arr[0];
   for ($j = 1; $j < $size; $j++)
   {
        if ((int)$arr[$j] < $min)
        {
            $min = (int)$arr[$j];
        }
   }
    fprintf(STDOUT, "Case %d: Among %d numbers %d is maximum and %d is minimum\n", $i, $size, $max, $min);
 

}