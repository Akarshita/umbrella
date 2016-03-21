<?php
include_once('dbconnect.php');
include_once('welcomeprof.php');
echo"-----Welcome Teacher-----\n";

echo"1)View course schedule\n";
echo"Enter your option -  ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('viewcourseprof.php');
        break;
        
}    




?>
