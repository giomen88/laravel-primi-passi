<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>LISTA DELLA SPESA</h2>
    <ul>
        @foreach ($shopping_list as $item)
        <li> {{$item}} </li>
        @endforeach
</ul>
</body>
</html>

