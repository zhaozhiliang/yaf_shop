<?php
   date_default_timezone_set('Asia/Chongqing');

   define('APP_PATH', dirname(__FILE__).'/../');

   $application = new Yaf_Application( APP_PATH. "/conf/application.ini");

   $application
       ->bootstrap()
       ->run();


?>
