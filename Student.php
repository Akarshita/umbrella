<?php
include_once('dbconnect.php');
include_once('welcomestud.php');

echo"-----Welcome Student.Choose from below-----";
echo"1)View course schedule\n2)Add courses to personal schedule\n";
echo"Enter your option -  ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('viewcourse.php');
        break;
        case "2":
        include ('Addcourse_stud.php'); 
	break;
        
	
	case "exit":
	break;
        default:
        echo "Wrong option";
        break; 
}   




?>
