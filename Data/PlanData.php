<?php
include_once './Data/Data.php';
include './Domain/Plan.php';

/**
 * Description of PlanData
 *
 * @author mm
 */
class PlanData extends Data{
   
    
    public function getNamePlan(){        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call getNamePlan");
        $row = mysqli_fetch_array($result);
        $result = ($row['name']); 
        return $result;        
    }
    
    public function getInformationPlan(){        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call getInformationPlan");
        $row = mysqli_fetch_array($result);
        $result = ($row['description']); 
        return $result;  
        
    }
    
    
}
