<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Searchpage</title>

<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /></head>

<body>

<div align="center" id="mainWrapper">
<?php
include 'Template-Header.php';

?>
<?php


$mysql_hostname = "sqlzoo.net";
$mysql_user = "scott";
$mysql_password = "tiger";
$mysql_database = "movie";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");


if($_SERVER["REQUEST_METHOD"] == "POST")
{
$q=$_POST['q'];
$q=mysql_escape_string($q);
$q_fix=str_replace(" ","%",$q); // Space replacing with %
$sql=mysql_query("SELECT img,title,synopsis,rel,year(rel) as yor  FROM movie WHERE title LIKE N'%$q_fix%' 
					 ");

}
?>


   <div id="PageContent" align="center">
<style>


#image{
display:inline-block;
padding-top:20px;

}
#image img{
padding-top:30px;
float:left;
width:120px;
height:160px;
}
#image p{
width:400px;
text-align:left;
padding-left:180px;
}


</style> 
<?php 

while($row=mysql_fetch_array($sql))
{
echo "<div id='image'><img src='$row[img]'/><h2>$row[title]($row[yor])</h2><br>
<p>$row[synopsis]</p>";


}
?>
	 

     </div> 
    
   
  </div>
</div>

</body>
</html>
