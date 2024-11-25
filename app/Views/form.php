<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Edição</title>
</head>
<body>
  <div class="container mt-5">
    <?php echo form_open('product/store') ?>

    <div class="form-group mt-2">
      <label for="nome">Nome:</label>
      <input type="text" value="<?php echo isset($product['nome']) ? $product['nome'] : ''?>" name="nome" id="nome" class="form-control">
    </div>

    <div class="form-group mt-2">
      <label for="quantidade">Quantidade:</label>
      <input type="text" value="<?php echo isset($product['quantidade']) ? $product['quantidade'] : ''?>" name="quantidade" id="quantidade" class="form-control">
    </div>

    <div class="form-group mt-2">
      <label for="preco">Preço:</label>
      <input type="text" value="<?php echo isset($product['preco']) ? $product['preco'] : ''?>" name="preco" id="preco" class="form-control">
    </div>

    <input type="submit" value="Salvar" class="btn btn-primary mt-3">
    <input type="hidden" name="id" value="<?php echo isset($product['id']) ? $product['id'] : ''?>">

    <?php echo form_close() ?>

  </div>
</body>
</html>