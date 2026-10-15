<?php
include('layouts/header.php');

$data_nascimento = $_POST['data_nascimento'] ?? null;

if (!$data_nascimento){
    header("Location: index.php");
    exit;
}

// Carregar o arquivo XML
$signos = simplexml_load_file("signos.xml");

//Converter a data enviada (YYYY-MM-DD) para dia e mês
$data_user = new DateTime($data_nascimento);
$dia_mes_user = $data_user->format('m-d');

$signo_encontrato = null;

foreach ($signos->signo as $signo){
    //Tranforma dd/mm em MM-DD para comparar com facilidade
    $partes_inicio = explode('/', (string)$signo->dataInicio);
    $parte_fim = explode('/', (string)$signo->dataFim);

    $inicio = sprintf('%02d-%02d', $partes_inicio[1], $partes_inicio[0]);
    $fim = sprintf('%02d-%02d', $parte_fim[1], $parte_fim[0]);

    // Trata o caso Capricórnio que cruza o fim/início do ano

    if ($inicio > $fim){
        if($dia_mes_user >= $inicio || $dia_mes_user <= $fim){
            $signo_encontrato = $signo;
            break;
        }
    }else{
        if($dia_mes_user >= $inicio && $dia_mes_user <= $fim){
            $signo_encontrato = $signo;
            break;
        }
    }
}

?>

<div class="container mt-5">
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 text-center">
                    <?php if ($signo_encontrato): ?>
                        <span class="badge bg-primary text-wrap mb-3 py-2 fs-6">Seu Signo</span>
                        <h2 class="card-title display-5 fw-bold text-primary mb-3"><?= htmlspecialchars($signo_encontrato->signoNome) ?></h2>
                        <p class="text-muded mb-2"><strong>Período: </strong><?= htmlspecialchars($signo_encontrato->dataInicio) ?> a <?= htmlspecialchars($signo_encontrato->dataFim) ?></p>
                        <hr class="my-3">
                        <p class="card-text fs-5 text-secondary"><?= htmlspecialchars($signo_encontrato->descricao) ?></p>
                        <?php else: ?>
                            <div class="alert alert-warning" role="alert">
                                Não foi possível determinar o signo com a data fornecida.
                            </div>
                        <?php endif; ?>

                        <a href="index.php" class="btn btn-outline-primary mt-4 px-4">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>