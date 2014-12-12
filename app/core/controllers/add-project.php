<?php
    $post = (!empty($_POST)) ? true : false;

    if ($post) {
        $project_name = stripcslashes($_POST['projectName']);
        $project_url = stripcslashes($_POST['projectUrl']);
        $project_img = stripcslashes($_POST['projectImg']);
        $project_description = stripcslashes($_POST['projectDescription']);

        $subject = 'subject';
        $message = 'Имя проект: ' .$project_name. ', адрес проекта: ' .$project_url. ', описание проекта';

        $result = ['projectName' => $project_name, 'projectUrl' => $project_url,
            'projectImg' => $project_img, 'projectDescription' => $project_description];
    }

    if (true) {
        header('Content-Type: application/json');
        print json_encode($result);
    } else {
        header('HTTP/1.1 500 Internal Server Booboo');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
    }

//    $mail = mail(CONTACT, $subject, $message);


