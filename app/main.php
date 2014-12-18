<?php

    if (strpos($_SERVER['HTTP_HOST'], 'vl-shevchuk.ru') !== false) {
        require_once($_SERVER['DOCUMENT_ROOT'].'/core/config.php');
    } else {
        require_once($_SERVER['DOCUMENT_ROOT'].'loftschool/app/core/config.local.php');
    }

    require_once(DOCROOT.DIR.'core/db_fns.php');
    db_connect();
    session_start();

    $data = array();

    $view = empty($_GET['view']) ? 'about-me' : $_GET['view'];

    switch ($view) {
        case 'about-me':
//            echo 1;
            $data['title'] = 'Vladimir Shevchuk | About Me Homework 1 (loftschool december 2014)';
            break;
        case 'my-works':
//            echo 2;
            $data['title'] = 'Vladimir Shevchuk | My works Homework 1 (loftschool december 2014)';
            break;
        case 'contacts':
//            echo 3;
            $data['title'] = 'Vladimir Shevchuk | Contacts Homework 1 (loftschool december 2014)';
            break;
    }

    include(DOCROOT.DIR.'/core/views/portfolio.php');