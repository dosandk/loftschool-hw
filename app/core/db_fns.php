<?php

    function db_connect() {
        $connect = mysql_connect(DB_HOST, DB_USER, DB_PSWD);
        return $connect && !mysql_select_db(DB_NAME, $connect) ? $connect : false;
    };

    /*if (db_connect()) {
        echo 'riba!';
    } else {
        echo 'boo!';
    }*/
