<?php 

$result = filter_var('duniailkom', FILTER_VALIDATE_URL);
var_dump($result);   // bool(false) 

$result = filter_var('duniailkom.com', FILTER_VALIDATE_URL);
var_dump($result);   // bool(false) 

$result = filter_var('www.duniailkom.com', FILTER_VALIDATE_URL);
var_dump($result);   // bool(false) 

$result = filter_var('http://duniailkom.com', FILTER_VALIDATE_URL);
var_dump($result);   // http://duniailkom.com

$result = filter_var('https://www.duniailkom.com', FILTER_VALIDATE_URL);
var_dump($result);   // https://www.duniailkom.com

$result = filter_var('https://www.duniailkom.com?s=php&u=admin', FILTER_VALIDATE_URL);
var_dump($result);   // 'https://www.duniailkom.com?s=php&u=admin'