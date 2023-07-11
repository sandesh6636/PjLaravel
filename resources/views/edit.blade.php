
@extends('layouts.app')
@section('head')
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

@endsection
@section('content')
<head>
    <style>
        
table {
    text-transform: capitalize;
  width: 100%;
  border-collapse: collapse;
}

th, td {
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
    letter-spacing:1px;
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

#simpleUsage{
    text-transform: capitalize;
    letter-spacing:1px;
}
h1,h2{
    text-transform: capitalize;
    letter-spacing:2px;
}
h2{
    border: 2px solid transparent;
    border-radius:30px;
}
        </style>
</head>
<h1>Edit Task</h1>
<form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <label for="taskName">Task Name:</label>
    <input type="text" name="taskName" id="taskName" value="{{ $task->taskName }}" required>
    <label for="taskDescription">Task Description:</label>
    <textarea name="taskDescription" id="taskDescription" required>{{ $task->taskDescription }}</textarea>
    <label for="priority">Priority:</label>
    <select name="priority" id="priority" required>
        <option value="low" @if ($task->priority === 'low') selected @endif>Low</option>
        <option value="medium" @if ($task->priority === 'medium') selected @endif>Medium</option>
        <option value="high" @if ($task->priority === 'high') selected @endif>High</option>
    </select>
    <input type="submit" value="Update Task">
</form>
@endsection
