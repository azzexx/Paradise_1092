<?php
  //Pages title
  $uri = $_SERVER['REQUEST_URI'];

  $title = "HOME | ";
  $date = "1092";

  if ($uri == "/index.php") {
    $title = "HOME | ";
  } elseif ($uri == "/page2") {
    $title = "Page2 | ";
  } elseif ($uri == "/page3") {
    $title = "Page3 | ";
  } elseif ($uri == "/paradies") {
    $title = "Paradies | ";
  }
?>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1" id="wixDesktopViewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <title><?php echo $title . $date ?></title>
    <link rel="stylesheet" href="assets/stylesh.css">
    <link rel="icon" sizes="192x192" href="assets/pfavico.ico">
    <link rel="apple-touch-icon" href="assets/pfavico.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/pfavico.ico" type="image/x-icon">  
</head>