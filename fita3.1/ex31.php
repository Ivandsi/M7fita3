<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1 de la Fita 3</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h2>Processa contacte</h2>
    <?php

    $contacts = file('contactes31.txt');

    echo "<table>\n";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Primer Cognom</th>";
    echo "<th>Segon Cognom</th>";
    echo "<th>Telefon</th>";
    echo "</tr>\n";
    foreach ($contacts as $contact) {
        echo "<tr>";
        $contact_array = explode(", ", $contact);
        foreach ($contact_array as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";

    $contactes_b = "";
    foreach ($contacts as $contact) {
        $contact_array = explode(", ", $contact);
        $contactes_b .= implode('#', $contact_array);
    }
    file_put_contents('contactes31b.txt', $contactes_b);
    ?>
</body>

</html>