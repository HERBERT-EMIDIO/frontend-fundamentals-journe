<?php
/* ==========================================
   [ PHP BASICS - VARIABLES ]
   Goal: Learn how to store and display data.
   Objetivo: Aprender como armazenar e exibir dados.
   ========================================== 
*/

// In PHP, variables start with $
$shopName = "Brew & Beans";
$foundingYear = 2025;

// Translation: "Welcome to our shop"
$welcomeMessage = "Welcome to " . $shopName . "!"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $shopName; ?> | Premium Coffee</title>
</head>

<body>
    <h1><?php echo $welcomeMessage; ?></h1>
    <p>Serving quality coffee since <?php echo $foundingYear; ?>.</p>
</body>

</html>