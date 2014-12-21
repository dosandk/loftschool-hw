<?php

if (strpos($_SERVER['HTTP_HOST'], 'vl-shevchuk.ru') !== false) {
    require_once($_SERVER['DOCUMENT_ROOT'].'/core/config.php');
} else {
    require_once($_SERVER['DOCUMENT_ROOT'].'loftschool/app/core/config.local.php');
}

if ($_FILES['fileUpload']['name']) {
    $uploadedUrl = DOCROOT.DIR.'core/uploads/'.$_FILES['fileUpload']['name'];
    move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadedUrl);
    echo $uploadedUrl;
    echo $_FILES['fileUpload']['tmp_name'];
}

echo json_encode('Ok');
exit;
