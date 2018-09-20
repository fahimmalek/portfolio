<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <h1> Welcome </h1>
    </head>
    <body>
      <ul>

      @foreach ($tasks as $task)

      <li>The task is: {{ $task->body }}</li>

      @endforeach

    </ul>

    </body>
</html>
