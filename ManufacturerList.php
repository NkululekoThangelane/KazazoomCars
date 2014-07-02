<?php
include 'Manufacturer.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManufacturerList
 *
 * @author Nkululeko
 */
class ManufacturerList {
    //put your code here
    var $Manufacturers;
    public $counter=1;
    
    function GetManufacturers(){
        
          $sql = "SELECT Name FROM interview_manufacturer";
        $result = mysql_query($sql);
           
            echo " Manufacturer : <select name='Manufacturer'>";
            while ($row = mysql_fetch_array($result)) {
                
                $this->Manufacturers = new Manufacturer('Manufacturer_mnf','Name');
                echo "<option value='" . $row['Manufacturer_mnf'] ."'>" . $row['Name'] ."</option>";
            }
            echo "</select>";
            
         
    }
}

?>
