<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
   <!-- nav baar -->
   <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Damon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item <?= ($activePage == 'show') ? 'active':''; ?>">
          <a class="nav-link" href="show.php">show</a>
        </li>
    </div>
  </nav>

   <!-- nav baar -->
