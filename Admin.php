<?php
include_once('dbconnect.php');
include_once('Welcome.php');
echo"-----Welcome Admin.Choose from below-----\n";
echo"1)Add courses and professors to catalog\n2)Delete courses from catalog\n";
echo"Enter your option - \n ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('Addcourses.php');
        break;
        
        case "2":
        include ('Deletecourse.php');
	
	case "exit":
	break;
        default:
        echo "Wrong option";
        break; 
}   




?>
