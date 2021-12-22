<h1>ToDo List</h1>
<div>
    <h2>タスクの修正</h2>
    <form method="POST" action="/edit">
        @csrf
        <input type="hidden" name="id" value="{{$todo->id}}">
        <p>
            タスク：<input type="text" name="task" value="{{$todo->task}}">
        </p>
         <p>
         タスクの期限：<input type="text" name="task_limited_at" value="{{$todo->task_limited_at}}">
         </p>
         <input type="submit" name="edit" value="修正">
     </form>
     <a href="/">戻る</a>
 </div>
