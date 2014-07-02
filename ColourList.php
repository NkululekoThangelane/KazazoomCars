<?php
 include ('Colour.php');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ColourList
 *
 * @author Nkululeko
 */
 class ColourList  {
    //put your code here
   
    var $Colours;
    
    function ColourList(){
      
        
    }
    
    
    public $counter=1;
    
    public function GetColours(){
         mysql_connect('unxdev02.kazazoom.com', 'interview', 'interview');
           mysql_select_db('interviewdb_dev');
           
         $sql = "SELECT Name FROM interview_colour";
        $result = mysql_query($sql);

            echo " Colour : <select name='Colour'>";
            while ($row = mysql_fetch_array($result)) {
                $this->Colours[counter] = new Colour('Colour_icr','Name');
                echo "<option value='" . $row['Colour_icr'] ."'>" . $row['Name'] ."</option>";
                $counter++;
            }
            echo "</select>";
          
             
        
     }
   
    
}




?>
