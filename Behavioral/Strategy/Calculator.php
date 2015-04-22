<?php

namespace Behavioral\Strategy;

class Calculator {
   
    public function getCalc($num1, OperatorInterface $operator, $num2)
    {
         eval(' echo '.$num1.$operator->getOperator().$num2.';');
    }
}
