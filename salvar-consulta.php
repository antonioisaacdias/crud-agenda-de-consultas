<?php
    switch ($_REQUEST["acao"]) {
        case "cadastrar":
            $nome_medico = $_POST["nome-medico"];
            $nome_paciente = $_POST["nome-paciente"];
            $dia = $_POST["dia"];
            $hora = $_POST["hora"];

            $sql = "INSERT INTO consultas (paciente, medico, dia, hora) VALUES ('{$nome_paciente}', '{$nome_medico}' , '{$dia}', '{$hora}')";

            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('Agendado com sucesso!');</script>";
                print "<script>location.href='?page=consultas';</script>";
            } else {
                print "<script>alert('Não foi possível agendar!');</script>";
                print "<script>location.href='?page=cadastrar'</script>";
            }
            break;

        case "editar":
            $nome_medico = $_POST["nome-medico"];
            $nome_paciente = $_POST["nome-paciente"];
            $dia = $_POST["dia"];
            $hora = $_POST["hora"];

            $sql = "UPDATE consultas SET
                        paciente = '{$nome_paciente}',
                        medico = '{$nome_medico}',
                        dia = '{$dia}',
                        hora = '{$hora}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('Agendamento editado com sucesso!');</script>";
                print "<script>location.href='?page=consultas';</script>";
            } else {
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=cadastrar'</script>";
            }
            break;
        case "excluir";
            $sql = "DELETE FROM consultas WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('Agendamento excluir com sucesso!');</script>";
                print "<script>location.href='?page=consultas';</script>";
            } else {
                print "<script>alert('Não foi excluir editar!');</script>";
                print "<script>location.href='?page=cadastrar'</script>";
            }
            break;
    }
?>