<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая страничка</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Вторая страница</h1>

    <p>{{ $num+10 }}</p>
    <p>{{ $str.', world!' }}</p>
    <div>
    @for ($i = 0; $i < count($mas); $i++)
        <p>{{ $mas[$i] }}</p>
    @endfor
    </div>
</body>
</html>