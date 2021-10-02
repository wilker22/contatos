<?php 
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbcontatos WHERE id = '$id'";
    $rs = mysqli_query($conexao, $sql) or die ("Erro ao recuperar o contato  " . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
    
?>

<header>
    <h3>Editar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar_contato" method="post">
        <div class="mb-3 col-3">
            <label class="form-label" for="id">ID</label>
            <input class="form-control" type="text" name="id" disabled value="<?php echo $dados['id']?> ">
        </div>
        <div class="mb-3">
            <label class="form-label" for="nomeContato">Nome</label>
            <input class="form-control" type="text" name="nomeContato" value="<?php echo $dados['nomeContato']?>">
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailContato">E-mail</label>
            <input class="form-control" type="email" name="emailContato" value="<?php echo $dados['emailContato']?>">
        </div>

       

        <div class="mb-3">
            <label class="form-label" for="endereco">Endereço</label>
            <input class="form-control" type="text" name="endereco" value="<?php echo $dados['endereco']?>">
        </div>

        <div class="row">
            <div class="mb-3 col-3" >
                <label class="form-label" for="telefoneContato">Telefone</label>
                <input class="form-control" type="text" name="telefoneContato" value="<?php echo $dados['telefoneContato']?>">
            </div>

            <div class="mb-3 col-3">
                <label class="form-label" for="sexoContato">Sexo</label>
                <select class="form-select" name="sexoContato" >
                    <option value="" <?php echo $dados["sexoContato"] == '' ? 'selected' : ''?>>Selecione...</option>
                    <option value="M" <?php echo $dados["sexoContato"] == 'M' ? 'selected' : ''?>>Masculino</option>
                    <option value="F" <?php echo $dados["sexoContato"] == 'F' ? 'selected' : ''?>>Femino</option> 
                    
                </select>
                
            </div>

            <div class="mb-3 col-3">
                <label class="form-label" for="dataNascContato">Data Nascimento</label>
                <input class="form-control" type="date" name="dataNascContato" value="<?php echo $dados['dataNascContato']?>">
            </div>       
        </div>
        

        <div class="mb-3">
            <button class="btn btn-primary" type="submit"  name="btnAtualizar">Atualizar</button>
        </div>
    </form>
</div>