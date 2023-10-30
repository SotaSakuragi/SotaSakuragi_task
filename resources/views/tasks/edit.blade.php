<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ route('tasks.index') }}">戻る</a>
    <h1>更新</h1>
    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ $task->body }}</textarea>
        </p>

        <input type="submit" value="更新">
    </form>
</body>

</html>
