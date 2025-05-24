<?php
function calcularMedia($data) {
    $avaliacoes = [];
    $quantidade = 0;
    $soma = 0.0;
    $totalPesos = 0.0;

    // $data é a string do POST, ex: tipo0=Prova&nota0=8.5&peso0=40&tipo1=Trabalho&nota1=7.0&peso1=60
    // Vamos quebrar pelos '&' e extrair os valores
    $pares = explode('&', $data);

    // Para organizar, vamos guardar os dados em arrays temporários
    $tipos = [];
    $notas = [];
    $pesos = [];

    foreach ($pares as $par) {
        if (preg_match('/tipo(\d+)=(.*)/', $par, $m)) {
            $idx = intval($m[1]);
            $tipos[$idx] = urldecode($m[2]);
        } elseif (preg_match('/nota(\d+)=(.*)/', $par, $m)) {
            $idx = intval($m[1]);
            $notas[$idx] = floatval($m[2]);
        } elseif (preg_match('/peso(\d+)=(.*)/', $par, $m)) {
            $idx = intval($m[1]);
            $pesos[$idx] = floatval($m[2]);
        }
    }

    $quantidade = max(array_keys($tipos)) + 1;

    for ($i = 0; $i < $quantidade; $i++) {
        if (!isset($notas[$i]) || !isset($pesos[$i])) {
            // Dados incompletos
            continue;
        }
        $peso = $pesos[$i] / 100.0;
        $soma += $notas[$i] * $peso;
        $totalPesos += $peso;
    }

    if ($totalPesos == 0) {
        return -1.0;
    }

    return $soma;
}

// Recebe os dados do POST
$post_data = file_get_contents('php://input');

$media = calcularMedia($post_data);

header("Content-Type: text/html; charset=utf-8");
?>
<html>
<body>
<?php if ($media < 0): ?>
    <p>Erro: pesos inválidos.</p>
<?php else: ?>
    <p>Média final: <?= number_format($media, 2) ?></p>
<?php endif; ?>
</body>
</html>
