<?php 

$result = preg_match("/^[A-Za-z]{6,}$/", "aNto");
var_dump($result);   // int(0)  

$result = preg_match("/^[A-Za-z]{6,}$/", "aNto99");
var_dump($result);   // int(0) 

$result = preg_match("/^[A-Za-z]{6,}$/", "aNtoni");
var_dump($result);   // int(1) 

$result = preg_match("/^[A-Za-z]{6,}$/", "Budiansyah");
var_dump($result);   // int(1) 
