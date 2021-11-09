<?php

// Print current date

echo date('Y-m-d h:i:s');

// Print yesterday

echo date('Y-m-d h:i:s', time() - 60 * 60 * 24);

// Different format: https://www.php.net/manual/en/function.date.php

echo date('F j Y, H:i:s');

// Print current timestamp

echo time() . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php

$parsedDate = date_parse('2020-10-12 09:00:00');
var_dump($parsedDate) . '<br>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
