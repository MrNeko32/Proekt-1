<?php 
include_once('includes/connection.php');

?>


<!DOCTYPE html>

<html>
    <head>
 <title>График врачей</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<div id="grafik">
    
     <table style=" margin-left:800px;" border="10">
         
         <caption>График работы врачей</caption>
<?php
$result = mysqli_query($con, "SELECT * FROM `grafik`");
$numrows=mysqli_num_rows($result);
if($numrows!=0){
while($row=mysqli_fetch_assoc($result)){
       
    echo $row['id'];
  
   
}
}
 ?>

<tr>
    <th>Id</th> 
    <th colspan="2">Время</th>
    </tr>
    <tr>
    <td><?=$row['id']?></td>
    <td><?=$row['Vremya']?></td>
  </tr>
<?phpendwhile; ?>
     </table>
     
     </div>
    </body>
</html> 
