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
<div id="vrachi">
                 <form id="vibor_vracha" method="post" name="spisok_vrachey">
<h4 style="-webkit-margin-before: 0em;
    -webkit-margin-after: 0em;">Выберите Врача </h4>   
    <select name="selphp"  style="width: 500px;" >
 
<option value="Кардиолог">Кардиолог</option>
 
<option value="Терапевт">Терапевт</option>
 
<option value="Офтальмолог">Офтальмолог</option>
 
<option value="Окулист">Окулист</option>
 
<option value="Невролог">Невролог</option>

<option value="Гинеколог">Невролог</option>
 
</select>
      <input type="submit" value="Выбрать"  name="vrach_btn">
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







 if(isset($_POST["vrach_btn"]))
 {
    $selphp=htmlspecialchars($_POST['selphp']);
    
 }
if(!empty($selphp)) {
    //$sess_uname = $_SESSION['session_username'];
    $sqlraw = "UPDATE `xdd` SET `Vrach`='".$selphp."' WHERE `FI`='".$_SESSION['session_username']."'";
    mysqli_query($con, $sqlraw);
    header("location:/Poliklinika/logout.php");
}
?>  


