<!doctype html>
<html>

<head>

    <title>EndriAzizi</title>

</head>

<body>
<!-- php comments -->
{{-- blade comments --}}
<ul>
@foreach ($tasks as $task)
  <li> 
  <a href="/tasks/{{$task->id}}">
        {{$task->body}} 
  </a>      
  </li>
@endforeach
</ul>

</body>

</html>
