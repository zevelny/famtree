<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Рабочее пространство</title>
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<style>
    table, th, td {
        border:1px solid black;
    }

</style>
<body>
<section class="container">
    <div class="workspace">
        <h1>Ваши деревья</h1>

        <form method="get" action="http://turbofamily/new_tree">
            <input hidden type="text" name="userId" value="{{$userId}}">
            <button type="submit">Добавить дерево</button>
        </form>

        <br>
        <table style="text-align: center; width: 100%;">
            <tr>
                <th style="width: 70%;">Дерево</th>
                <th>Просмотр</th>
            </tr>
            @foreach($trees as $tree)
                <tr>
                    <td>{{$tree->tree_id}}</td>
                    <td>
                        <form method="post" action="view">
                            <input type="hidden" name="tree_id" value="{{$tree->tree_id}}">
                            <button type="submit">Просмотреть</button>
                        </form>
                        <form method="post" action="red">
                            <input type="hidden" name="tree_id" value="{{$tree->tree_id}}">
                            <button type="submit">Редактировать</button>
                        </form>
                        <form method="post" action="http://turbofamily/new_tree">
                            <input type="hidden" name="tree_id" value="{{$tree->tree_id}}">
                            <button type="submit">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</section>
</body>
</html>
