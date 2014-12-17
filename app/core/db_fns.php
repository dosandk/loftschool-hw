<?php

    function db_connect() {
        $connect = mysql_connect(DB_HOST, DB_USER, DB_PSWD);
        return $connect && !mysql_select_db(DB_NAME, $connect) ? $connect : false;
    };

    function db_result_to_array($projects) {
        $projects_array = array();
        $count = 0;

        while ($row = mysql_fetch_array($projects)) {
            $projects_array[$count] = $row;
            $count++;
        }

        return $projects_array;
    };

    function get_projects() {
        $query = "SELECT * FROM projects";
        return db_result_to_array(mysql_query($query));
    };

    function insert_to_db($project_name, $project_img, $project_url, $project_description) {
        db_connect();
        mysql_set_charset("utf8");

        $query = "INSERT INTO
                  projects(name, image, url, description)
                  VALUES (
                    '$project_name',
                    '$project_img',
                    '$project_url',
                    '$project_description')";

        return mysql_query($query);
    };