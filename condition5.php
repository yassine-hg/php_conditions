<?php
function ternaryCheckout($number){
  return $number <= 12 ? "express lane" : "regular lane";
}

function ternaryVote($age){
  return $age >= 18 ? "yes" : "no";
}

echo ternaryCheckout(5) . "\n";
echo ternaryCheckout(50) . "\n";
echo ternaryVote(5) . "\n";
echo ternaryVOTE(50) . "\n";