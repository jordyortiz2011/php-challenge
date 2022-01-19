<?php

 $number = '943178688';

$math = preg_match('/^[0-9]{9}$/i', $number);
var_dump($math);