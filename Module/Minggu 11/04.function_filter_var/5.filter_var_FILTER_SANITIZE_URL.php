<?php

echo filter_var("https://www.duniailkom.com", FILTER_SANITIZE_URL);
//foo@bar.com

echo filter_var("https://www. duniailkom. com?s=php", FILTER_SANITIZE_URL);
//https://www.duniailkom.com?s=php

echo filter_var("https://www. duniailkom. com?s='câfè'^&*()", FILTER_SANITIZE_URL);
//https://www.duniailkom.com?s='cf'^&*()

echo filter_var("https://www. duniailkom. com?s=<script>test<script>", FILTER_SANITIZE_URL);
//https://www.duniailkom.com?s=<script>test<script>
