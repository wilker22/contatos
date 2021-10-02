<header>
    <h3><i class="bi bi-person-square"></i> Contatos</h3>
</header>

<div>
    <a class="btn btn-secondary mb-2" href="index.php?menuop=novo"><i class="bi bi-person-plus-fill"></i> Novo Contato</a>
</div>
<form action="index.php?menuop=contatos" method="post">
    <div class="input-group">
        <input class="form-control" type="text" name="txt_pesquisa">
        <button class="btn btn-success btn-sm" type="submit"><i class="bi bi-search"></i> Pesquisar  </button>
    </div>
</form>

<div class="tabela table-sm">
<table class="table table-dark table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Sexo</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            //variáveis para paginação
            $quantidade = 10;
            $pagina = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1; 
            $inicio = ($quantidade * $pagina) - $quantidade;

        //sql para o pesquisar
            $txt_pesquisa = (isset($_POST["txt_pesquisa"])) ? $_POST["txt_pesquisa"] : "";

        //sql para a tabela
            $sql = "SELECT
                        id,
                        upper(nomeContato) as nomeContato,
                        lower(emailContato) as emailContato,
                        telefoneContato,
                        upper(endereco) as endereco,
                        
                        CASE
                            WHEN sexoContato = 'F'  THEN 'FEMININO'
                            WHEN sexoContato = 'M'  THEN 'MASCULINO'
                        ELSE
                            'NÃO ESPECIFICADO'
                        END AS sexoContato,
                        
                        DATE_FORMAT(dataNascContato,'%d/%m/%Y') AS dataNascContato
                    FROM tbcontatos
                    WHERE id = '$txt_pesquisa' 
                    OR nomeContato LIKE '%$txt_pesquisa%'
                    ORDER BY nomeContato ASC
                    LIMIT $inicio,$quantidade ";
            $rs = mysqli_query($conexao,$sql) or die("Erro ao tentar conectar" . mysqli_error($conexao));

            while($dados = mysqli_fetch_assoc($rs)){
        ?>
                <tr>
                    <td><?= $dados["id"]?></td>
                    <td class="text-nowrap"><?= $dados["nomeContato"]?></td>
                    <td class="text-nowrap"><?= $dados["emailContato"]?></td>
                    <td class="text-nowrap"><?= $dados["telefoneContato"]?></td>
                    <td class="text-nowrap"><?= $dados["endereco"]?></td>
                    <td class="text-nowrap"><?= $dados["sexoContato"]?></td>
                    <td class="text-nowrap"><?= $dados["dataNascContato"]?></td>
                    <td >
                        <a class="btn btn-outline-warning" href="index.php?menuop=editar_contato&id=<?= $dados["id"] ?>"><i class="bi bi-pencil-square"></i></a>
                        <a class="btn btn-outline-danger" href="index.php?menuop=excluir_contato&id=<?= $dados["id"] ?>"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </tbody>
</table>
</div>
<br>
<ul class="pagination justify-content-center">
<?php
    $sqlTotal = "SELECT id FROM tbcontatos";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die (mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPagina = ceil($numTotal/$quantidade);
    echo "<li class='page-item'><span class='page-link'>Total de registros: ". $numTotal ."</span> </li>";

    echo '<li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=1">Primeira</a></li>';

    if($pagina>3){
        ?>
            <li class="page-item"><a class="page-link"  href="?menuop=contatos&pagina=<?php echo $pagina-1?>"> << </a></li>
        <?php

    }

    for($i=1;$i<=$totalPagina;$i++){
        if($i>=($pagina-3) && $i<= ($pagina+3)){
            if($i==$pagina){
                echo " <li class='page-item active'><span class='page-link'>$i</span></li>";
            }else{
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=contatos&pagina=$i \"> $i</a></li> ";
            }
        }
       
    }
    
    if($pagina<($totalPagina-2)){
        ?>
             <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina+1?>"> >> </a></li>
        <?php

    }

    
    echo "<li class='page-item'><a class='page-link' href=\"?menuop=contatos&pagina=$totalPagina\">Última</a></li>";
    ?>
</ul>
