<?php 
    $id = $_GET["id"];

    $sql = "SELECT * FROM tbcontatos WHERE id = $id";
    $rs = mysqli_query($conexao, $sql) or die ("Erro ao recuperar o contato  " . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar_contato" method="post">
        <div>
            <label for="id">ID</label>
            <input type="text" name="id" value="<?php echo $dados["id"]?> ">
        </div>
        <div>
            <label for="nomeContato">Nome</label>
            <input type="text" name="nomeContato" value="<?php echo $dados["nomeContato"]?>">
        </div>

        <div>
            <label for="emailContato">E-mail</label>
            <input type="email" name="emailContato" value="<?php echo $dados["emailContato"]?>">
        </div>

        <div>
            <label for="telefoneContato">Telefone</label>
            <input type="text" name="telefoneContato" value="<?php echo $dados["telefoneContato"]?>">
        </div>

        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" value="<?php echo $dados["endereco"]?>">
        </div>

        <div>
            <label for="sexoContato">Sexo</label>
            <input type="text" name="sexoContato" value="<?php echo $dados["sexoContato"]?>">
        </div>

        <div>
            <label for="dataNascContato">Data Nascimento</label>
            <input type="date" name="dataNascContato" value="<?php echo $dados["dataNascContato"]?>">
        </div>

        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>