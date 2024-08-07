<?php

echo "Hello, there. What's your first name?\n";
$name = readline(">> ");
$length = strlen($name);

if ($length > 8) {
  echo "Hi, ${name}. That's a long name.";
} elseif ($length > 3) {
  echo "Hi, ${name}.";
} else {
  echo "Hi, ${name}. That's a short name.";
}
