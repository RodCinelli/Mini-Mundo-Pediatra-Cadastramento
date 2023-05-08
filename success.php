<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .success-message {
            font-size: 2em;
            color: green;
        }
    </style>
    <title>Mini-Mundo Pediatra - Sucesso</title>
</head>
<body>
    <div class="success-message">
        <?php echo $_GET['message']; ?>
    </div>
</body>
</html>
