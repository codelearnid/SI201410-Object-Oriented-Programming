<?php
  echo 1 <=> 1; echo "<br>";  //  0
  echo 1 <=> 2; echo "<br>";  // -1
  echo 2 <=> 1; echo "<br>";  //  1

  echo 1.5 <=> 1.5; echo "<br>"; //  0
  echo 1.5 <=> 2.5; echo "<br>"; // -1
  echo 2.5 <=> 1.5; echo "<br>"; //  1

  echo "x" <=> "x"; echo "<br>"; //  0
  echo "x" <=> "y"; echo "<br>"; // -1
  echo "y" <=> "x";              //  1
