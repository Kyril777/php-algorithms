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


function maxProfit2($price, $n)
{

    $profit = array();
    for ($i = 0; $i < $n; $i++)
        $profit[$i] = 0;

    $max_price = $price[$n - 1];
    for ($i = $n - 2; $i >= 0; $i--)
    {
        if ($price[$i] > $max_price)
            $max_price = $price[$i];

        if($profit[$i + 1] >
           $max_price-$price[$i])
        $profit[$i] = $profit[$i + 1];
        else
        $profit[$i] = $max_price -
                      $price[$i];
    }
 
    $min_price = $price[0];
    for ($i = 1; $i < $n; $i++)
    {
        if ($price[$i] < $min_price)
            $min_price = $price[$i];
 
        $profit[$i] = max($profit[$i - 1],
                          $profit[$i] +
                         ($price[$i] - $min_price));
    }
    $result = $profit[$n - 1];
    return $result;
}
 
