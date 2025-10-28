<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portal de noticias actualizadas 2025">
    <meta name="author" content="Noticias SON Noticias">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>NOTICIAS SON NOTICIAS 2025</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/blog/blog.css" rel="stylesheet">
    
    <style>
      .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
      }
      .category-icon {
        font-size: 1.2em;
        margin-right: 5px;
      }
      .news-image {
        height: 200px;
        object-fit: cover;
        width: 100%;
      }
      .author-avatar {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 8px;
      }
      .jumbotron {
        background-size: cover;
        background-position: center;
      }
      .read-time {
        font-size: 0.85em;
        color: #6c757d;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="#">
              <i class="fas fa-newspaper me-2"></i>PANTA PISCOCHE JOSÉ DIEGO
            </a>
          </div>
        </div>
      </header>

      <!-- Portada Principal -->
      <?php include("secciones/portada.php"); ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1585829365295-ab7cd400d7be?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'); background-size: cover;">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic">
            <?php echo $portada["titulo"]; ?>
          </h1>
          <p class="lead my-3">
            <?php echo $portada["resumen"]; ?>
          </p>
          <p class="lead mb-0">
            <a href="<?php echo $portada['enlace']; ?>" class="text-white font-weight-bold">
              Continuar leyendo...
            </a>
          </p>
        </div>
      </div>

      <!-- Fila 1: Internacional y Nacional -->
      <?php
        include("secciones/internacional.php");
        include("secciones/nacional.php");
      ?>
      <div class="row mb-2">
        <!-- Tarjeta Internacional -->
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Huracán Melissa">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-primary">
                  <i class="fas fa-globe-americas category-icon"></i>Internacional
                </strong>
                <small class="text-muted"><?php echo $internacional["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $internacional['enlace']; ?>">
                  <?php echo $internacional["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $internacional["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $internacional["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $internacional['enlace']; ?>" class="btn btn-outline-primary btn-sm">Leer más</a>
                <small class="read-time">4 min lectura</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Tarjeta Nacional -->
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1553909489-cd47e0907980?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Protestas en Perú">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-success">
                  <i class="fas fa-flag category-icon"></i>Nacional
                </strong>
                <small class="text-muted"><?php echo $nacional["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $nacional['enlace']; ?>">
                  <?php echo $nacional["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $nacional["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $nacional["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $nacional['enlace']; ?>" class="btn btn-outline-success btn-sm">Leer más</a>
                <small class="read-time">3 min lectura</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fila 2: Economía y Opinión -->
      <?php
        include("secciones/economia.php");
        include("secciones/opinion.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Mercado financiero">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-secondary">
                  <i class="fas fa-chart-line category-icon"></i>Economía
                </strong>
                <small class="text-muted"><?php echo $economia["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $economia['enlace']; ?>">
                  <?php echo $economia["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $economia["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $economia["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $economia['enlace']; ?>" class="btn btn-outline-secondary btn-sm">Leer más</a>
                <small class="read-time">5 min lectura</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Análisis educativo">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-warning">
                  <i class="fas fa-comment category-icon"></i>Opinión
                </strong>
                <small class="text-muted"><?php echo $opinion["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $opinion['enlace']; ?>">
                  <?php echo $opinion["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $opinion["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $opinion["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $opinion['enlace']; ?>" class="btn btn-outline-warning btn-sm">Leer más</a>
                <small class="read-time">6 min lectura</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fila 3: Tecnología y Ciencia -->
      <?php
        include("secciones/tecnologia.php");
        include("secciones/ciencia.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="App móvil">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-primary">
                  <i class="fas fa-microchip category-icon"></i>Tecnología
                </strong>
                <small class="text-muted"><?php echo $tecnologia["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $tecnologia['enlace']; ?>">
                  <?php echo $tecnologia["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $tecnologia["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $tecnologia["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $tecnologia['enlace']; ?>" class="btn btn-outline-primary btn-sm">Leer más</a>
                <small class="read-time">4 min lectura</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Orquídea amazónica">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-success">
                  <i class="fas fa-flask category-icon"></i>Ciencia
                </strong>
                <small class="text-muted"><?php echo $ciencia["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $ciencia['enlace']; ?>">
                  <?php echo $ciencia["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $ciencia["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $ciencia["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $ciencia['enlace']; ?>" class="btn btn-outline-success btn-sm">Leer más</a>
                <small class="read-time">3 min lectura</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fila 4: Cultura y Gente -->
      <?php
        include("secciones/cultura.php");
        include("secciones/gente.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Festival teatro">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-secondary">
                  <i class="fas fa-theater-masks category-icon"></i>Cultura
                </strong>
                <small class="text-muted"><?php echo $cultura["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $cultura['enlace']; ?>">
                  <?php echo $cultura["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $cultura["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $cultura["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $cultura['enlace']; ?>" class="btn btn-outline-secondary btn-sm">Leer más</a>
                <small class="read-time">4 min lectura</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Chef peruana">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-warning">
                  <i class="fas fa-user-friends category-icon"></i>Gente
                </strong>
                <small class="text-muted"><?php echo $gente["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $gente['enlace']; ?>">
                  <?php echo $gente["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $gente["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $gente["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $gente['enlace']; ?>" class="btn btn-outline-warning btn-sm">Leer más</a>
                <small class="read-time">3 min lectura</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fila 5: Deportes, Televisión y Video -->
      <?php
        include("secciones/deportes.php");
        include("secciones/television.php");
        include("secciones/video.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Selección peruana">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-primary">
                  <i class="fas fa-futbol category-icon"></i>Deportes
                </strong>
                <small class="text-muted"><?php echo $deportes["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $deportes['enlace']; ?>">
                  <?php echo $deportes["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $deportes["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $deportes["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $deportes['enlace']; ?>" class="btn btn-outline-primary btn-sm">Leer más</a>
                <small class="read-time">5 min lectura</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Serie peruana">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-success">
                  <i class="fas fa-tv category-icon"></i>Televisión
                </strong>
                <small class="text-muted"><?php echo $television["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $television['enlace']; ?>">
                  <?php echo $television["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $television["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $television["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $television['enlace']; ?>" class="btn btn-outline-success btn-sm">Leer más</a>
                <small class="read-time">4 min lectura</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Video viral">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-info">
                  <i class="fas fa-video category-icon"></i>Video
                </strong>
                <small class="text-muted"><?php echo $video["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $video['enlace']; ?>">
                  <?php echo $video["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $video["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $video["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $video['enlace']; ?>" class="btn btn-outline-info btn-sm">Ver video</a>
                <small class="read-time">2 min vista</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fila 6: Formación, Empleo y Sociedad -->
      <?php
        include("secciones/formacion.php");
        include("secciones/empleo.php");
        include("secciones/sociedad.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Programa formación">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-primary">
                  <i class="fas fa-graduation-cap category-icon"></i>Formación
                </strong>
                <small class="text-muted"><?php echo $formacion["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $formacion['enlace']; ?>">
                  <?php echo $formacion["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $formacion["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $formacion["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $formacion['enlace']; ?>" class="btn btn-outline-primary btn-sm">Leer más</a>
                <small class="read-time">4 min lectura</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1551836026-d5c88ac5d691?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Empleo tecnología">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-success">
                  <i class="fas fa-briefcase category-icon"></i>Empleo
                </strong>
                <small class="text-muted"><?php echo $empleo["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $empleo['enlace']; ?>">
                  <?php echo $empleo["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $empleo["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $empleo["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $empleo['enlace']; ?>" class="btn btn-outline-success btn-sm">Leer más</a>
                <small class="read-time">3 min lectura</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Comunidad Awajún">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-secondary">
                  <i class="fas fa-users category-icon"></i>Sociedad
                </strong>
                <small class="text-muted"><?php echo $sociedad["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $sociedad['enlace']; ?>">
                  <?php echo $sociedad["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $sociedad["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $sociedad["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $sociedad['enlace']; ?>" class="btn btn-outline-secondary btn-sm">Leer más</a>
                <small class="read-time">4 min lectura</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fila 7: OpenStack y Git -->
      <?php
        include("secciones/openstack.php");
        include("secciones/git.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Infraestructura cloud">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-primary">
                  <i class="fas fa-cloud category-icon"></i>OpenStack
                </strong>
                <small class="text-muted"><?php echo $openstack["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $openstack['enlace']; ?>">
                  <?php echo $openstack["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $openstack["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $openstack["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $openstack['enlace']; ?>" class="btn btn-outline-primary btn-sm">Leer más</a>
                <small class="read-time">5 min lectura</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Desarrollo software">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-success">
                  <i class="fab fa-git-alt category-icon"></i>Git
                </strong>
                <small class="text-muted"><?php echo $git["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $git['enlace']; ?>">
                  <?php echo $git["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $git["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $git["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $git['enlace']; ?>" class="btn btn-outline-success btn-sm">Leer más</a>
                <small class="read-time">4 min lectura</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Fila 8: Contenedores y OpenShift -->
      <?php
        include("secciones/contenedores.php");
        include("secciones/openshift.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1627398242454-45a1465c2479?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Contenedores docker">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-secondary">
                  <i class="fab fa-docker category-icon"></i>Contenedores
                </strong>
                <small class="text-muted"><?php echo $contenedores["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $contenedores['enlace']; ?>">
                  <?php echo $contenedores["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $contenedores["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $contenedores["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $contenedores['enlace']; ?>" class="btn btn-outline-secondary btn-sm">Leer más</a>
                <small class="read-time">6 min lectura</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <img class="news-image" src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Plataforma OpenShift">
            <div class="card-body d-flex flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between align-items-center mb-2">
                <strong class="d-inline-block mb-0 text-warning">
                  <i class="fas fa-server category-icon"></i>OpenShift
                </strong>
                <small class="text-muted"><?php echo $openshift["fecha"]; ?></small>
              </div>
              <h3 class="mb-1">
                <a class="text-dark text-decoration-none" href="<?php echo $openshift['enlace']; ?>">
                  <?php echo $openshift["titulo"]; ?>
                </a>
              </h3>
              <div class="mb-2 text-muted d-flex align-items-center">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                <?php echo $openshift["autor"]; ?>
              </div>
              <p class="card-text mb-2">
                <?php echo $openshift["resumen"]; ?>
              </p>
              <div class="d-flex w-100 justify-content-between align-items-center">
                <a href="<?php echo $openshift['enlace']; ?>" class="btn btn-outline-warning btn-sm">Leer más</a>
                <small class="read-time">5 min lectura</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter Section -->
      <div class="row mb-5">
        <div class="col-md-12">
          <div class="card bg-light border-0">
            <div class="card-body text-center py-5">
              <h3 class="card-title">Mantente Informado</h3>
              <p class="card-text">Suscríbete a nuestro newsletter y recibe las noticias más importantes del día</p>
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <div class="input-group">
                    <input type="email" class="form-control" placeholder="Tu correo electrónico">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">Suscribirse</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <footer class="blog-footer bg-dark text-white py-4 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-3">
            <h5>NOTICIAS SON NOTICIAS</h5>
            <p class="text-muted">El portal informativo más confiable del Perú. Actualidad nacional e internacional las 24 horas.</p>
            <div class="social-links">
              <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
              <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <h6>Secciones</h6>
            <ul class="list-unstyled">
              <li><a href="#" class="text-muted">Nacional</a></li>
              <li><a href="#" class="text-muted">Internacional</a></li>
              <li><a href="#" class="text-muted">Economía</a></li>
              <li><a href="#" class="text-muted">Deportes</a></li>
            </ul>
          </div>
          <div class="col-md-2 mb-3">
            <h6>Empresa</h6>
            <ul class="list-unstyled">
              <li><a href="#" class="text-muted">Quiénes Somos</a></li>
              <li><a href="#" class="text-muted">Contacto</a></li>
              <li><a href="#" class="text-muted">Trabaja con Nosotros</a></li>
              <li><a href="#" class="text-muted">Anunciarse</a></li>
            </ul>
          </div>
          <div class="col-md-2 mb-3">
            <h6>Legal</h6>
            <ul class="list-unstyled">
              <li><a href="#" class="text-muted">Términos y Condiciones</a></li>
              <li><a href="#" class="text-muted">Política de Privacidad</a></li>
              <li><a href="#" class="text-muted">Cookies</a></li>
            </ul>
          </div>
        </div>
        <hr class="bg-secondary">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="mb-0 text-muted">&copy; 2025 NOTICIAS SON NOTICIAS. Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
      // Efecto de contador de visitas (simulado)
      document.addEventListener('DOMContentLoaded', function() {
        // Simular contador de lectores en línea
        const onlineReaders = Math.floor(Math.random() * 500) + 1500;
        const onlineElement = document.createElement('div');
        onlineElement.className = 'position-fixed bottom-0 end-0 m-3 p-2 bg-primary text-white rounded small';
        onlineElement.innerHTML = `<i class="fas fa-eye me-1"></i> ${onlineReaders} lectores en línea`;
        document.body.appendChild(onlineElement);
        
        // Smooth scroll para enlaces internos
        $('a[href^="#"]').on('click', function(event) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
          }, 500);
        });
      });
    </script>
  </body>
</html>