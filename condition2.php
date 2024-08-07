<?php
function whatRelation($dna){
  if ($dna === 100){
    echo "identical twins";
  }
  elseif ($dna > 34){
    echo "parent and child or full siblings";
  }
  elseif($dna > 13 ){
    echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
  }
  elseif($dna > 5){
    echo "first cousins";
  }
  elseif($dna > 2){
    echo "second cousins";
  }
  elseif($dna > 0){
    echo "third cousins";
  }else{
    echo "not genetically related";
  }
}


echo whatRelation(100) . "\n";
echo whatRelation(0) . "\n";
echo whatRelation(51) . "\n";
echo whatRelation(22) . "\n";