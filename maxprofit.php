<?php
function maxProfit($prices) {
  $count = count($prices);
  if ($count < 2) {
     return 0;
        }

        $res = 0;
        for ($i = 0; $i < $count - 1; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                $res = max($res, $prices[$j] - $prices[$i]);
            }
        }
             return $res;
    }
