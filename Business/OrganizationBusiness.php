<?php

include '../Data/OrganizationData.php';

/**
 * Description of OrganizationBusiness
 *
 * @author gollo
 */
class OrganizationBusiness {
    
    /* atributos */
    private $organizationData;
    
    public function OrganizationBusiness(){
        $this->organizationData = new OrganizationData();
    }
    
}
