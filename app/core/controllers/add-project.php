<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/core/config.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/core/db_fns.php');

    $post = (!empty($_POST)) ? true : false;

    if ($post) {
        $project_name = stripcslashes($_POST['projectName']);
        $project_url = stripcslashes($_POST['projectUrl']);
        $project_img = stripcslashes($_POST['projectImg']);
        $project_description = stripcslashes($_POST['projectDescription']);

        insert_to_db($project_name, $project_img, $project_url, $project_description);

        $subject = 'subject';
        $message = 'Имя проект: ' .$project_name. ', адрес проекта: ' .$project_url. ', описание проекта';

        $result = ['projectName' => $project_name, 'projectUrl' => $project_url,
            'projectImg' => $project_img, 'projectDescription' => $project_description];

        header('Content-Type: application/json');
        print json_encode($result);
    }