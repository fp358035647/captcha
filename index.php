<?php

require_once 'vendor/autoload.php';

$captcha  = new fp358035647\captcha\Captcha(['width'=>140,'height'=>70,'len'=>6]);
 
$captcha->entry();



?>
