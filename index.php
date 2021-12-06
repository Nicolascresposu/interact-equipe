<html>
<head>
  <meta charset="utf-8">
  <meta name="Autor" content="Nicolás Crespo">
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!--Bootstrap end-->
  <link rel="stylesheet" href="page.css">
  <form action="proceso.php" method="post">
    Nombre: <input type="text" name="name"><br>
    Apellido: <input type="text" name="lastname"><br>
    E-mail: <input type="email" name="email"><br>
    Telefono: <input type="text" name="telf"><br>
    Ciudad: <input type="text" name="city"><br>
    Mensaje: <input type="text" name="msg"><br>
    Servicios en los que esta interesado: <br>
    <input type="checkbox" id="serv1" name="serv1" value="Fotografía"><br>
    <label for="serv1"> Fotografía</label><br>
    <input type="checkbox" id="serv2" name="serv2" value="Doblaje/Traducción"><br>
    <label for="serv2"> Fotografía</label><br>
    <input type="checkbox" id="serv3" name="serv3" value="Fotografía"><br>
    <label for="serv3"> Fotografía</label><br>
    <input type="submit">
    
  </form>
</head>
<body>
