<?php

namespace Behavioral\Strategy;

class MultiplierOperator implements OperatorInterface{
    public function getOperator() {
        return '*';
    }
}
