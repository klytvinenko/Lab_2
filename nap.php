<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lab 3</title>

</head>

<style>
    body {
        background-color: rgb(24, 7, 17);
    }

    #root {
        top: 36%;
        left: 18%;
        transform: translate(-50%, -50%);
    }

    table {
        border-collapse: collapse;
        padding-left: 0px;
        margin: 0, auto;
        color: white;
        text-align: center;
        font-weight: normal;
    }

    th,
    td {
        border: 1px solid white;
    }

    .btn-go-to-back {
        border-radius: 100%;
        position: fixed;
        width: 200px;
        height: 40px;
        border: 3px solid #000;
        margin-right: auto;
        font-weight: bold;
        top: 90%;
        left: 1%;
    }

    .btn-go-to-back:hover {
        cursor: pointer;
        background: red;
        color: #fff;
        font-weight: bold;
    }
</style>

<table style="border-width: 10; width: 250; border-color: white;  border-style: ridge">

    <thead>
        <tr>
            <?php
            $choice = htmlspecialchars($_POST['choice']);
            echo "<th scope='col' style='padding: 20px;'>Напрямок:</th>
            <th scope='col' style='padding: 20px;'>$choice</th>";
            ?>
        </tr>
    </thead>

    <thead>
        <tr>
            <th scope='col' style='padding: 20px;'>N</th>
            <th scope='col' style='padding: 20px;'>Середній бал потрапивших на бюджет</th>
            <th scope='col' style='padding: 20px;'>Число потрапивших на бюджет</th>
            <th scope='col' style='padding: 0px;'>Недобір</th>
            <th scope='col' style='padding: 0px;'>Число контрактників</th>
            <th scope='col' style='padding: 0px;'>ВУЗ</th>
        </tr>
    </thead>

    <?php
    $choice = htmlspecialchars($_POST['choice']);
    $arr = fopen("data.txt", "r");

    while (!feof($arr)) {
        $row = fgets($arr);
        $d = (int)strcmp((string)$row, (string)$choice);
        if (strcmp((string)$row, (string)$choice) == $choice)  {
            $size = fgets($arr);
            for ($i = 1; $i <= $size; $i++) {
                $ter = (float)fgets($arr);
                $gir = (int)fgets($arr);
                $contract = (int)fgets($arr);
                $univ = fgets($arr);
                echo "<tr>
            <th scope='row'>$i</th>
            <th>$ter</th>
            <td>$gir</td>
            <th>-</th>
            <td>$contract</td>
            <td>$univ</td>
           </tr>";
            }
            break;
        }
    }
    fclose($arr);
    echo "</tbody>
      </table>";
    ?>
</table>

<form action="inf1.php">
    <button class='btn-go-to-back'>
        <= Back </button>
</form>

</html>