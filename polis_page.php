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
        <title>Просмотреть график</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav>
        <div id="grafik">
            
               <a> <h1 style="text-align:center;
                 font-size:100px"
                 >
                     
                   </h1>
        </a>
            <div id="welcome">	

<h2>Велком, <span><?php echo $_SESSION['session_username'];?>  </span></h2>
	<p>камингаут<a href="logout.php">  здесь</a><p>
</div>

            <h3 style="text-align:left;
                margin-left: 32px;
      margin-top: 600px;
                  font-size:50px"> <a href="index.php"> Назад</a>
               
            </h3>
            
            </div>

    </nav>
        </body>


