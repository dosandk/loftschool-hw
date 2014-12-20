<?php

    function db_connect() {
        $mysqli_connect = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
        return $mysqli_connect && ! !mysqli_select_db($mysqli_connect, DB_NAME)? $mysqli_connect : false;
    };

    function db_result_to_array($projects) {
        $projects_array = array();
        $count = 0;

        while ($row = mysqli_fetch_array($projects, MYSQLI_ASSOC)) {
            $projects_array[$count] = $row;
            $count++;
        }

        return $projects_array;
    };

    function get_projects() {
        $link =  db_connect();
        $query = "SELECT * FROM projects";
        return db_result_to_array(mysqli_query($link, $query));
    };

    function insert_to_db($project_name, $project_img, $project_url, $project_description) {
        $link =  db_connect();
        $query = "INSERT INTO
                  projects(name, image, url, description)
                  VALUES (
                    '$project_name',
                    '$project_img',
                    '$project_url',
                    '$project_description')";

        return mysqli_query($link, $query);
    };