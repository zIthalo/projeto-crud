<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id =".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    
?>
<form action="?page=salvar" method="POST">

    <input type="hidden" name="acao" value="editar">
    <!--aqui ↑ serve para mandar para a pagina salvar com os dados ocultos-->

    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div class="mb-3">
    </div>
    <!-- cada mb3 significa margin bottom-->
    <label for="">Nome</label>

    <input type="text" value="<?php print $row->nome;?>" name="nome" class="form-control">
    <!--form-control é uma classe do bootstrap -->

    <div class="mb-3">

        <label for="">Email</label>
        <input type="email" value="<?php print $row->email;?>" name="email" class="form-control">

    </div>

    <div class="mb-3">

        <label for="">Senha</label>

        <input type="password" name="senha" class="form-control" required>

    </div>

    <div class="mb-3">

        <label for="">Data de Nascimento</label>
        <input type="date" value="<?php print $row->data_nasc;?>" name="data_nasc" class="form-control">

    </div>

    <div class="mb-3">

        <button type="submit" class="btn btn-primary">Enviar</button>
        <!--btn-primary é uma classe bootstrap que já
            adiciona estilo assim como todas as classes bootstrap -->

    </div>

</form>