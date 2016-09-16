<?php

include_once './Data/Data.php';
include './Domain/Program.php';

/**
 * Description of ProgramData
 *
 * @author mm
 */
class ProgramData extends Data {
    
    public function getInformationProgramI(){        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call getInformationProgramI");        
        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentData = new Program($row['id_program'], $row['name'], $row['description'], $row['stage']);
            array_push($array, $currentData);
        }        
        return $array; 
        
    }
    public function getInformationProgramII(){        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $result = mysqli_query($conn, "call getInformationProgramII");        
        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentData = new Program($row['id_program'], $row['name'], $row['description'], $row['stage']);
            array_push($array, $currentData);
        }        
        return $array; 
        
    }
    
}
