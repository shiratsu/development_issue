<h1>ToDo List</h1>
<div>
    <h2>タスクを追加</h2>
    <form method="POST" action="/create">
        @csrf
        <p>
            タスク：<input type="text" name="task">
        </p>
        <p>
            タスクの期限：<input type="text" name="task_limited_at">
        </p>
        <input type="submit" name="create" value="追加">
    </form>
    <a href="/">戻る</a>
</div>
