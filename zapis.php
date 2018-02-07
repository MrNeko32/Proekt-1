<!DOCTYPE html> 
<html>
<head>
    <title>Запись на прием</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js.js"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
    <body>
        <nav>  
<div id="zapis">
              <a> <h1 style="text-align:center;
                  font-size:70px" >Поиск полиса в базе</h1> </a>
              
<div id="id-polis">
                  
<b>Введите номер полиса</b>
                     <form action="" id="loginform" method="post" name="zapis">
<input id="username" name="username" style="font-size:50px;  width:1200px; height: 50px;" type=text  placeholder="123456789101112" autofocus>
<input type="submit" value=">" name="login" style="font-size:50px;" >
                                                                                     
                     </form>
</div>
  
    <div class="vk">
    <div class="row">
        <div class="key"><span>1</span></div>
        <div class="key"><span>2</span></div>
        <div class="key"><span>3</span></div>
        <div class="key"><span>4</span></div>
        <div class="key"><span>5</span></div>
        <div class="key"><span>6</span></div>
        <div class="key"><span>7</span></div>
        <div class="key"><span>8</span></div>
        <div class="key"><span>9</span></div>
        <div class="key"><span>0</span></div>
        <div class="key backspace"><span>Очистить</span></div>
    </div>
        </div>
            
            
                  
  <h2 style="text-align:left;
                margin-left: 32px;
      margin-top: 360px;
                  font-size:50px"> <a href="index.php"> Назад</a>
               
            </h2>
  </div>
    </nav>

      </body>
</html>


<?php
 session_start();

?>

<?php 
include_once('includes/connection.php');

?>

 <?php

if(isset($_SESSION["session_username"])){
header("Location: /polis_page.php");
} else {}

if(isset($_POST["login"])){

$username=htmlspecialchars($_POST['username']);

if(!empty($username)) {

$query =mysqli_query($con, "SELECT * FROM xdd WHERE polis = '".$username."' ");
$numrows=mysqli_num_rows($query);

if($numrows!=0){
while($row=mysqli_fetch_assoc($query)){

$dbusername=$row['polis'];
$dbFI=$row['FI'];

}
if($username == $dbusername) {

$_SESSION['session_username']=$dbFI;	 
header("Location: polis_page.php");
exit();

}
} else {
echo "Predlagayu poyti nahuy!";
}
} else {
$message = "Pls zapolni vse bratik :*!";
}
}
?>