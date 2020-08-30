<?php

namespace MutationTesting;

class Calculator
{
    public function add($a, $b) {
        if ($a < 2) {
            return ($a + $b) * -1;
        } else {
            return $a + $b;
        }
    }
}
