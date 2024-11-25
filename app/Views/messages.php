<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <title>Produtos Mensagens</title>
</head>
<body>
  <div class="container mt-5">
    <div class="alert alert-info">
      <?php echo $message; ?>
      <p class="mt-3"><?php echo anchor(base_url(), 'Voltar a Página inicial.', ['class' => 'btn btn-secondary'])?></p>
    </div>
  </div>
</body>
</html>