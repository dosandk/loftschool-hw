<!DOCTYPE html>
<html lang="ru">
<head>
    <title><?= $data['title'] ?></title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon-logo-16x16.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon-logo-16x16.ico" type="image/x-icon">

    <link type="text/css" rel="stylesheet" href="css/ui/default.css"/>
    <link type="text/css" rel="stylesheet" href="css/ui/about-me.css"/>
    <link type="text/css" rel="stylesheet" href="css/ui/contacts.css"/>
    <link type="text/css" rel="stylesheet" href="css/ui/my-works.css"/>
    <link type="text/css" rel="stylesheet" href="css/ui/login-popup.css"/>
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

    <div class="login-popup-modal-container">
        <div class="display-table parent-size to-center-inline">
            <div class="display-table-cell vertical-align-middle">
                <div class="login-popup">
                    <div class="login-popup-header">Авторизуйтесь</div>
                    <div class="login-content">
                        <form id="login-form" action="javascript:void(0)">
                            <fieldset class="login-form-inputs-wrap">
                                <label for="user-login" class="login-input-title">Логин</label>
                                <div class="login-form-input-wrap">
                                    <input id="user-login"
                                           class="form-input"
                                           name="userLogin"
                                           placeholder="Введите логин"
                                           type="text"/>
                                    <div class="error-wrapper"></div>
                                </div>

                                <label for="user-password" class="login-input-title">Пароль</label>
                                <div class="login-form-input-wrap">
                                    <input id="user-password"
                                           class="form-input"
                                           name="userPassword"
                                           placeholder="Введите пароль"
                                           type="password"/>
                                    <div class="error-wrapper"></div>
                                </div>
                            </fieldset>
                            <input class="login-popup-submit-btn" type="submit" value="Войти"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include(TEMPLATES.'footer.php'); ?>

<script type="text/javascript" src="js/libs/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/libs/jquery-plugins/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/libs/underscore/underscore-min.js"></script>
<script type="text/javascript" src="js/app.js"></script>

<script>
    $(function() {
        app.initialize();
        app.loginFormValidationInit();
    });
</script>
</body>
</html>
