

<?php
include 'Connection-Script.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Actorpage</title>

<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />

</head>

<body>
<div id="mainWrapper">
<?php include 'Template-Header.php';
 ?>

<br>


      <div align="center" id="PageContent1">
<style>
#image {
float:left;
margin-left:350px;
margin-top:0px
}


#name{
margin-top:80px;
margin-right:550px;

}

#count{
padding-top:30px;
margin-left:700px;
text-align:left;
position:absolute;
}

#acted{

margin-top:80px;
margin-left:700px;
text-align:left;
position:absolute;

}

#directed{
margin-top:220px;
margin-left:700px;
text-align:left;
position:absolute;
}

span{
text-decoration:underline;
color:blue;
}
</style>

<div id="image">	 
<?php
$id = 43203;
$sql = "
SELECT img
FROM movie JOIN actor ON movie.director=actor.id
WHERE actor.id=$id ";

$result = $mysqli->query($sql)
or die($mysqli->error."<pre>sql</pre>");
$row = $result->fetch_assoc();
echo "<img src='$row[img]'/>" ;

?>
</div>

<div id="name">	 
<?php
$id = 43203;
$sql = "
SELECT name
FROM movie JOIN actor ON movie.director=actor.id
WHERE actor.id=$id ";

$result = $mysqli->query($sql)
or die($mysqli->error."<pre>sql</pre>");
$row = $result->fetch_assoc();
echo "<h1>$row[name] <br>\n</h1>" ;

?>
</div>
	  
<div id="count">	  
<?php
$id = 43203;
$sql = "
SELECT count(title) as movies
FROM movie JOIN actor ON movie.director=actor.id
WHERE actor.id=$id 
";
echo "Number of movies :";
$result = $mysqli->query($sql)
  or die($mysqli->error);
while ($row = $result->fetch_assoc()){
  echo $row[movies]. "<br>\n";
}
?>
</div>
<div id="acted">	 
<?php
$id = 43203;
$sql = "
SELECT title
FROM casting JOIN actor ON casting.actorid=actor.id
JOIN movie ON casting.movieid=movie.id
WHERE actor.id=$id order by rel desc limit 3";

$result = $mysqli->query($sql)
or die($mysqli->error."<pre>sql</pre>");
echo "List of movies where the actor appears : <br><br>";
while ($row = $result->fetch_assoc()){
echo "<span>$row[title]. <br>\n</span>" ;
}
?>
</div>
<div id="directed">	 
<?php
$id = 43203;
$sql = "
SELECT title
FROM movie JOIN actor ON movie.director=actor.id
WHERE actor.id=$id limit 1 ";

$result = $mysqli->query($sql)
or die($mysqli->error."<pre>sql</pre>");
echo "Movies directed : <br><br>";
while ($row = $result->fetch_assoc()){
echo "<span>$row[title]. <br>\n </span>" ;
}
?>
</div>



  </div>


</body>
</html>