  <?php require_once '../config/config.php'; ?>
  <meta charset="UTF-8" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

  <!-- CSS General -->
  <link rel="stylesheet" href="<?= $config['base_url']; ?>/assets/css/guest/custom.css" />
  <link rel="stylesheet" href="<?= $config['base_url']; ?>/assets/css/guest/style.css" />
  <link rel="stylesheet" href="<?= $config['base_url']; ?>/assets/css/guest/responsive.css" />
  <link rel="shortcut icon" href="<?= $config['base_url']; ?>/assets/img/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?= $config['base_url']; ?>/assets/css/guest/radio-pill.css">
  <link rel="stylesheet" href="<?= $config['base_url']; ?>/assets/css/guest/carousell.css">

  <?php
    $page_name = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
    if ($page_name == "index.php") {
        $page = "HOME PAGE";
    } else {
        $page = "BOOKING PAGE";
    }
    ?>
  <title>RUSSEL STREET MEDICAL CENTRE - <?= $page; ?></title>