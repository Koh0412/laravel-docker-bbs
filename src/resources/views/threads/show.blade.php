<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>スレッド | {{ $thread->title }}</title>
</head>
<body>
    <a href="{{ route('threads.index') }}">一覧に戻る</a>
    <h3>スレッド: {{ $thread->title }}</h3>
    <ul>
        @foreach ($comments as $comment)
            <li>
                <span>{{ $comment->name }}</span>
                <span>{{ $comment->contents }}</span>
            </li>
        @endforeach
    </ul>
    <form action="{{ route('threads.create_comment', ['id' => $thread->id]) }}" method="post">
        @csrf
        <div>
            <input type="text" name="name">
        </div>
        <div>
            <textarea name="contents" id="comment-contents" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
</body>
</html>
