<?php

    if (strpos($_SERVER['HTTP_HOST'], 'vl-shevchuk.ru') !== false) {
        require_once($_SERVER['DOCUMENT_ROOT'].'/core/config.php');
    } else {
        require_once($_SERVER['DOCUMENT_ROOT'].'loftschool/app/core/config.local.php');
    }

    require_once(DOCROOT.DIR.'core/db_fns.php');
    db_connect();

    $post = (!empty($_POST)) ? true : false;

    if ($post) {
        $user_name = stripcslashes($_POST['userName']);
        $user_email = stripcslashes($_POST['userEmail']);
        $message = stripcslashes($_POST['userMessage']);
        $capture_code = stripcslashes($_POST['captureCode']);

        $result = ['userName' => $user_name, 'userEmail' => $user_email,
            'userMessage' => $message, 'captureCode' => $capture_code];
        header('Content-Type: application/json');

        print json_encode($result);
    }
