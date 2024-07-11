<div class="container">
    <div class="row mt-5">
        <h1>CADASTRAR TAREFA</h1>
<br>
    </div>
    <div>
    <?php if (empty($equipes_gestor)): ?>
        <p>O Gestor não possui equipe cadastradas.</p>
    <?php else: ?>
        <form action="<?php echo base_url('Servicos/salvar_novo_servico'); ?>" method="post">
            <div class="mb-3">
                <label for="nome_tarefa" class="form-label">Tarefa</label>
                <input type="text" class="form-control" id="nome_tarefa" name="nome_tarefa" required>
            </div>
            <div class="mb-3">
                <label for="prazo" class="form-label">Prazo</label>
                <input type="text" class="form-control" id="prazo" name="prazo" required>
            </div>
            <div class="mb-3">
                <label for="idequipe" class="form-label">Selecione a Equipe</label>
                <select class="form-control" id="idequipe" name="idequipe" required>
                    <?php foreach ($equipes_gestor as $equipe): ?>
                        <option value="<?php echo $equipe->nome_equipe; ?>">
                            Descricao: <?php echo $equipe->descricao; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <input type="hidden" id="gestor_idgestor" name="gestor_idgestor" value="<?php echo $user_id; ?>">
            <button type="submit" class="btn btn-primary mt-3">Cadastrar Tarefa!</button>
        </form>
    <?php endif; ?>
    </div>


</div>