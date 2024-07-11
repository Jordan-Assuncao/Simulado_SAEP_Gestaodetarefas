<div class="container">
    <div class="row mt-5">
        <h1>BEM VINDO A GESTÃO DE TAREFAS, GESTOR: <?php echo htmlspecialchars($_SESSION['nome']);?></h1>
    </div>
    <div class="row mt-5">
    
    <form action="<?php echo base_url('Equipe/cadastrar_equipe'); ?>" method="post">
        <button type="submit" class="btn btn-primary">Cadastrar Equipe!</button>
        </form>
    </div>
</div>
<br>
<div class="container">
    <div class="row mt-5">
        <h1>Sua lista de equipes</h1>
        <br>
        <?php if (empty($equipes_gestor)): ?>
            <p>O gestor não possui equipes cadastradas.</p>
        <?php else: ?>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descricao</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($equipes_gestor as $equipe): ?>
                        <tr>
                            <td><?php echo $equipe->nome_equipe; ?></td>
                            <td><?php echo $equipe->descricao; ?></td>
                            <td><a class="btn btn-danger" href="<?php echo base_url('/Equipe/deletar/'.$equipe->idequipe)?>"><i class="fa fa-trash" aria-hidden="true"></i> Excluir</a></td></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>
<br>
<div class="container">
    <div class="mb-3">
        <form action="<?php echo base_url('Tarefas/cadastrar_tarefa'); ?>" method="post">
            <button type="submit" class="btn btn-warning">Cadastrar Tarefa!</button>
        </form>
    </div>
</div>
<br>
<div class="container">
    <div class="mb-3">
        <form action="<?php echo base_url('Gestor/logout'); ?>" method="post">
            <button type="submit" class="btn btn-danger">Logout!</button>
        </form>
    </div>
</div>
</div>