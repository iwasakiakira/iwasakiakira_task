<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスク編集</title>
</head>
<body>
    <h1>タスク編集</h1>
    @if (count($errors) > 0)
    <div>
        <P>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/tasks/{{ $task->id }}" method="post">
    @csrf
    @method('PUT')
<p>
    タイトル : <br>
<input type="text" name="title" value="{{ $task->title }}">
</p>

<p>
    詳細 : <br>
<textarea type="text" name="body" ></textarea>
</p>

<input type="submit" value="UPDATE TASK">
<a href="/tasks/{{ $task->id }}"></a>

<INPUT type="button" value="BACK TO SHOW" onClick="history.back()">
</FORM>
</body>
</html>
