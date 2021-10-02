<header>
    <h3>Cadastrar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=inserir_contato" method="post">
        <div class="mb-3">
            <label class="form-label" for="nomeContato">Nome</label>
            <input class="form-control" type="text" name="nomeContato">
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailContato">E-mail</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input class="form-control" type="email" name="emailContato">
            </div>
            
        </div>

        

        <div class="mb-3">
            <label class="form-label" for="endereco">Endereço</label>
            <input class="form-control" type="text" name="endereco">
        </div>

        
        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label" for="telefoneContato">Telefone</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input class="form-control" type="text" name="telefoneContato">
                </div>
            </div>

            <div class="mb-3 col-3">
                <label class="form-label" for="sexoContato">Sexo</label>
                <select class="form-select" name="sexoContato" id="sexoContato">
                    <option selected>Selecionar...</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>

            <div class="mb-3 col-3">
                <label class="form-label" for="dataNascContato">Data Nascimento</label>
                <input class="form-control" type="date" name="dataNascContato">
            </div>


        </div>
                <div class="mb-3">
            <button class="btn btn-primary" type="submit" name="btnSalvar">Salvar</button>
        </div>
    </form>
</div>