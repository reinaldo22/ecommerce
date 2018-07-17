<?php

namespace Hcode;
//Classe cria getters e setters automaticos sem  precisar passar na classe users
class Model{
    private $values = [];

    public function __call($name, $args){

        //Para saber se retorna um set ou um get
        $method = substr($name,0,3);
        $fieldName = substr($name,3,strlen($name));


        switch ($method){
            case "get":
                return $this->values[$fieldName];
                break;

            case "set":
                $this->values[$fieldName] = $args[0];
                break;
        }

    }

    /**
     * @return array
     */
    public function getValues(): array
    {
        return $this->values;
    }
    
    
    public function setData($data = array()){
       foreach ($data as $key => $value){
            $this->{"set".$key}($value);
        }

    }

}