<?php

include "classes/Java.php";
include "classes/Php.php";
include "classes/Ruby.php";

use test\java as ja;

new test\java();
new test\live\php();
new test\ruby();
new ja();

echo HTML;
echo test\CSS;

test\coding();

?>