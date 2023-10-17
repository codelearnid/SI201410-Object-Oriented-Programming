<?php

echo filter_var("<b>FooBar</b>", FILTER_SANITIZE_STRING);
//FooBar

echo filter_var("<script onclick='danger()'>FooBar</script>", FILTER_SANITIZE_STRING);
//FooBar

echo filter_var("   FooBar__  _  ", FILTER_SANITIZE_STRING);
//   FooBar__  _

echo filter_var("&Foo'Bar câfè", FILTER_SANITIZE_STRING);
//&Foo&#39;Bar câfè
