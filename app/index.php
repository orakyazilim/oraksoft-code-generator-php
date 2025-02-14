<?php
require 'FiAppImports.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="./assets/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vite + TS</title>
    <link rel="stylesheet" href="./assets/index.css" />
</head>
<body>

<p data-bind="text: message"></p>
<button data-bind="click: updateMessage">Mesajı Güncelle</button>

<script type="module" src="./assets/main.js"></script>
</body>
</html>