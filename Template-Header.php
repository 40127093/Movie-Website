 <!doctype html>
<html>
<head>
<meta charset="utf-8">

<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.11.0/jquery-ui.min.js"></script>


<script>
$(function() {
    $("#textfield").autocomplete({
        source: "getautocomplete.php",
        minLength: 1
    });       
});
</script>


<link rel="stylesheet" href="Style/style.css" type="text/css" media="screen" />

<script type="text/javascript" src="./Dynamics/jquery-1.11.2.js"></script>

<script type="text/javascript">
$(function(){
    // this will get the full URL at the address bar
    var url = window.location.href; 
	

    // passes on every "a" tag 
    $("#menu-bar a").each(function() {
            // checks if its the same on the address bar
        if(url == (this.href)) { 
			$("#menu-bar a.active").removeClass("active");
            $(this).closest("a").addClass("active");
        }
    });
});

</script>	
</head>

<body>

  <div id="MainHeader">
    <table width="685" border="0">
    </table>
    <div align="center" id="mainWrapper2">
      <div id="MainHeader2">
        <table width="891" border="0">
          <tr>
            <td width="360"><img src="Style/images/basiclogo.png" width="224" height="102" alt="logo"></td>
            <td width="515">
            <form name="form1" method="post" action="./search.php">
            <input type="text" name="q" id="textfield"/>
      	   <input type="submit" value="Search" id="search">
           </form>
   		    </td>
          </tr>
        </table>
        
      </div>
      <div id="menu-bar" align="center">
      
   <a class="menu_bar_item active" href="index.php">Homepage</a>
   <a class="menu_bar_item" href="movie.php">Movies</a>
   <a class="menu_bar_item" href="actor.php">Actors</a>
 



   
  
</div>

</body>
