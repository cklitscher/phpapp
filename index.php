<?php
echo 'Date of build: ';
readfile('./date.inc');

echo 'The current date is ' . date('Y-m-d H:i:s') . '<br/>';

