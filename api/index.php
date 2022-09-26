<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Index.php</title>
    <style type="text/css">
      html, body{
    padding: 3px;
    margin: 0;
    min-height: 100px;
  }
  
  .progress-bar{
    height: 50px;
    padding: 5px;
    background-color: #ccc;
    display: flex;
    position: absolute;
    bottom: 1%;
  }
  
  .progress-bar::before{
    content: "";
    width: 1%;
    background-color: blue;
  }

    </style>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Estamos Trabalhando</h1><br>
    <div class="progress-bar" ></div>

  </body>
</html>
