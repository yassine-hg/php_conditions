<?php

function airQuality($air){
  switch($air){
    case "green":
      echo "good";
      break;
    case "yellow":
      echo "moderate";
      break;
    case "orange":
      echo "unhealthy for sensitive groups";
      break;
    case "red":
      echo "unhealthy";
      break;
    case "purple":
      echo"very unhealthy";
      break;
    case "maroon":
      echo "hazardous";
      break;
    default:
      echo "invalid color";
  }
}

echo airQuality("green") . "\n";
echo airQuality("red") . "\n";
echo airQuality("maroon") . "\n";
echo airQuality("ajdk") . "\n";