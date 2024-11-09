<h1>Edição de agendamento></h1>

<?php
    $sql = "SELECT * FROM consultas WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>ID</label>
        <input type="text" value="<?php print $row->id?>" class="form-control" name="id" disabled>
    </div>
    <div class="mb-3">
        <label>Nome do médico:</label>
        <input type="text" name="nome-medico" id="nome-medico" class="form-control" value="<?php print $row->medico; ?>">
    </div>
    <div class="mb-3">
        <label>Nome do paciente:</label>
        <input type="text" name="nome-paciente" id="nome-paciente" class="form-control" value="<?php print $row->paciente; ?>">
    </div>
    <div class="mb-3">
        <label>Data:</label>
        <br/>
        <input type="date" name="dia" id="dia" class="form-control" value="<?php print $row->dia; ?>">
    </div>
    <div class="mb-3">
        <label>Horário:</label>
        <input type="time" name="hora" id="hora" class="form-control" value="<?php print $row->hora; ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
        <button onclick="<script>location.href='?page=consultas';</script>" class="btn btn-danger">Cancelar</button>
    </div>
</form>