<?php

    session_start();

    if (strpos($_SERVER['HTTP_HOST'], 'vl-shevchuk.ru') !== false) {
        require_once($_SERVER['DOCUMENT_ROOT'].'/core/config.php');
    } else {
        require_once($_SERVER['DOCUMENT_ROOT'].'loftschool/app/core/config.local.php');
    }

    require_once(DOCROOT.DIR.'core/db_fns.php');

    $db = db_connect();

    $data = array();

    $view = empty($_GET['view']) ? 'about-me' : $_GET['view'];

    switch ($view) {
        case 'about-me':
            $data['title'] = 'Vladimir Shevchuk | About Me Homework 1 (loftschool december 2014)';
            include(DOCROOT.DIR.'/core/views/portfolio.php');
            break;
        case 'my-works':
            $data['title'] = 'Vladimir Shevchuk | My works Homework 1 (loftschool december 2014)';
            $data['projects'] = get_projects();
            include(DOCROOT.DIR.'/core/views/portfolio.php');
            break;
        case 'contacts':
            $data['title'] = 'Vladimir Shevchuk | Contacts Homework 1 (loftschool december 2014)';
            include(DOCROOT.DIR.'/core/views/portfolio.php');
            break;
        case 'admin':
            $data['title'] = 'Vladimir Shevchuk | Admin Homework 1 (loftschool december 2014)';
            include(DOCROOT.DIR.'/core/views/login-popup.php');
            break;
    }

