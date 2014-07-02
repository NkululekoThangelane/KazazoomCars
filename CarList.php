<?php
include 'Car.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CarList
 *
 * @author Nkululeko
 */
class CarList {
    //put your code here
   
    
    
     var $Cars = array();
     public $counter =1;
     
  public function GetCarList(){
       
    
    $dbhost = 'unxdev02.kazazoom.com:3306';
    $dbuser = 'interview';
    $dbpass = 'interview';
    $dbname = 'interview_car';
   


        $con=mysqli_connect("unxdev02.kazazoom.com","interview","interview","interviewdb_dev");
        // Check connection
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM interview_car");

        echo "<table border='1'>
        <tr>
        <th>Car ID </th>
        <th>Engine Number</th>
        <th>Manufacturer</th>
        <th>Model</th>
        <th>Capacity</th>
        <th>Top Speed</th>
        <th>Colour</th>
        <th>Year</th>
        <th>CheckSum</th>
        </tr>";

        while($row = mysqli_fetch_array($result)) {
            
              
          echo "<tr>";
          echo "<td>" . $row['CarOID_icr'] . "</td>";
       
          echo "<td>" . $row['EngineNumber_icr'] . "</td>";
        
          echo "<td>" . $row['ManufacturerOID_mnf'] . "</td>";
      
          echo "<td>" . $row['Model_icr'] . "</td>";
       
          echo "<td>" . $row['EngineCapacity_icr'] . "</td>";
        
          echo "<td>" . $row['TopSpeed_icr'] . "</td>";
        
          echo "<td>" . $row['Colour_icr'] . "</td>";
      
          echo "<td>" . $row['YearManufactured_icr'] . "</td>";
        
       
        
          $Car = new Car($row['EngineNumber_icr'],$row['ManufacturerOID_mnf'],$row['Model_icr'] ,$row['EngineCapacity_icr'],$row['TopSpeed_icr'] ,$row['Colour_icr'],$row['YearManufactured_icr']);
          $enigneno = $row['EngineNumber_icr'];
          echo "<td>" .$Car->CheckSum($enigneno) . "</td>";
            $this->Cars[$this->counter] = $Car;
          echo "</tr>";
          
            }

            echo "</table>";
            mysqli_close($con);
   }

   
    
    
}

?>
