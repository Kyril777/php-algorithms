/* Mean. */

<?php
function average($entry)
{
   if (!is_array($entry)) return false;

   return array_sum($entry)/count($entry);

?>
