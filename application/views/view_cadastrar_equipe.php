<div class="container">
    <div class="row mt-5">
        <h1>Cadastro de Equipe</h1>
    </div>
    <div class="row mt-5">    
    <form action="salvar_nova_equipe" method="post">
        <div class="mb-3">
            <label for="nome_equipe" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome_equipe" name="nome_equipe" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descricao</label>
            <input type="text" class="form-control" id="descricao" name="descricao" required>
        </div>
        <input type="hidden" id="gestor_idgestor" name="gestor_idgestor" value="<?php echo $user_id; ?>">
        <button type="submit" class="btn btn-primary">Cadastrar!</button>
        </form>
    </div>
</div>