
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>

<link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />

</head>

<body>

<div align="center" id="mainWrapper">

<?php
$actual_link = 'http://'.$_SERVER['sqlzoo.net'].$_SERVER['PHP_SELF'];
include 'Template-Header.php';

?>

   <div id="PageContent" align="center">
     
  <div id="movie_of_the_week"> Movie of the week: <br></br>
<img src="Style/images/CasablancaPoster-Gold.jpg"  alt="casablanca">
</div>
<div id="synopsis">
<h1>Casablanca</h1> 
<p>It is December 2, 1941. American expatriate Rick Blaine is the proprietor of an upscale nightclub and gambling den in Casablanca. "Rick's Café Américain" attracts a varied clientele: Vichy French, Italian, and German officials; refugees desperate to reach the still neutral United States; and those who prey on them. Although Rick professes to be neutral in all matters, it is later revealed he ran guns to Ethiopia during its war with Italy and fought on the Loalist side against the fascist Nationalists in the Spanish Civil War.<p>
</div>

<div id="images" >
<div id="Popular_movies"> 
	<p>Last Added Movies:</p>
 	 <img src="Style/images/220px-Green_mile.jpg" width="120" height="180" alt="green_mile">
    <img src="Style/images/220px-Vitaebella.jpg" width="120" height="180" alt="life_is_beautiful">
    <img src="Style/images/A_Beautiful_Mind_Poster.jpg" width="120" height="180" alt="a_beautiful_mind">
      </div>
 <div id="Last_added_movies"> 
 	<p >Popular movies:</p>
 <img src="Style/images/American_history_x_poster.jpg" width="120" height="180" alt="green_mile">
    <img src="Style/images/220px-Fight_Club_poster.jpg" width="120" height="180" alt="life_is_beautiful">
    <img src="Style/images/220px-ShawshankRedemptionMoviePoster.jpg" width="120" height="180" alt="a_beautiful_mind">
 
 
 </div>   
     </div> 
    
 </div>
 </div>
</body>
</html>



       
     