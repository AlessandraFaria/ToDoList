<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <title>Sistemas de Rotas</title>
</head>
<body>
  <h1>Lista de Rotas Cadastradas</h1>
  
  <table class="table">
    <?php  foreach ($rotas as $r):  ?>
    <tr>
      <td><?= $r-> email ?></td>
      <td><?= $r-> destino ?></td>
      <td><?= $r-> lat ?></td>
      <td><?= $r-> log ?></td>
      <td><?= $r-> hora ?></td>
      <td><?= $r-> hora_chegada ?></td>
      <td><?= $r-> data ?></td>
        <td><a href="/empresas/rotas"></a></td>
        <span class="glyphicon glyphicon-search"></span>
    </tr>
  <?php endforeach ?>
  </table>

</body>
</html>