<?php 

$result = filter_var('test@', FILTER_VALIDATE_EMAIL);
var_dump($result);   // bool(false) 

$result = filter_var('test@co', FILTER_VALIDATE_EMAIL);
var_dump($result);   // bool(false) 

$result = filter_var('test@co.id$$', FILTER_VALIDATE_EMAIL);
var_dump($result);   // bool(false) 

$result = filter_var('test@co.id', FILTER_VALIDATE_EMAIL);
var_dump($result);   // test@co.id

$result = filter_var('test_4j4@hoho.id', FILTER_VALIDATE_EMAIL);
var_dump($result);   // test_4j4@hoho.id

$result = filter_var('a@a.a', FILTER_VALIDATE_EMAIL);
var_dump($result);   // a@a.a