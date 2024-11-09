<h1>Agendamento de nova consulta</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do médico:</label>
        <input type="text" name="nome-medico" id="nome-medico" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nome do paciente:</label>
        <input type="text" name="nome-paciente" id="nome-paciente" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data:</label>
        <input type="date" name="dia" id="dia" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Horário:</label>
        <input type="time" name="hora" id="hora" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Agendar</button>
    </div>
</form>