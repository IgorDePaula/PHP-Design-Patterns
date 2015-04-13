<?php

require 'vendor/autoload.php';

/**
 * BEHAVIORAL
 */

/**
 * Use of Strategy
 */
use Behavioral\Strategy\AdderOperator,
    Behavioral\Strategy\Calculator,
    Behavioral\Strategy\DivisorOperator,
    Behavioral\Strategy\MultiplierOperator,
    Behavioral\Strategy\SubtractorOperator;

$calc = new Calculator();
$add = new AdderOperator();
$sub = new SubtractorOperator();
$mul = new MultiplierOperator();
$div = new DivisorOperator();
echo "Operation 2 {$add->getOperator()} 2 <br>";
echo $calc->getCalc(2, $add, 2);
echo '<hr>';
echo "Operation 2 {$sub->getOperator()} 2 <br>";
echo $calc->getCalc(2, $sub, 2);
echo '<hr>';
echo "Operation 4 {$mul->getOperator()} 5 <br>";
echo $calc->getCalc(4, $mul, 5);
echo '<hr>';
echo "Operation 4 {$div->getOperator()} 4 <br>";
echo $calc->getCalc(4, $div, 4);
echo '<hr>';
