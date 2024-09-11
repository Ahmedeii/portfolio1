<?php
$bool =" 5.47";
 var_dump(filter_var($bool,FILTER_VALIDATE_FLOAT,["flags" => FILTER_NULL_ON_FAILURE
 ,"options" => ["min" => "1" , "max" => "10"]]));
