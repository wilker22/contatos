<header>
    <h3>Cadastrar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=inserir_contato" method="post">
        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato">
        </div>

        <div>
            <label for="emailContato">E-mail</label>
            <input type="email" name="emailContato">
        </div>

        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato">
        </div>

        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco">
        </div>

        <div>
            <label for="sexoContato">Sexo</label>
            <input type="text" name="sexoContato">
        </div>

        <div>
            <label for="dataNascContato">Data Nascimento</label>
            <input type="date" name="dataNascContato">
        </div>

        <div>
            <input type="submit" value="Salvar" name="btnSalvar">
        </div>
    </form>
</div>