<html>
<head>
    <h1> moviePanel</h1>
</head>
<body>
    

<?php
function moviePanel( $mid ) {   
    global $moviesObject;  
    echo <<<"BLACKDIAMOND"
<div id='panel_$mid'>  
    <img src='../../media/poster_$mid.png .../>  
    <h2>$moviesObject[$mid]['title']       
      $moviesObject[$mid]['rating']</h2>  
    <div class='screenings'>
BLACKDIAMOND;  
  foreach ( $moviesObject[$mid]['screenings'] as $day => $hour )    
     echo "    <div>$day - $hour</div>\n";  
    echo "  </div>";  
    echo "</div>";}

?>
</body>
</html>