<?php
$usuario = file("usuarios.txt");//Lê o arquivo como array de linhas

echo "<h2>Lista de Usuários</h2>";

if(count($usuario) > 0) {
  echo "<table border='1' cellpadding='5'>";
  echo "<tr><th>usuario</th><th>matricula</th><th>curso</th><th>idade</th></tr>";

foreach ($usuario as $linha) {
  $dados = explode("|",trim($linha));// separa usuário,matricula,curso,idade
  echo "<tr>";
  foreach ($dados as $dado) {
    echo "<td>". htmlspecialchars(trim($dado)).  "</td>";
 }
 echo "</tr>";
}

echo "</table>";
} else {
   echo "<p>Nenhum usuário cadastrado.</p>";
}
?>
