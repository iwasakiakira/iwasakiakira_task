<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
<title>{{ $task->title }}</title>
</head>
<body>
    <h1>タスク詳細</h1>
<p>
<b>タイトル : {{ $task->title }}</b>
</p>
<p>
<b>詳細 : {{ $task->body }}</b>
</p>

<a href="/tasks/"><button>TOP</button></a>


<a href="/tasks/{{ $task->id }}/edit"><button>UPDATE</button></a>

<div id=" tmp2nd " style="display: inline-block; _display: inline;">
<form action="/tasks/{{ $task->id }}" method="post">
    
    @csrf
    @method('DELETE')
    <input type="submit" value="DERETE" onclick="if(!confirm('削除しますか？')){return false};">
</form>

</body>
</html>