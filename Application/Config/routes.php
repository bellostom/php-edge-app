<?php
return array(
    'GET' => array(
        '/' => array('Application\Controllers\Home', "index"),
        '/list' => array('Application\Controllers\Home', "renderList")
    )
);