@extends('layouts.app')
@section('head')


@endsection
@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>To-Do List</title>
    <style>
          :root {
  --dark-color: #00203FFF;
  --darker-color: #084C61FF;
  --darkest-color: #07689F;
  --light-color: #B5D9EB;
  --lighter-color: #CEE6F2;
  --lightest-color: #FEFFFF;
}

   body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  padding-top: 200px;
  min-height: 100vh;
  }

        table {
            text-transform: capitalize;
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-transform: capitalize;
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        form {
            margin-top: 30px;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        form input[type="text"],
        form textarea,
        form select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Add this CSS to style the Edit and Delete buttons */

        table {
            margin-top: 10px;
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .actions {
            display: flex;
            justify-content: space-around;
        }

        .actions a {
            text-transform: capitalize;
            letter-spacing: 1px;
            padding: 5px 10px;
            border-radius: 3px;
            text-decoration: none;
            color: #fff;
        }

        .edit {
            background-color: #4caf50;
        }

        .delete {
            background-color: #f44336;
        }

        .actions a:hover {
            opacity: 0.8;
        }

        #simpleUsage {
            text-transform: capitalize;
            letter-spacing: 1px;
        }

        h1,
        h2 {
            text-transform: capitalize;
            letter-spacing: 2px;
        }

        h2 {
            border: 2px solid transparent;
        }
    </style>
</head>

<body>
    <header>

    </header>

    <h1>To-Do List</h1>

    <!-- Display the tasks -->
    <table>
        <tr>
            <th>Task Name</th>
            <th>Task Description</th>
            <th>Priority</th>
        </tr>
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->taskName }}</td>
            <td>{{ $task->taskDescription }}</td>
            <td>{{ $task->priority }}</td>
            <td class="actions">
        <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="edit">Edit</a>
        <a href="{{ route('tasks.delete', ['id' => $task->id]) }}" class="delete">Delete</a>
    </td>
        </tr>
        @endforeach
    </table>

    <!-- Add/Edit task form -->
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <input type="hidden" name="taskId" value="{{ $taskId ?? '' }}">
        <label for="taskName">Task Name:</label>
        <input type="text" name="taskName" id="taskName" value="{{ $taskName ?? '' }}" required>
        <label for="taskDescription">Task Description:</label>
        <textarea name="taskDescription" id="taskDescription" required>{{ $taskDescription ?? '' }}</textarea>
        <label for="priority">Priority:</label>
        <select name="priority" id="priority" required>
            <option value="low" @if ($priority ?? ''==='low' ) selected @endif>Low</option>
            <option value="medium" @if ($priority ?? ''==='medium' ) selected @endif>Medium</option>
            <option value="high" @if ($priority ?? ''==='high' ) selected @endif>High</option>
        </select>
        <input type="submit" value="Save Task">
    </form>

    <script>

   </script>
</body>

</html>
@endsection