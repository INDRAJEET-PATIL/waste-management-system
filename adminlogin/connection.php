<?php 
$db = new mysqli('localhost','root','admin123','wms');
if(!$db) {
    die('Please check Your database connection'.mysqli_error($db));
}

?>