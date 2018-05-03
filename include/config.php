<?php
//error_reporting(E_ALL);
if($_SERVER['SERVER_NAME']=='localhost')
{	
    //$connect = mysqli_connect('localhost', 'root', '', 'ef_new_testing');   
	$baseUrl = "http://localhost/et/";
  
}else
{
    $connect = mysqli_connect('10.10.11.21', 'ef_user', '$ef-New1!$', 'ef_new_testing');
    $baseUrl = "https://www.electrical-training.com/";
}
include('func.php');

?>