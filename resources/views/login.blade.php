<!DOCTYPE html>
<html class="lt-ie9 lt-ie8 lt-ie7" lang="en">
<html class="lt-ie9 lt-ie8" lang="en">
<html class="lt-ie9" lang="en">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Вход</title>
    <link rel="stylesheet" href="public/css/login.css">
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
</head>
<body>
<section class="container">
    <div class="login">
        <h1>Вход</h1>
        <h3 style="color:red;">{{ Request::get('message', "") }}</h3>
        <form method="post" action="http://turbofamily/api/familytree/user/login">
            <p><input type="text" name="username" value="" placeholder="Логин или Email"></p>
            <p><input type="password" name="password" value="" placeholder="Пароль"></p>

            <p class="submit"><input type="submit" name="commit" value="Вход"></p>
        </form>
    </div>
</section>
</body>
</html>
