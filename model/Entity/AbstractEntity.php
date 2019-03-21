<?php


namespace Entity;

abstract class AbstractEntity {
    
    protected $id;
    
    function setByArray(array $datas) {
        foreach($datas as $key => $value) {
            $setter = 'set'.ucfirst(strtolower($key)); //setFirstname setLastname
            if(method_exists($this, $setter)) {
                $this->$setter($value); // $this->setFirstname('Michi');
            }
        }
    }
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }


    
}
