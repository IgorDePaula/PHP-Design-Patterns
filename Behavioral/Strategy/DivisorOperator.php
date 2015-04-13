<?php

namespace Behavioral\Strategy;

class DivisorOperator implements OperatorInterface{
    public function getOperator() {
        return '/';
    }
}
