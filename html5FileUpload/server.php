<?php
 
 //不建议用HTTP_X_FILENAME 作为参数名，在nginx可能会出问题
$fn = (isset($_SERVER['HTTP_FILENAME']) ? $_SERVER['HTTP_FILENAME'] : false);
if ($fn) {
    $fn = urldecode($fn);
    file_put_contents('../storage/app/public/sdks/' . $fn,file_get_contents('php://input'));
}