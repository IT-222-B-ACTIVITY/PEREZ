<?php 

class inccm {

    public $num1;
    public $cal;

    public $result;

    public function __construct($num1Inserted,$calInserted){
        $this->num1 = $num1Inserted;

        $this->cal = $calInserted;
        $this->result = null;
    }

    public function convMethod(){
        switch ($this->cal) {
            case 'ounces':
                $this->result = $this->num1 * 28.3495231;
                break;
            case 'grams':
                $this->result = $this->num1 * 0.035274;
                break;
            

            
            default:
            $this->result = "Error";
                break;
        }

        return $this->result;
    }

    public function getResult(){
        return $this->result;
    }


}

?>