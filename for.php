<?php


fwrite(STDOUT, 'give me the first boundary ');
$start = trim(fgets(STDIN));
fwrite(STDOUT, 'give me the second boundary ');
$end = trim(fgets(STDIN));
fwrite(STDOUT, 'increment by ');
$increment = trim(fgets(STDIN));

echo 'incrementing' . PHP_EOL;
for ($i = $start; $i <= $end; $i += $increment){
	echo "$i" . PHP_EOL;
};
