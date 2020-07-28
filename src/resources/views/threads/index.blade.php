<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>スレッド一覧</title>
</head>
<body>
    <form action="/threads" method="post">
        <div>スレッドの作成</div>
        <div>
            @csrf
            <input type="text" name="title" placeholder="スレッドタイトル">
            <input type="submit" value="作成">
        </div>
    </form>
    @foreach ($threads as $thread)
        <a href="{{ route('threads.show', ['id' => $thread->id]) }}">{{ $thread->title }}</a>
    @endforeach
</body>
</html>
