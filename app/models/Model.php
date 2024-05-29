<?php
namespace app\models;
class Model{
    public function getObject($array){
        foreach ($this as $key => $value) {
            if(!in_array($key,$array)){
                unset($this->$key);
            }
        }
    }
}