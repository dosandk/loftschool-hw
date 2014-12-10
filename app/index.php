<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/core/config.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/core/db_fns.php');


    $view = empty($_GET['view']) ? 'about-me' : $_GET['view'];

    include($_SERVER['DOCUMENT_ROOT'].'/views/portfolio.php');