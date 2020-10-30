    <!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>タスク管理</title>
    </head>
    <body>
    
        <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
    
    <form action="/tasks/{{ $task->id }}" method="post">
        <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
        @csrf
    @method('DELETE')
    <input type="submit" value="DERETE" onclick="if(!confirm('削除しますか？')){return false};">
    
    </form>
    <br>
    @endforeach
    

    <hr>

    <h1>タスク登録</h1>
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
    <form action="/tasks/" method="post">
        @csrf
    <p>
        タイトル : <br>
    <input type="text" name="title" value="{{ '' }}">
    </p>

    <p>
        詳細 : <br>
    <textarea type="text" name="body" ></textarea>
    </p>
    <input type="submit" value="CREATE TASK">
    <br><br>
    </form>
    </body>
    </html>