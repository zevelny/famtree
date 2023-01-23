<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Дерево</title>
    <link rel="stylesheet" href="public/css/login.css">
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<section class="container">
    <div class="login">
        <h1>Добавление в дерево</h1>
        <form method="get" action="http://turbofamily/create_tree">
            <input  hidden type="text" name="tree_id" value="{{$treeId}}">
            <input  hidden type="text" name="user_id" value="{{$userId}}">


            <p><input type="text" name="name" value="" placeholder="ФИО"></p>

            <p><input list="people-list" name="mother" value="" placeholder="Мать"></p>
            <p><input list="people-list" name="father" value="" placeholder="Отец"></p>

            <datalist id="people-list">
                <option value="-"></option>
                @foreach($people as $person)
                    <option value="{{$person->id}}">{{$person->name}}</option>
                @endforeach
            </datalist>

            <p>
                <h3>Дата рождения</h3>
                <input type="date" name="birth" value="" placeholder="Дата рождения">
            </p>

            <p>
                <h3>Дата смерти</h3>
                <input type="date" name="death" value="" placeholder="Дата смерти">
            </p>

            <p>
                <h3>Краткая биография</h3>
                <textarea style="resize: none;" name="biography" cols="41" rows="10"></textarea>
            </p>

            <p class="submit"><input type="submit" name="commit" value="Добавить"></p>
        </form>
    </div>
</section>
</body>
</html>
