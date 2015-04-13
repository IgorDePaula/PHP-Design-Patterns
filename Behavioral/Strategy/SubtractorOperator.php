<?php

namespace Behavioral\Strategy;

class SubtractorOperator implements OperatorInterface{
    public function getOperator() {
        return '-';
    }
}
