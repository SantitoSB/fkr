<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<link rel="stylesheet" href="css/main.min.css">
	<link rel="stylesheet" href="css/libs.min.css">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>
<nav>
    <div class="top-line--wrapper">
        <!-- Fixed navbar -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="bmn navbar navbar-inverse navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Главная</a></li>
                                    <li><a href="#about">О программе</a></li>
                                    <li><a href="#contact">Контакты</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Выподающее меню <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Меню</a></li>
                                            <li><a href="#">Меню</a></li>
                                            <li><a href="#">Меню</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Меню</a></li>
                                            <li><a href="#">Меню</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <form class="navbar-form navbar-right">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Пароль" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-default">Войти</button>
                                </form>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</nav>

<body>