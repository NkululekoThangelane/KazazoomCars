<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body  >
        <h1> Record Added! </h1>
        
        <h2><a href="index.php"> Go to Home <a > </h2><br>
         <h2><a href="AddCar.php"> Add Another Car <a > </h2><br>           
                
        <?php
        include 'Car.php';
        $car =new Car($_POST['EngineNumber'], $_POST['Manufacturer'],$_POST['Model'],$_POST['Capacity'], $_POST['TopSpeed'], $_POST['Colour'],$_POST['Year']);
        $car->Checksum= $car->CheckSum($_POST['EngineNumber']);
        $car->persit_Car_toDB();
        
          
     
        ?>
    </body>
</html>
