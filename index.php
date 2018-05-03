<?php 
// Execute the python script 
$result = shell_exec('python python.py ');
echo $result;