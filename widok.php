<?php

session_start();
if(!isset($_SESSION['log_in'])){
    header('Location:logowanie.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head >
	<meta charset="UTF-8">
	<title>logowanie</title>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    	<link href='http://fonts.googleapis.com/css?family=Cormorant+Upright&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Caveat+Brush&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="style2.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh68N9jp" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	</head>
	
    <body><div class ="conteiner" id="log">
        <div class="d-fluid justify-content-center">
        
    <canvas width=400 height="120px" class="m-auto">
    <div class="txtStyle">Wedding Trio</div>
</canvas>
        </div>
            <script>
     
     var ctx = document.querySelector("canvas").getContext("2d"),
    dashLen = 220, dashOffset = dashLen, speed = 5,
    txt = "Wedding Trio", x = 30, i = 0;

ctx.font = "50px Comic Sans MS, cursive, TSCu_Comic, sans-serif"; 
ctx.lineWidth =4; ctx.lineJoin = "round"; ctx.globalAlpha = 2/3;
ctx.strokeStyle = "white";
    ctx.fillStyle = "gray";

(function loop() {
  ctx.clearRect(x, 0, 60, 150);
  ctx.setLineDash([dashLen - dashOffset, dashOffset - speed]); 
  dashOffset -= speed;                                         
  ctx.strokeText(txt[i], x, 90);                               

  if (dashOffset > 0) requestAnimationFrame(loop);             
  else {
    ctx.fillText(txt[i], x, 90);                               
    dashOffset = dashLen;                                      
    x += ctx.measureText(txt[i++]).width + ctx.lineWidth * Math.random();
    ctx.setTransform(1, 0, 0, 1, 0, 3 * Math.random());        
    ctx.rotate(Math.random() * 0.005);                        
    if (i < txt.length) requestAnimationFrame(loop);

  }
})();
    
   
		</script>
        <div class=" d-flex justify-content-center align-items-center" id="part2">
            <div id="insertpanel" >
                <h2 class="text-center"><strong>Panel klienta</strong></h2>  
                <div class="row mt-1">
                    <div class="col-12 col-lg-6 col-md-6">
                <?php
       
        echo "(Zalogowano jako <strong>".$_SESSION['user']."</strong>".")";
                echo "<br>"."Dane klienta:"."<br>";
                echo "<h6> Imie: "."</h6>".$_SESSION['imie']."<br>";
                echo "<h6> Nazwisko: "."</h6>".$_SESSION['nazwisko']."<br>";
                echo "<h6> Email: "."</h6>".$_SESSION['email']."<br>";
                         echo "<h6> Nr. telefonu: "."</h6>".$_SESSION['numer_telefonu']."<br>";
                        ?>  
               </div> 
                    
                        
                    
                    <div class="col-12 col-lg-6 col-md-6">
                    <?php
                 echo "Informacje o Twojej oprawie:"."<br>";
                echo "<h6> Data slubu: "."</h6>".$_SESSION['data']."<br>";
                 echo "<h6> Miejsce oprawy: "."</h6>".$_SESSION['miejsce']."<br>";
                 echo "<h6> Ilosc piesni: "."</h6>".$_SESSION['ilosc_piesni']."<br>";
                        echo "<h6> Uwagi na temat repertuaru: "."</h6>".$_SESSION['uwagi']."<br>";
                 $koszt = $_SESSION['ilosc_piesni']*100;
                echo "<h6> Koszt oprawy wynosi: "."</h6>".$koszt." zł"."<br>";
               
     
        
                        ?><br>
                        <div  > <a href="Wyloguj.php" class="btn btn-secondary" id="logout" role="button">Wyloguj</a></div>
                    
                         
                    </div>
                    <br></div>
        </div>
                 
        </div>
      
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


	</body>
</html>
	