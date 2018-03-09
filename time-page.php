<?php
 
session_start();


if(!isset($_SESSION["session_username"])){
header("location:login.php");
}
else{
?>

<?php
}
?>
<!DOCTYPE html>
    <head>
        <title>123</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        
        
        <style>
            body {
    color: white;
}
            </style>
        
    </head>
    
    <body>
        <nav>
        <div id="grafik">
            
     
            <div id="welcome">	

                <h2>Вы   <span><?php echo $_SESSION['session_username'];?>  </span></h2>
	<p>Выход<a href="logout.php" style="color:green; font-size: 32px;">&#160;&#160;здесь</a><p>
</div>
<div id="kalendar">
                   <form id="vibor_dati" method="post" name="kalendar">
<h4 style="-webkit-margin-before: 0em;
    -webkit-margin-after: 0em;">Выберите время </h4>   
       
    <input type="time" name="time" value="<?=gmdate("H:i", time() + (3600*3));?>"  min= "08:00" max="20:00"style="width: 500px ;">
       
   <input type="submit" value="Выбрать" name="button_time">
  </form>
        </div>
         
            <h3 style="text-align:left;
                margin-left: 32px;
      margin-top: 600px;
                  font-size:50px"> <a href="logout.php"> Назад</a>
               
            </h3>
             
            </div>

    </nav>
        </body>
 <?php

include_once('includes/connection.php');







 if(isset($_POST["button_time"]))
 {
    $time=htmlspecialchars($_POST['time']);
    
 }
if(!empty($time)) {
    //$sess_uname = $_SESSION['session_username'];
    $sqlraw = "UPDATE `xdd` SET `Time`='".$time."' WHERE `FI`='".$_SESSION['session_username']."'";
    mysqli_query($con, $sqlraw);
    header("location:/Poliklinika/logout.php");
}


         
 ?>   
       
<?php

