<?php
header("Refresh: 5"); 

echo 'Date of last build: ';
readfile('./date.inc');

echo 'The current date is ' . date('Y-m-d H:i:s') . '<br/>';

