<div class="container">
    <div class="row mt-5">
        <h1>Gestão de Tarefas</h1>
    </div>
    <div class="row mt-5">
    
    <form action="<?php echo base_url('Gestor/login'); ?>" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
        
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>

        <button type="submit" class="btn btn-primary">Logar!</button>
        </form>
        <?php if (isset($error) && $error): ?>
            <div class="mt-5 alert alert-danger">
                <?php "<br>"; echo $error; ?>
            </div>
    <?php endif; ?>
    </div>
</div>
<br>
<div class="container">
    <div class="mb-3">
        <form action="<?php echo base_url('Gestor/cadastrar'); ?>" method="post">
            <button type="submit" class="btn btn-warning">Cadastrar-se!</button>
        </form>
    </div>
</div>