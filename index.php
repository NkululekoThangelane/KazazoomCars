<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body  >
        <h1> Kazazoom Cars </h1>
        <h2> List of All Cars </h2>
        <h3> <?php
        include ('CarList.php');
        
        $CarList = new CarList;
        $CarList->GetCarList();
        
         
    
  
    
  
            ?> </h3>
        
        <a  href="AddCar.php" > Add A Car </a>
       
    </body>
</html>
