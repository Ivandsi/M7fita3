<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2 de la Fita 3</title>
    <style>
        form {
            width: 90%;
            padding: 0 2.5%;
        }

        label {
            display: block;
            font-weight: bold;
        }

        textarea {
            width: 100%;
            height: auto;
            resize: none;
            border: 2px solid #220901;
        }

        input[type="text"] {
            width: 100%;
            border: 2px solid #220901;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['comentari']) && isset($_POST['separador'])) {
        $comentari = $_POST['comentari'];
        $separador = $_POST['separador'];

        if (!file_exists('comentaris.txt')) {
            file_put_contents('comentaris.txt', '');
        }

        $comentari = str_replace(' ', $separador, $comentari);

        file_put_contents('comentaris.txt', $comentari . "\n", FILE_APPEND);
    }

    ?>

    <h2>Introdueix dades</h2>
    <form action="" method="post">
        <label for="comentari">Comentari:</label>
        <textarea id="comentari" name="comentari" rows="10" cols="50"></textarea>
        <label for="separador">Separador:</label>
        <input type="text" id="separador" name="separador" />
        <button type="submit">Enviar</button>
    </form>
</body>

</html>