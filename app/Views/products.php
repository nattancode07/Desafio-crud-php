<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <title>Products</title>
  <script>
    function confirma(){
      if(!confirm('Deseja excluir o registro?')){
        return false;
      }

      return true;
    }
  </script>
</head>
<body>
  <div class="container mt-5">
    <?php echo anchor(base_url('product/create'), 'Novo Produto', ['class' => 'btn btn-success mb-3'])?>
    <table class="table">
      <tr>
        <th>ID</th>
        <th>nome</th>
        <th>quantidade</th>
        <th>preço</th>
        <th>Ações</th>
      </tr>
      <?php foreach($products as $product): ?>
        <tr>
          <td><?php echo $product['id'] ?></td>
          <td><?php echo $product['nome'] ?></td>
          <td><?php echo $product['quantidade'] ?></td>
          <td>R$<?php echo $product['preco'] ?></td>
          <td>
            <?php echo anchor('product/edit/' .$product['id'], 'Editar', ['class' => 'btn btn-outline-primary']) ?>
            <?php echo anchor('product/delete/' .$product['id'], 'Excluir', ['class' => 'btn btn-outline-danger', 'onclick' => 'return confirma()']) ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>
</html>


