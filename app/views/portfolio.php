<!DOCTYPE html>
<html>
<head>
    <title>Vladimir Shevchuk – Homework 1 (loftschool december 2014) </title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon-logo-32x32.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon-logo-32x32.ico" type="image/x-icon">

    <link type="text/css" rel="stylesheet" href="css/ui/ui.min.css"/>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/libs/html5js/html5.js"></script>
    <![endif]-->
</head>

<body>
    <section class="main-container">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/views/templates/header.php'); ?>

        <section class="container">

            <?php include($_SERVER['DOCUMENT_ROOT'].'/views/templates/navigation.php'); ?>

            <section class="main-content">
                <article class="about">
                    <header>
                        <h1 class="main-info-title">
                            <span class="h1-txt">Основная информация</span>
                        </h1>
                    </header>
                    <div class="display-table">
                        <div class="display-table-cell vertical-align-top avatar-container-cell">
                            <div class="avatar-container"></div>
                        </div>
                        <div class="display-table-cell vertical-align-top">
                            <ul class="main-info-list">
                                <li class="main-info-el">
                                    <span class="main-info-el-title">Меня зовут:</span>
                                    Иванов Андрей Степанович
                                </li>
                                <li class="main-info-el">
                                    <span class="main-info-el-title">Мой возраст:</span>
                                    25 лет
                                </li>
                                <li class="main-info-el">
                                    <span class="main-info-el-title">Мой город:</span>
                                    Севастополь
                                </li>
                                <li class="main-info-el">
                                    <span class="main-info-el-title">Моя специализация:</span>
                                    <span class="upper-case">frontend</span> разработчик
                                </li>
                                <li class="main-info-el">
                                    <div class="display-table">
                                        <div class="display-table-cell skills-title-cell">
                                            <span class="main-info-el-title">Ключевые навыки:</span>
                                        </div>
                                        <div class="display-table-cell">
                                            <ul class="skills-list">
                                                <li class="skills-list-el">html</li>
                                                <li class="skills-list-el">css</li>
                                                <li class="skills-list-el">javascript</li>
                                                <li class="skills-list-el">gulp</li>
                                                <li class="skills-list-el">git</li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="experience">
                    <header>
                        <h1 class="experience-title">
                            <span class="h1-txt">Опыт работы</span>
                        </h1>
                    </header>
                    <ul>
                        <li class="experience-info-list-el">
                            <div class="display-table">
                                <div class="display-table-cell vertical-align-middle work-icon-cell">
                                    <div class="work-icon"></div>
                                </div>
                                <div class="display-table-cell company-name-info-cell">
                                    <div class="company-name">
                                        "ИП Боровицкий" - Продавец дисков
                                    </div>
                                    <div class="work-date">
                                        Сентябрь 2005 - Август 2008
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="experience-info-list-el">
                            <div class="display-table">
                                <div class="display-table-cell vertical-align-middle work-icon-cell">
                                    <div class="work-icon"></div>
                                </div>
                                <div class="display-table-cell company-name-info-cell">
                                    <div class="company-name">
                                        "ООО Системы безопастности" - Системынй дминистратор
                                    </div>
                                    <div class="work-date">
                                        Июнь 2008 - Июль 2010
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </article>
                <article class="education">
                    <header>
                        <h1 class="education-title">
                            <span class="h1-txt">Образование</span>
                        </h1>
                    </header>
                    <ul class="education-info-list">
                        <li class="education-info-list-el">
                            <div class="display-table parent-width">
                                <div class="display-table-cell vertical-align-middle education-icon-cell">
                                    <div class="education-icon">&nbsp;</div>
                                </div>
                                <div class="display-table-cell education-palace-cell">
                                    <div class="education-palace">Незаконченное высшее. СПБГУ ИТМО</div>
                                    <div class="education-date">
                                        Октябрь 2012 - по настоящее время
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="education-info-list-el">
                            <div class="display-table parent-width">
                                <div class="display-table-cell vertical-align-middle education-icon-cell">
                                    <div class="courses-icon">&nbsp;</div>
                                </div>
                                <div class="display-table-cell education-palace-cell">
                                    <div class="education-palace">Курсы Loftschool.ru</div>
                                    <div class="education-date">
                                        Декабрь 2014 - по настоящее время
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </article>
            </section>

        </section>

        <?php include($_SERVER['DOCUMENT_ROOT'].'/views/templates/footer.php'); ?>
    </section>
</body>
</html>
