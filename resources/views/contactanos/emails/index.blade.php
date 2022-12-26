<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    span,h4{
      color: grey;
    }
  </style>
</head>
<body>
  
  <h1>Datos del contacto</h1>

  <h2><span>Nombre:</span>  {{$informacion['nombre']}}</h2>

  <h3><span>Email:</span> {{$informacion['email']}}</h3>
  <h3><span>Asunto:</span> {{$informacion['asunto']}}</h3>

  <h4>mensaje: </h4>
  <p>
    {{$informacion['mensaje']}}
  </p> 

  

</body>
</html>