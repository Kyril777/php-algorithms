<?php
function maxProfit($prices) {
  $counter = count($prices);
  if ($counter < 2) {
     return 0;
        }

        $result = 0;
        for ($i = 0; $i < $counter - 1; $i++) {
            for ($j = $i + 1; $j < $counter; $j++) {
                $result = max($result, $prices[$j] - $prices[$i]);
            }
        }
             return $result;
    }
