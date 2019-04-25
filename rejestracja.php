 
 <?php
     $polaczenie = mysqli_connect("localhost", "", "", "");
mysqli_set_charset($polaczenie,"utf8");
if (mysqli_connect_errno()) {
 printf("Błąd połączenia: %s\n", mysqli_connect_error());
 exit();
}

else{

           $i = $_POST['imie'];
    $n = $_POST['nazwisko'];
    $e = $_POST['email'];
    $t = $_POST['telefon'];
    $d = $_POST['data'];
    $m = $_POST['miejsce'];
    $ile = $_POST['ilosc_piesni'];
    $uw = $_POST['uwagi'];
    $l = htmlspecialchars($_POST['login']);
   $h = htmlspecialchars(md5($_POST['haslo']));
    $newdate = date('Y-m-d', strtotime($_POST['data']));
   
     $q1 = mysqli_query($polaczenie,"SELECT * FROM terminy2 WHERE login = '$l'");
     
      if(mysqli_num_rows($q1)>0){
           echo "<script type='text/javascript'>alert('Ten login jest już zajęty!');</script>"; 
            }
    
else{
   $q3=mysqli_query($polaczenie,"SELECT * FROM terminy2 WHERE data ='$newdate'");
          if(mysqli_num_rows($q3)){
             echo "<script type='text/javascript'>alert('Ta data jest już zajeta!');</script>"; 
             
              
          }else{
     $q2 = mysqli_query($polaczenie,"INSERT INTO terminy2 VALUES('','$i','$n','$e','$t','$d','$m','$ile','$uw','$l','$h')");
    if($q2){

       echo "<solid style='color:green'>Dziękujemy za złożenie zamówienia</solid>";
    }
    else "<solid style='color:red'>Błąd dodawania zamówienia, popraw dane formularza</solid";
}
}
      
}
mysqli_close($polaczenie);
    
     
          
     ?>
     
