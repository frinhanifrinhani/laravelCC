<html>
<header>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    
    <title>
        Controle de estoque
    </title>
</header>
<body>
<div class="container">
<h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
    <?php 

    foreach ($produtos as $p): ?>
        <tr>
        <td><?= $p->nome ?> </td>
        <td><?= $p->valor ?> </td>
        <td><?= $p->descricao ?> </td>
        <td><?= $p->quantidade ?> </td>
        <td>
        <a href="/produtos/mostra/<?= $p->id ?>"
        <span class="glyphicon glyphicon-search"></span>
        </a>
        </span>
            
        </td>
        </tr>
    <?php endforeach ?>
</table>
</div>
</body>
</html>
