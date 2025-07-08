<?php
    require_once("bukutamu.php");
    session_start();

    if (!isset($_SESSION['bukutamu'])){
        $_SESSION['bukutamu']=[];
    }
    if (isset($_post["submit"])){
        $bukutamu = new BukuTamu();
        $bukutamu->timestamp=date ("y-m-d H:i:s");
        $bukutamu->fullname=$_post ["fullname"];
        $bukutamu->email=$_post ("email");
        $bukutamu->message=$_post ("message");
        
        array_push($_SESSION["bukutamu"],$bukutamu);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title center>buku tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h4>daftar kunjungan</h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>timestamp</th>
                    <th>fullname</th>
                    <th>email</th>
                    <th>message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $buku): ?>
                <tr>
                    <td><?= htmlspecialchars ($buku->timestamp) ?></td>
                    <td><?= htmlspecialchars ($buku->fullname) ?></td>
                    <td><?= htmlspecialchars ($buku->email) ?></td>
                    <td><?= htmlspecialchars ($buku->message) ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>

