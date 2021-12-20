<?php
$myfile = fopen("lorem.ypsum", "r");
$str =  fread($myfile,filesize("lorem.ypsum"));
$pattern = "/\[(\w+)\]/i";
preg_match_all($pattern, $str, $matches); // Outputs 1
print_r($matches[1]);
