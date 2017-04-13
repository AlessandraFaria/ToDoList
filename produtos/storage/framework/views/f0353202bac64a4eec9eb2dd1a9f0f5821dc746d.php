<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <title>Sistemas de Rotas</title>
</head>
<body>
  <h1>Lista de Empresas Cadastradas</h1> 
  <table class="table">
    <?php  foreach ($empresas as $e):  ?>
    <tr>
      <td><?= $e -> nome ?></td>
      <td><?= $e -> lat ?></td>
      <td><?= $e -> log ?></td>
      <td>
        <a href="/empresas/rotas/<?= $e -> lat ?>">
          Rotas
        </a>
      </td>       
    </tr>
  <?php endforeach ?>
  </table>


</body>
</html>