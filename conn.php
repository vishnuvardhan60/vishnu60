<?php
session_start();
 
// configuration
$servername="localhost";
$name="root";
$word="vishnu1234";
$dbname ="firstproject";

//database connection
try {
       	$conn = new PDO("mysql:host=$servername;dbname=firstproject", $name, $word);
	       // set the PDO error mode to exception
	         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	              
	                 }
	                catch(PDOException $e){
	                     
	     
				 echo "Connection failed: " . $e->getMessage();                        
}
?>
