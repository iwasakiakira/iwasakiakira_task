<h1>タスク一覧</h1>

<ul>
    @foreach ($tasks as $task)
<li><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></li><br>
    @endforeach
</ul>