<?php
class Super{
    private $data;

    public function getData() {
        return $this->data;
    }

    public function __construt($data){
        $this->data = $data;
    }
}

class Sub extends Super {
    private $param;

    public function getParam(){
        return $this->param;
    }

    public function __construct($data,$param){
        $this->data = $data;
        $this->param = $param;
    }
}

$obj = new Sub("Red","Blue");

print "Data:".$obj->getData()."<br>";
print "Param:".$obj->getParam();