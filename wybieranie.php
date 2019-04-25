<?php

$polaczenie = mysqli_connect("localhost","","","");
mysqli_set_charset($polaczenie,"utf8");
if($polaczenie==NULL){


echo "Blad polaczenia z baza";
}
    
else{
    
    

$q2 = mysqli_query($polaczenie,"SELECT * FROM komentarze");
$ile = mysqli_num_rows($q2);
if($ile!=NULL){
    
    
    while ($row = mysqli_fetch_assoc($q2)) {
        echo "<div class='insertkom'>"."<strong>".$row["nazwa"]."</strong>"." (Email: ".$row["email"].")"."<hr/>".$row["komentarz"]."</div>";
      
}
    
    
}
else  echo "Błąd ładowania bazy danych";
    
}
mysqli_close($polaczenie);
?>