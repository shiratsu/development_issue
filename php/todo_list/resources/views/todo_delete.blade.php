<h1>ToDo List</h1>
<div>
    <h2>タスクを削除</h2>
    <form method="POST" action="/delete/{{$todo->id}}">
        @csrf
        <p>
            タスクの名前：{{$todo->task}}
        </p>
        <p>
            タスクの期限：{{$todo->task_limited_at}}
        </p>

        <input type="submit" name="delete" value="削除">
    </form>
    <a href="/">戻る</a>
</div>
