<?php

namespace Behavioral\Strategy;

class AdderOperator implements OperatorInterface{
  
   public function getOperator(){
       return '+';
   }
}
