<!doctype html>
<html>

<head>

    <title>EndriAzizi</title>

</head>

<body>
<!-- php comments -->
{{-- blade comments --}}


     {{-- filter views with foreach --}}
     
<!--<ul>     
     <?php foreach ($tasks as $task) : ?>

        <li><?= $task; ?></li>

     <?php endforeach; ?>
</ul> -->

{{-- equivalent to: --}}
<ul>
@foreach ($tasks as $task)
   {{--  <li>This is user {{ $task }}</li> --}}
  <li> {{$task->body}} </li>
@endforeach
</ul>

</body>

</html>
