<?php

require 'util.php';

while ( ($input = trim(fgets(STDIN))) != 'q' ){
	print ">".get_clean_reverted_str($input)."\n";
}
