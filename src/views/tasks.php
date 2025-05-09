<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List em PHP</title>
    <!-- Bootstrap 5 CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Tarefas em PHP</h1>
        <form class="row g-3 mb-4" method="post">
        <input type="hidden" name="action" value="add">
            <div class="col">
                <input type="text" name="description" class="form-control" placeholder="Digite uma tarefa" required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success">Adicionar</button>
            </div>
        </form>

    <!-- Lista de tarefas -->
     <ul class="list-group">
      <?php if(empty($tasks)): ?>
      <li class="list-group-item text-center text-mutted">
          Nenhuma tarefa adicionada
      </li> 
      <?php endif; ?>
     </ul>
    </div>
</body>
</html>