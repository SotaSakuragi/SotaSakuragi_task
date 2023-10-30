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
    <h1>投稿論文編集</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>【エラー内容】</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">論文タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ old('body', $task->body) }}</textarea>
        </p>
        <div class="button-group">
            <button type="button" onclick='location.href="{{ route('tasks.show', $task->id) }}"'>詳細に戻る</button>
            <!-- $taskのidを元に編集ページへ遷移する -->
            <input type="submit" value="更新">
        </div>
    </form>
</body>

</html>
