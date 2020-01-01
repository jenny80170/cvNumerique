<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" media="screen and (max-width: 740px)" href="assets/css/petiteResolution.css" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-iqcNtN3rj6Y1HX/R0a3zu3ngmbdwEa9qQGHdkXwSRoiE+Gj71p0UNDSm99LcXiXV" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Curriculum vitae | <?= $page ?> </title>
</head>
<body class="body">
  <!--Début de l'entête-->
  <header>
    <div class="container">
      <div class="row header">
        <div class="col-md-4 col-12">
          <!--Photo professionnel-->
          <img src="assets/img/jennifer.jpg" class="my_img img-fluid" alt="">
        </div>
        <!--Nom et prenom + proffession sur fond noir-->
        <div class="col-md-8 col-12 fontSizeHeader">
          <h1 class="parameterName text-left">Jennifer Malleret</h1>
          <p class="parameterDev text-left">Développeuse Web Junior</p>
        </div>
      </div>
      <!--Début de la barre de navigation-->
      <div class="container-fluid d-flex justify-content-center">
        <nav class="navbar navbar-expand-lg navbar-dark justify-content-center degradeNav m-3">
          <li class="nav-item active navbar ml-4 text-warning mr-3">
            <a class="navbar-brand font-weight-bold" href="index.php">Accueil</a>
          </li>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active navbar ml-4 text-warning">
                <a class="nav-link font-weight-bold" href="formations.php">Formations<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active navbar ml-4 text-warning">
                <a class="nav-link font-weight-bold" href="expériences.php">Expériences<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active navbar ml-4 text-warning">
                <a class="nav-link font-weight-bold" href="compétences.php">Compétences</a>
              </li>
              <li class="nav-item active navbar ml-4 text-warning">
                <a class="nav-link font-weight-bold" href="informatique.php">Informatique</a>
              </li>
              <li class="nav-item active navbar ml-4 text-warning">
                <a class="nav-link font-weight-bold" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!--Fin de la barre de navigation-->
  </header>
  <!--Fin de l'entête-->
