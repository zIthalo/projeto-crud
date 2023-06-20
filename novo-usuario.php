<h1>Novo usuário</h1>
<form action="?page=salvar" method="POST">

    <input type="hidden" name="acao" value="cadastrar">
    <!--aqui ↑ serve para mandar para a pagina salvar com os dados ocultos-->
    <div class="mb-3">
    </div>
    <!-- cada mb3 significa margin bottom-->
    <label for="">Nome</label>

    <input type="text" name="nome" class="form-control">
    <!--form-control é uma classe do bootstrap -->

    <div class="mb-3">

        <label for="">Email</label>
        <input type="email" name="email" class="form-control">

    </div>

    <div class="mb-3">

        <label for="">Senha</label>

        <input type="password" name="senha" class="form-control">

    </div>

    <div class="mb-3">

        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control">

    </div>

    <div class="mb-3">

        <button type="submit" class="btn btn-primary">Enviar</button>
        <!--btn-primary é uma classe bootstrap que já
            adiciona estilo assim como todas as classes bootstrap -->

    </div>

</form>