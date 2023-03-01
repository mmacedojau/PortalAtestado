<h1> Novo Atestado </h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome: </label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>Matrícula: </label>
        <input type="text" name="matricula" class="form-control">
    </div>
    <div class="mb-3">
        <label>Setor: </label>
        <input type="text" name="setor" class="form-control">
    </div>
    <div class="mb-3">
        <label>Data: </label>
        <input type="date" name="data" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>