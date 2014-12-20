<?php

    session_start();

    if (strpos($_SERVER['HTTP_HOST'], 'vl-shevchuk.ru') !== false) {
        require_once($_SERVER['DOCUMENT_ROOT'].'/core/config.php');
    } else {
        require_once($_SERVER['DOCUMENT_ROOT'].'loftschool/app/core/config.local.php');
    }

    require_once(DOCROOT.DIR.'core/db_fns.php');

    $link = db_connect();

    $login = htmlspecialchars(strip_tags(trim($_POST['userLogin'])), ENT_QUOTES);

    $password = md5($_POST['userPassword']);

    $query = "SELECT COUNT(users.id) as cnt FROM users WHERE users.login = '$login' AND users.password = '$password'";
    $result = db_result_to_array(mysqli_query($link, $query));

    $status = array();

    if (@$result[0]['cnt'] == 1) {
        $_SESSION['auth'] = true;
        $status['message'] = 'ok';
        $status['redirectUrl'] = DOMAIN_URL.'my-works';
    } else {
        $status['message'] = 'no';
    }

    header('Content-Type: application/json');
    print json_encode($status);
    exit;
