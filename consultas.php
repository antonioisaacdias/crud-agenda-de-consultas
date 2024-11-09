<h1>Agenda de consultas</h1>

<?php
    $sql = "SELECT * FROM consultas";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</td>";
        print "<th>MÉDICO</td>";
        print "<th>PACIENTE</td>";
        print "<th>DATA</td>";
        print "<th>HORA</td>";
        print "<th>AÇÕES</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->medico."</td>";
            print "<td>".$row->paciente."</td>";
            print "<td>".date("d/m/Y", strtotime($row->dia))."</td>";
            print "<td>".$row->hora."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que desja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            print "</tr>";
        };
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Não foram encontrados resultados na consulta.</p>";
    };
?>