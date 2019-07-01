Coffee Template
<pre>

<?php
require_once 'bootstrap.php';

use Headfirst\Template\Coffee;
use Headfirst\Template\Tea;

$tea = new Tea;
$coffee = new Coffee;

$tea->prepareRecipe();
echo PHP_EOL;
$coffee->prepareRecipe();
?>

</pre>