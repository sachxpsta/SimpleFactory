<?php
    include_once('Operator.php');
    class OperatorFactory{
        public static function createOperator($operator){
            $operatorReturn=null;
            switch($operator){
                case '+':
                    $operatorReturn = new OperatorAdd();
                    break;
                case '-':
                    $operatorReturn = new OperatorSub();
                    break;
                case '*':
                    $operatorReturn = new OperatorMul();
                    break;
                case '/':
                    $operatorReturn = new OperatorDiv();
                    break;
            }
            return $operatorReturn;
        }
    }
?>