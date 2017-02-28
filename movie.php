

<?php
include 'Connection-Script.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Moviepage</title>

<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />

</head>

<body>
<div id="mainWrapper">
<?php include 'Template-Header.php'; ?>

<br>


      <div align="center" id="PageContent1">
<style>
#pic {
float:left;
margin-left:350px;
margin-top:0px
}

h1{
margin-top:80px;
margin-right:400px;

}
#rel{
margin-top:40px;
margin-left:650px;
text-align:left;
position:absolute;
}

#dir{
margin-top:65px;
margin-left:650px;
text-align:left;
position:absolute;
}


#actors{
margin-top:90px;
margin-left:650px;
text-align:left;
position:absolute;
}

#syn{
margin-top:130px;
margin-left:650px;
text-align:left;
position:absolute;
width:600px;
}

span{
text-decoration:underline;
color:blue;
}

</style>	  
<div>	  
<?php
	 
$id = 41483;
$sql = "
SELECT DISTINCT title,img,rel,director,name
FROM movie JOIN actor ON movie.director=actor.id
JOIN casting ON casting.actorid=actor.id
WHERE movie.id = $id";
$result = $mysqli->query($sql)
or die($mysqli->error."<pre>sql</pre>");
$row = $result->fetch_assoc();
echo "<div id='pic'><img src='$row[img]'/></div><h1>$row[title]</h1>";
echo "<div id='rel'>Release Date : $row[rel]</div>";
echo "<div id='dir'>Director :<span>$row[name]</span></div>";


?>
</div>

<div id="actors">	 
<?php
$id = 41483;
$sql = "
SELECT name
FROM movie JOIN casting ON movie.id=casting.movieid
JOIN actor ON casting.actorid=actor.id
WHERE movie.id=$id ORDER BY actor.id limit 3";

$result = $mysqli->query($sql)
or die($mysqli->error."<pre>sql</pre>");
echo "Actor(s) :";
while ($row = $result->fetch_assoc()){
echo "<span>$row[name].\n </span>" ;
}
?>
</div>

<div>	  
<?php
	 
$id = 41483;
$sql = "
SELECT synopsis 
FROM movie JOIN actor ON movie.director=actor.id
JOIN casting ON casting.actorid=actor.id
WHERE movie.id = $id";
$result = $mysqli->query($sql)
or die($mysqli->error."<pre>sql</pre>");
$row = $result->fetch_assoc();
echo "<div id='syn'><p><em>Synopsis:</em><br>$row[synopsis]</p></div>";

?>
</div>

  
</div>

</body>
</html>