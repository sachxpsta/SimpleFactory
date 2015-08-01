<?php
abstract class Operator
{
    public  $mFirstValue;
    public  $mSecondValue;

    abstract  function getResult();
}

class OperatorAdd extends Operator
{
    public function  getResult(){
        $result = $this->mFirstValue + $this->mSecondValue;
        return $result;
    }
}

class OperatorSub extends Operator{
    public function  getResult(){
        $result = $this->mFirstValue - $this->mSecondValue;
        return $result;
    }
}

class OperatorMul extends Operator{
    public function getResult(){
        $result = $this->mFirstValue * $this->mSecondValue;
        return $result;
    }
}

class OperatorDiv extends Operator{
    public function getResult(){
        $result = $this->mFirstValue / $this->mSecondValue;
        return $result;
    }
}
?>