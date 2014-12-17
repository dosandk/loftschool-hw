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
        $project_name = stripcslashes($_POST['projectName']);
        $project_url = stripcslashes($_POST['projectUrl']);
        $project_img = '123123';
        $project_description = stripcslashes($_POST['projectDescription']);

        insert_to_db($project_name, $project_img, $project_url, $project_description);

        if (true) {
            $result = ['projectName' => $project_name, 'projectUrl' => $project_url,
                'projectImg' => $project_img, 'projectDescription' => $project_description];
            header('Content-Type: application/json');
            print json_encode($result);
        } else {
            header('HTTP/1.1 500 Internal Server Booboo');
            header('Content-Type: application/json; charset=UTF-8');
            die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
        }
    }