<?php
include 'Connection-Script.php';
$companyTxt = $_GET['term'];
if (isset($companyTxt)){
    $dbArray = array();
    $companyTxt=mysql_real_escape_string($companyTxt);
    $query=mysql_query("SELECT title FROM movie WHERE title like '%$companyTxt%'");    
    while($rows = mysql_fetch_array($query))
        {
        $dbArray[] =$rows['title'];
        }
    echo json_encode($dbArray);
}
?>