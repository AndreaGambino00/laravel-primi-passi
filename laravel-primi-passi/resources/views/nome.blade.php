<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<body>
    <h1>ulteriori info utente</h1>

    <h2 ><em>Client </em> - {{$fullName}}</h2>
    <h2 ><em>Adress</em> - {{$adress}}</h2>
    <h2 ><em>City</em> - {{$city}}</h2>

   <a href="{{ route('startPage') }}">home</a>

</body>
</html>