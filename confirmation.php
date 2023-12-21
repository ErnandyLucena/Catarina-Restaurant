
<?php
session_start();

if (isset($_SESSION["contact_data"])) {
    $contactData = $_SESSION["contact_data"];
} else {

    header("Location: index.html");
    exit();
}

// Limpe a sessão
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Contato</title>
</head>
<body>

<h2>Dados de Contato Recebidos:</h2>
<p><strong>Nome:</strong> <?php echo $contactData["name"]; ?></p>
<p><strong>Email:</strong> <?php echo $contactData["email"]; ?></p>
<p><strong>Telefone:</strong> <?php echo $contactData["phoneNumber"]; ?></p>

</body>
</html>
