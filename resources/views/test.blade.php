<!doctype html>
<html>

<head>

    <title>EndriAzizi</title>

</head>

<body>
<!-- php comments -->
{{-- blade comments --}}
   <!-- <h1>About US,<?= $name, $age; ?></h1>-->

     {{-- filter views with foreach --}}
     
<!--<ul>     
     <?php foreach ($tasks as $task) : ?>

        <li><?= $task; ?></li>

     <?php endforeach; ?>
</ul> -->

{{-- equivalent to: --}}
<ul>
@foreach ($tasks as $task)
    <li>This is user {{ $task }}</li>
@endforeach
</ul>

</body>

</html>
