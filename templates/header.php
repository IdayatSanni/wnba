<?php

include(__DIR__ . '/../admin/functions.php');



$user_logged_in = isset($_SESSION['id']); // If user is logged in
$is_player_logged_in = isset($_SESSION['player_id']); // If player is logged in (assuming you set 'player_id' for player login)
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WNBA Drafts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .navbar {
      color: #000;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 900px) {
      .column {
        width: 50%;
      }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
      }
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }

    button:hover, a:hover {
      opacity: 0.7;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="\wnba\index.php">Home</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if ($user_logged_in): ?>
          <!-- If user is logged in, show both Player Admin and Award Admin -->
          <li class="nav-item">
            <a class="nav-link" href="\wnba\admin\playerAdmin.php">Player Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="\wnba\admin\awardAdmin.php">Award Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="\wnba\admin\logout.php">Log out</a>
          </li>
        <?php elseif ($is_player_logged_in): ?>
          <!-- If player is logged in, only show the logout option -->
          <li class="nav-item">
            <a class="nav-link" href="\wnba\admin\logout.php">Log out</a>
          </li>
        <?php else: ?>
          <!-- If no one is logged in, show login button or other links -->
          <li class="nav-item">
            <a class="nav-link" href="\wnba\admin\login.php">Login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>