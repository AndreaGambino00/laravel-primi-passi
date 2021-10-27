<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
</head>
<body>
    <h1>utente principale</h1>

    <h2 ><em>nome</em> - {{$name}}</h2>
    <h2 ><em>cognome</em> - {{$surname}}</h2>
    <h2 ><em>email</em> - {{$email}}</h2>


    <a href="{{ route('contatto') }}">contact</a>
    <a href="{{ route('contatto_2') }}">second contact</a>
</body>
</html>
