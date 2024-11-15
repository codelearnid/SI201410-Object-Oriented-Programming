<?php

echo filter_var("<b>FooBar</b>", FILTER_SANITIZE_SPECIAL_CHARS);
// Output: &lt;b&gt;FooBar&lt;/b&gt;

echo filter_var("<script onclick='danger()'>FooBar</script>", FILTER_SANITIZE_SPECIAL_CHARS);
// Output: &lt;script onclick=&#039;danger()&#039;&gt;FooBar&lt;/script&gt;

echo filter_var("   FooBar__  _  ", FILTER_SANITIZE_SPECIAL_CHARS);
// Output:    FooBar__  _  

echo filter_var("&Foo'Bar câfè", FILTER_SANITIZE_SPECIAL_CHARS);
// Output: &amp;Foo&#039;Bar câfè

?>
