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
  <li> {{$task->body}} </li>
@endforeach
</ul>

</body>

</html>
