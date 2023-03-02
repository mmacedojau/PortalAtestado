<h1> Editar Atestado </h1>
<?php
    $sql = "SELECT * FROM eventos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome: </label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Matrícula: </label>
        <input type="text" name="matricula" value="<?php print $row->matricula; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Setor: </label>
        <input type="text" name="setor" value="<?php print $row->setor; ?>"  class="form-control">
    </div>
    <div class="mb-3">
        <label>Data: </label>
        <input type="date" name="data" value="<?php print $row->data; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>