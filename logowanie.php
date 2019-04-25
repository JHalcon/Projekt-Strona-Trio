<!doctype html>
<?php

session_start();
if(isset($_SESSION['log_in'])&&($_SESSION['log_in']==true)){
    header('Location:widok.php');
    exit();
}
?>
<html lang="pl">
  <head>
      <title>Panel logowania WT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="style2.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script>
      $(document).ready(function(){
          
          $('a#dom').click(function(){
              console.log(1);
              var strona = $(this).attr('href');
              $('#all').load(strona+'.php');
              return false;
              
              
              
          })
          
          
      })
			
      
      </script>
    </head>
    <body><div class ="conteiner" id="log">
        <div id="ikona">
        
         <a href="index" class="btn btn-link" id="dom">
      <i class="fas fa-home" id="domek"></i>
    </a>
        </div>
        <div class=" d-flex justify-content-center align-items-center" id="part2">
            <div id="flog" >
        <form action="skrypt2.php" id="zaloguj"  method="post" >
	Login: 
	<input type="text" name="login" id="logs" placeholder="Login"/><br><br>
	
Hasło:
	<input type="password" name="haslo" id="has" placeholder="Hasło"/><br><br>
            <input id="logowanie" type="submit"  class="btn btn-secondary m-auto" value="Zaloguj" >
	<br>

	</form> 
  
        </div>
                        
        </div>
        
        <?php


	if(isset($_SESSION['blad']))	{
    echo "<script type='text/javascript'>alert('Błędny login lub hasło');</script>";
};


?>	
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>