<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Ciao Riky!
    </h1>
    
    <p>
        Hai ricevuto un nuovo messaggio da: <br>
        Name: {{$lead->name}} <br>
        Email: {{$lead->email}} 
    </p>
    
    <p>
        Message: <br>
        {{$lead->message}}
    </p>
</body>
</html>