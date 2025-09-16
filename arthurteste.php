<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Comentários</title>
   <style>
    body {
        font-family: 'Segoe UI', Arial, sans-serif;
        background: linear-gradient(135deg, #e3f0ff 0%, #f4f4f4 100%);
        padding: 0;
        margin: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    h2, h3 {
        color: #007BFF;
        text-align: center;
    }
    form {
        background: #fff;
        padding: 50px 50px;
        border-radius: 20px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        max-width: 400px;
        width: 100%;
        margin-bottom: 10px;
    }
    label {
        font-weight: 500;
        color: #333;
    }
    input[type="text"], textarea {
        width: 100%;
        padding: 12px 12px;
        margin-top: 6px;
        margin-bottom: 16px;
        border: 1px solid #d0d7de;
        border-radius: 8px;
        background: #f8fafc;
        font-size: 1em;
        transition: border-color 0.2s;
    }
    input[type="text"]:focus, textarea:focus {
        border-color: #007BFF;
        outline: none;
    }
    button[type="submit"] {
        background: linear-gradient(90deg, #007BFF 60%, #0056b3 100%);
        color: #fff;
        border: none;
        padding: 12px 28px;
        border-radius: 8px;
        font-size: 1em;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(0,123,255,0.08);
        transition: background 0.2s, transform 0.2s;
    }
    button[type="submit"]:hover {
        background: linear-gradient(90deg, #0056b3 60%, #007BFF 100%);
        transform: translateY(-2px) scale(1.03);
    }
    .comentario {
        background: #fff;
        padding: 18px 20px;
        margin-top: 18px;
        border-left: 5px solid #007BFF;
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        max-width: 400px;
        width: 100%;
        word-break: break-word;
        transition: box-shadow 0.2s;
    }
    .comentario:hover {
        box-shadow: 0 4px 24px rgba(0,123,255,0.12);
        border-left: 5px solid #0056b3;
    }
    .nome {
        font-weight: bold;
        color: #007BFF;
        font-size: 1.08em;
        letter-spacing: 0.5px;
    }
    .mensagem {
        display: block;
        margin: 10px 0 6px 0;
        color: #222;
        font-size: 1em;
        line-height: 1.5;
    }
    .data {
        font-size: 0.92em;
        color: #888;
        font-style: italic;
        float: right;
        margin-top: 6px;
    }
    @media (max-width: 500px) {
        body {
            padding: 8px;
        }
        h2, h3 {
            font-size: 1.2em;
        }
        form {
            max-width: 98vw;
            padding: 16px 8px;
            font-size: 0.98em;
        }
        .comentario {
            max-width: 98vw;
            padding: 12px 8px;
            font-size: 0.97em;
        }
        input[type="text"], textarea {
            font-size: 0.98em;
            padding: 8px 8px;
        }
        button[type="submit"] {
            padding: 10px 16px;
            font-size: 0.98em;
        }
        .nome {
            font-size: 1em;
        }
        .mensagem {
            font-size: 0.97em;
        }
        .data {
            font-size: 0.85em;
        }
    }
</style>
</head>
<body>
    <h2>Deixe seu comentário</h2>
    <form action="salvar.php" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Comentário:</label><br>
        <textarea name="mensagem" rows="4" required></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>

    <h3>Comentários:</h3>
    <?php
        if (file_exists("comentario.txt")) {
            $comentarios = file("comentario.txt");
            foreach ($comentarios as $linha) {
                echo $linha;
            }
        } else {
            echo "Nenhum comentário ainda.";
        }
    ?>
</body>
</html>
