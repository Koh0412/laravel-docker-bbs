<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>掲示板だよ</title>
</head>
<body>
    <h3>掲示板だよ</h3>
    <form action="{{ route('threads.create') }}" method="post">
        <div>
            @csrf
            <input type="text" name="title" placeholder="スレッドタイトル">
            <input type="submit" value="作成">
        </div>
    </form>
    <div>スレッド一覧</div>
    <ul>
        @foreach ($threads as $thread)
            <li>
                <a href="{{ route('threads.show', ['id' => $thread->id]) }}">
                    {{ $thread->title }} {{ $thread->created_at }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
