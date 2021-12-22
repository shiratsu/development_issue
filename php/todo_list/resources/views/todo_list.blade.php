<h1>ToDo List</h1>
<div>
    <h2>タスクの一覧</h2>
    <a href="/create-page">タスクを追加</a>
    <table border="1">
        <tr>
            <th>タスクの内容</th>
            <th>タスクの期限</th>
            <th>タスクのstatus</th>
            <th colspan="2">操作</th>
        </tr>
        @foreach($todos as $todo)
        <tr>
            <td>{{$todo->task}}</td>
            <td>{{$todo->task_limited_at}}</td>
            <td>{{Config::get('status.task_status')[$todo->task_status]}}</td>
            <td><a href="/edit-page/{{$todo->id}}">編集</a></td>
            <td><a href="/delete-page/{{$todo->id}}">削除</a></td>
        </tr>
        @endforeach
    </table>
</div>
