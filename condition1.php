<?php
namespace Codecademy;

function markAnswer($answer){
  if ($answer){
    return "green";
  }else{
    return "red";
  }
}

echo markAnswer(TRUE);
echo "\n";
echo markAnswer(FALSE);
