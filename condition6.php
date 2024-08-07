<?php
function truthyOrFalsy($value){
  if ($value){
    return "True";
  }else{
    return "False";
  }
}

echo truthyOrFalsy("yassine") ."\n";
echo truthyOrFalsy("") . "\n";