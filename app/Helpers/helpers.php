<?php

function CalcDiscount($type, $value_discount, $total_value){
    try {
        $resalt = 0;
        if ($type == 'value'){
            $resalt = $total_value - $value_discount;
        }

        if ($type == 'percent'){
            $resalt = $total_value - ($total_value * ($value_discount / 100));
        }

        return $total_value - $resalt;
    } catch (\Throwable $throwable){
        return 0;
    }
}
