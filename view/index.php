<?php session_start(); ?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Twitter Wanabe">


    <title>Twanabitter</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css"/>

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>

<main role="main" class="container">
<form method="POST" action="index.php">
  <div class="jumbotron" class="row align-self-center">
    <h1>Twanabitter</h1>
    <br><p class="lead">Bienvenue sur Twanabitter</p>

    <br><div class="form-group">
        <label class="control-label" for="username">Nom d'utilisateur: </label>
        <input type="text" class="form-control" id="username" name="username" required="required"/>
    </div>
    <div class="form-group">
        <label class="control-label" for="password">Mot de passe: </label>
        <input type="password" class="form-control" id="password" name="password" required="required"/>

    </div>
    <br><a href="index.php"><button class="btn btn-primary btn-lg" name="submit">Se connecter</button></a>

    <br><br><p>Si vous n'avez pas de compte, il suffit d'entrer vos identifiants et le compte se créera automatiquement.</a>
  </div>
</form>
</main><!-- /.container -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script></body>
</html>
