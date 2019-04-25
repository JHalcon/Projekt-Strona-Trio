<?php




$polaczenie = mysqli_connect("localhost","","","");
mysqli_set_charset($polaczenie,"utf8");
if($polaczenie==NULL){


echo "Blad polaczenia z baza";
}
    
else{
    if(isset($_POST['imie'])&&isset($_POST['email'])&&isset($_POST['komentarz'])){
    $result='';
    
$im= $_POST["imie"];
$em = $_POST["email"];
    
        $kom = $_POST["komentarz"];
       
     $q = mysqli_query($polaczenie,"INSERT INTO komentarze VALUES('','$im','$em','$kom')");
    if($q){
        
   

echo "<div class='insertkom'>"."<strong>".$im."</strong>"." (Email: ".$em.")"."<hr/>".$kom."</div>";
        
    }
    else 
            echo "error";
}
}
mysqli_close($polaczenie);

?>