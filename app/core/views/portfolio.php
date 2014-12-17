<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Vladimir Shevchuk | Homework 1 (loftschool december 2014) </title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon-logo-16x16.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon-logo-16x16.ico" type="image/x-icon">

    <link type="text/css" rel="stylesheet" href="css/ui/default.css"/>
    <link type="text/css" rel="stylesheet" href="css/ui/about-me.css"/>
    <link type="text/css" rel="stylesheet" href="css/ui/contacts.css"/>
    <link type="text/css" rel="stylesheet" href="css/ui/my-works.css"/>
    <link type="text/css" rel="stylesheet" href="css/fonts/fira.css"/>
    <link type="text/css" rel="stylesheet" href="css/fonts/proxima-nova.css"/>

    <!--    <link type="text/css" rel="stylesheet" href="css/ui/ui.min.css"/>-->

    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/libs/html5js/html5.js"></script>
        <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
    <![endif]-->
</head>

<body>
    <section class="main-container">
        <?php include(TEMPLATES.'header.php'); ?>

        <section class="container">

            <?php include(TEMPLATES.'navigation.php'); ?>

            <section class="main-content">

                <?php include(TEMPLATES.$view.'.php'); ?>

            </section>

        </section>

        <?php include(TEMPLATES.'footer.php'); ?>

        <?php include(TEMPLATES.'elements/add-project-popup.php'); ?>
    </section>

    <script type="text/javascript" src="js/libs/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/libs/jquery-plugins/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/libs/underscore/underscore-min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <script>
        $(function() {
            app.initialize();
        });
    </script>
</body>
</html>
