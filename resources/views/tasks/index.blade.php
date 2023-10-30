<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task index</title>
</head>

<body>
    <h1>タイトル一覧</h1>
    <ul>
        @foreach ($tasks as $task)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="{{ route('taska.show', $task) }}">{{ $task->title }}</a></li>
        @endforeach
    </ul>
</body>

</html>