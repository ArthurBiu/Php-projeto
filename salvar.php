<?php
date_default_timezone_set('America/Sao_Paulo'); // Garante horário BR

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? '');
    $mensagem = trim($_POST["mensagem"] ?? '');

    if ($nome && $mensagem) {
        $data = date("d/m/Y H:i"); // Ex: 07/08/2025 21:30
        $comentario = "<div class='comentario'>"
            . "<span class='nome'>" . htmlspecialchars($nome) . "</span><br>"
            . "<span class='mensagem'>" . nl2br(htmlspecialchars($mensagem)) . "</span><br>"
            . "<span class='data'>" . $data . "</span>"
            . "</div>\n";
        file_put_contents("comentario.txt", $comentario, FILE_APPEND);
    }
}

header("Location: arthurteste.php");
exit;

