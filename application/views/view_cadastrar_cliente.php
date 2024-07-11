<div class="container">
    <div class="row mt-5">
        <h1>Cadastro de gestor</h1>
    <div class="row mt-5">
    
    <form action="salvar_novo_gestor" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
        
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar!</button>
        </form>
    </div>
    <br>
    <form action="../Gestor/index" method="post">
        <div>
            <br>
        <button type="submit" class="btn btn-danger">Voltar!</button>
        </div>
        </form>
    </div>
</div>