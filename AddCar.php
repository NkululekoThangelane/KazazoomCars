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
    <body >
        <h1> Add A Car to List </h1>
        <h4> Fill in the Form </h4>
      
     
        <form action="Insert.php" method="Post">
        Engine Number       : <input type="text" name="EngineNumber" ><br/>
      
        Model               : <input type="text" name="Model"> <br/>
        Capacity            : <input type="text" name="Capacity"> <br/>
        TopSpeed           : <input type="text" name="TopSpeed" ><br/>
        
        Year                : <input type="text" name="Year" ><br/>
        <?php 
        include('ColourList.php');
        include ('ManufacturerList.php');
        $Cl = new ColourList; 
         $Cl->GetColours();
         $Ma = new ManufacturerList;
         
         $Ma->GetManufacturers();
         
            echo $_POST['Manufacturer'];
               echo $_POST['Colour'];
         
         
         
        
        
        
       
        ?>
        <br>
        
        <input type="submit">
        </form>
           
       

    </body>
</html>
