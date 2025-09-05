<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2 + $nota3) / 3;

echo "<h2>Média Final: " . number_format($media, 2) . "</h2>";

if ($media >= 7) {
    echo "<p style='color:green;'>Situação: Aprovado</p>";
} elseif ($media >= 5) {
    echo "<p style='color:orange;'>Situação: Recuperação</p>";
} else {
    echo "<p style='color:red;'>Situação: Reprovado</p>";
}
?>
