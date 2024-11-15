<?php

echo filter_var("foo@bar.com", FILTER_SANITIZE_EMAIL);
//foo@bar.com

echo filter_var("f0o@b4r$#*?.com", FILTER_SANITIZE_EMAIL);
//f0o@b4r$#?*.com

echo filter_var("(foo)@bar.co.//id", FILTER_SANITIZE_EMAIL);
//foo@bar.co.id
