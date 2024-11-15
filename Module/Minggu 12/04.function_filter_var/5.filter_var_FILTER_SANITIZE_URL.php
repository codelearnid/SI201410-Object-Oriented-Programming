<?php

echo filter_var("https://www.codelearn.com", FILTER_SANITIZE_URL);
// Output: https://www.codelearn.com

echo filter_var("https://www. codelearn. com?s=php", FILTER_SANITIZE_URL);
// Output: https://www.codelearn.com?s=php

echo filter_var("https://www. codelearn. com?s='câfè'^&*()", FILTER_SANITIZE_URL);
// Output: https://www.codelearn.com?s='cf'^&*()

echo filter_var("https://www. codelearn. com?s=<script>test<script>", FILTER_SANITIZE_URL);
// Output: https://www.codelearn.com?s=<script>test<script>

?>
