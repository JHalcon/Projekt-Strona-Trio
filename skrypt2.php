<?php

session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: logowanie.php');
		exit();
	}

$polaczenie = mysqli_connect("localhost","","","");
mysqli_set_charset($polaczenie,"utf8");
if($polaczenie==NULL){

echo "Blad polaczenia z baza";
}
else{

   $l = htmlspecialchars($_POST['login']);
     $h = htmlspecialchars(md5($_POST['haslo']));
    
    
   $q = mysqli_query($polaczenie,"SELECT * FROM terminy2 WHERE login = '$l' AND haslo = '$h'");
    
    if(mysqli_num_rows($q)==1){
        echo"zalogowany";
        $_SESSION['log_in'] = true;
         $zapytanie = mysqli_fetch_assoc($q);
        $_SESSION['id'] = $zapytanie['id'];
    $_SESSION['user'] = $zapytanie['login'];
         $_SESSION['haslo'] = $zapytanie['haslo'];
         $_SESSION['email'] = $zapytanie['email'];
        $_SESSION['imie'] = $zapytanie['imie'];
         $_SESSION['nazwisko'] = $zapytanie['nazwisko'];
         $_SESSION['data'] = $zapytanie['data'];
         $_SESSION['ilosc_piesni'] = $zapytanie['ilosc_piesni'];
        $_SESSION['miejsce'] = $zapytanie['miejsce'];
          $_SESSION['numer_telefonu'] = $zapytanie['numer_telefonu'];
         $_SESSION['uwagi'] = $zapytanie['uwagi'];
    
        unset($_SESSION['blad']);
        mysqli_free_result($q);
        header('Location: widok.php');
        
    }
    else {
            $_SESSION['blad'] = 'Nieprawidlowy login lub haslo!';
        header('Location: logowanie.php');
        
       
    }
}
mysqli_close($polaczenie);
?>


   