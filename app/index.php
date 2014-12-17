<?php

    if (strpos($_SERVER['HTTP_HOST'], 'vl-shevchuk.ru') !== false) {
        require_once($_SERVER['DOCUMENT_ROOT'].'/core/config.php');
        echo 1;
    } else {
        require_once($_SERVER['DOCUMENT_ROOT'].'loftschool/app/core/config.local.php');
    }

    require_once(DOCROOT.DIR.'core/db_fns.php');
    db_connect();

    $view = empty($_GET['view']) ? 'about-me' : $_GET['view'];

    switch ($view) {
        case 'foo':
            echo 1;
            break;
        case 'bar':
            echo 2;
            break;
        case 'cake':
            echo 3;
            break;
    }

    include(DOCROOT.DIR.'/core/views/portfolio.php');