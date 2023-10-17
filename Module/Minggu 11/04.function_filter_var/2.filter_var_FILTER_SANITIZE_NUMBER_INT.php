<?php

echo filter_var(12, FILTER_SANITIZE_NUMBER_INT);
//12

echo filter_var(12.45, FILTER_SANITIZE_NUMBER_INT);
//1245

echo filter_var("FooBar", FILTER_SANITIZE_NUMBER_INT);
//

echo filter_var("99FooBar9", FILTER_SANITIZE_NUMBER_INT);
//999
