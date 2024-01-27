<?php
include "../inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }
    iframe {
      width: 100%;
      height: 100%;
      border: none; /* İsteğe bağlı olarak çerçeve kenarı ekleyebilirsiniz */
    }
  </style>
</head>
<body>
  <iframe id="myIframe" src="https://<?=$main['sitelink']?>.com/rules/tr/12381/29738/promosyonlar/" frameborder="0" allowfullscreen></iframe>
</body>
</html>
