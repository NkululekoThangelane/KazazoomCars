<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Car
 *
 * @author Nkululeko
 */
class Car {
    //put your code here
  public $CarID;  
  public  $EngineNumber;
  public $Manufacturer;
  public  $Model;
  public  $Capacity;
  public  $TopSpeed;
  public  $Colour;
  public  $Year;
  public $Checksum;
  
  function Car($engineno,$manufacuturer,$model,$capacity,$topspeed,$colour,$year){
  $this->EngineNumber= $engineno;
  $this->Manufacturer= $manufacuturer;
   $this->Model = $model;
   $this->Capacity =$capacity;
   $this->TopSpeed =$topspeed;
   $this->Colour= $colour;
   $this->Year= $year;
   
 
  $this->Checksum =0;

  }
  

  
  public function CheckSum($s)
        {
      $this->Checksum =0;
            $result=0;
            for($i=0; $i<strlen($s); $i++){ 
                 $result += (int)$s[$i];
           $this->Checksum +=(int)$s[$i];
            }
            return (int)$result;
        }
        
        
        public function persit_Car_toDB(){
             //do something
                    $con=mysqli_connect("unxdev02.kazazoom.com","interview","interview","interviewdb_dev");
            // Check connection
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            
            }
            
               $EngineNumber = mysqli_real_escape_string($con, $_POST['EngineNumber']);
            $Manufacturer = mysqli_real_escape_string($con, $_POST['Manufacturer']);
            $Model = mysqli_real_escape_string($con, $_POST['Model']);
            $Capacity = mysqli_real_escape_string($con, $_POST['Capacity']);
            $TopSpeed = mysqli_real_escape_string($con, $_POST['TopSpeed']);
            $Colour = mysqli_real_escape_string($con, $_POST['Colour']);
            $Year = mysqli_real_escape_string($con, $_POST['Year']);
               $Car = new Car($EngineNumber,$Manufacturer,$Model ,$Capacity,$TopSpeed ,$Colour,$Year);
              $checksum =$Car->CheckSum($EngineNumber);
            
            
            $sql="INSERT INTO interview_car (EngineNumber_icr,ManufacturerOID_mnf,Model_icr,EngineCapacity_icr,TopSpeed_icr,Colour_icr,YearManufactured_icr,Checksum) VALUES ('$EngineNumber', '$Manufacturer','$Model','$Capacity','$TopSpeed','$Colour','$Year','$checksum')";
            if (!mysqli_query($con,$sql)) {
                die('Error: ' . mysqli_error($con));
              }
              echo "1 record added";

              mysqli_close($con);
            
        }

  




    
    
}

?>
