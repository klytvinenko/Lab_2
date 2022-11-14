<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Lab 3</title>

</head>

<style>
    body {
        background-color: rgb(255, 255, 255);
    }

    #root {
        top: 36%;
        left: 18%;
        transform: translate(-50%, -50%);
    }

    .btn-go-to-back {
        border-radius: 100%;
        position: fixed;
        width: 200px;
        height: 40px;
        border: 3px solid #000;
        margin-right: auto;
        font-weight: bold;
        top: 80%;
        left: 81%;
    }

    .btn-go-to-back:hover {
        cursor: pointer;
        background: red;
        color: #fff;
        font-weight: bold;
    }

    .btn-go-to-table {
        border-radius: 100%;
        width: 200px;
        height: 40px;
        border: 3px solid #000;
        margin-right: auto;
        font-weight: bold;
        position: fixed;
        top: 90%;
        left: 81%;
    }

    .btn-go-to-table:hover {
        cursor: pointer;
        background: green;
        color: #fff;
        font-weight: bold;
    }
</style>


<form action="nap.php" method='post'>
    <?php
    $arr = file("napr.txt");
    sort($arr);

    for ($i = 0; $i < count($arr); $i++) {
        $text = $arr[$i];
            echo "<div style='margin: 10px;'><input type='radio' id='choice' name='choice' value='".$text."'>
            <label for='choice'>".$text."</label></div>";
    }

    ?>
    <button class='btn-go-to-table'>
        Send a request </button>
</form>

<form action="index.php">
    <button class='btn-go-to-back'>
        <= Back </button>
</form>

</html>