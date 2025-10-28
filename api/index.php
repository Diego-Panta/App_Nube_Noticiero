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
        margin-bottom: 2rem;
        border: none;
        border-radius: 12px;
        overflow: hidden;
      }
      .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.15) !important;
      }
      .category-icon {
        font-size: 1.1em;
        margin-right: 8px;
      }
      .news-image {
        height: 220px;
        object-fit: cover;
        width: 100%;
      }
      .author-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        margin-right: 10px;
        border: 2px solid #f8f9fa;
      }
      .jumbotron {
        background-size: cover;
        background-position: center;
        margin-bottom: 3rem;
        border-radius: 16px;
      }
      .read-time {
        font-size: 0.85em;
        color: #6c757d;
        background: #f8f9fa;
        padding: 2px 8px;
        border-radius: 12px;
      }
      .news-section {
        margin-bottom: 4rem;
        padding: 2rem 0;
      }
      .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 3px solid #007bff;
        color: #2c3e50;
      }
      .card-body {
        padding: 1.5rem;
      }
      .card-title {
        font-size: 1.3rem;
        line-height: 1.4;
        margin-bottom: 1rem;
        font-weight: 600;
      }
      .card-text {
        line-height: 1.6;
        margin-bottom: 1.5rem;
        color: #555;
      }
      .news-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #e9ecef;
      }
      .category-badge {
        font-size: 0.8rem;
        font-weight: 600;
        padding: 6px 12px;
        border-radius: 20px;
      }
      .author-info {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
      }
      .btn-outline-custom {
        border-width: 2px;
        font-weight: 600;
        padding: 8px 20px;
        border-radius: 25px;
        transition: all 0.3s ease;
      }
      .news-grid {
        gap: 2rem;
      }
      .card-footer-custom {
        background: transparent;
        border-top: 1px solid #e9ecef;
        padding: 1rem 1.5rem;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-4">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="#" style="font-size: 2.5rem;">
              <i class="fas fa-newspaper me-3"></i>PANTA PISCOCHE JOSÉ DIEGO
            </a>
            <p class="text-muted mt-2">Información confiable para una sociedad informada</p>
          </div>
        </div>
      </header>

      <!-- Portada Principal -->
      <?php include("secciones/portada.php"); ?>
      <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark mb-5" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1585829365295-ab7cd400d7be?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'); background-size: cover;">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic mb-4">
            <?php echo $portada["titulo"]; ?>
          </h1>
          <p class="lead my-4" style="font-size: 1.3rem;">
            <?php echo $portada["resumen"]; ?>
          </p>
          <p class="lead mb-0">
            <a href="<?php echo $portada['enlace']; ?>" class="btn btn-light btn-lg px-4">
              <i class="fas fa-book-open me-2"></i>Continuar leyendo
            </a>
          </p>
        </div>
      </div>

      <!-- Sección 1: Internacional y Nacional -->
      <div class="news-section">
        <h2 class="section-title text-center">
          <i class="fas fa-globe-americas me-2"></i>Noticias Principales
        </h2>
        <?php
          include("secciones/internacional.php");
          include("secciones/nacional.php");
        ?>
        <div class="row news-grid">
          <!-- Tarjeta Internacional -->
          <div class="col-md-6">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Huracán Melissa">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-primary text-white">
                    <i class="fas fa-globe-americas category-icon"></i>Internacional
                  </span>
                  <small class="text-muted"><?php echo $internacional["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $internacional['enlace']; ?>">
                    <?php echo $internacional["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $internacional["autor"]; ?></div>
                    <small class="text-muted">Corresponsal Internacional</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $internacional["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $internacional['enlace']; ?>" class="btn btn-outline-primary btn-outline-custom">
                      <i class="fas fa-newspaper me-2"></i>Leer más
                    </a>
                    <span class="read-time">4 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Tarjeta Nacional -->
          <div class="col-md-6">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1553909489-cd47e0907980?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Protestas en Perú">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-success text-white">
                    <i class="fas fa-flag category-icon"></i>Nacional
                  </span>
                  <small class="text-muted"><?php echo $nacional["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $nacional['enlace']; ?>">
                    <?php echo $nacional["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $nacional["autor"]; ?></div>
                    <small class="text-muted">Periodista Nacional</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $nacional["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $nacional['enlace']; ?>" class="btn btn-outline-success btn-outline-custom">
                      <i class="fas fa-newspaper me-2"></i>Leer más
                    </a>
                    <span class="read-time">3 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sección 2: Economía y Opinión -->
      <div class="news-section">
        <h2 class="section-title text-center">
          <i class="fas fa-chart-line me-2"></i>Economía y Análisis
        </h2>
        <?php
          include("secciones/economia.php");
          include("secciones/opinion.php");
        ?>
        <div class="row news-grid">
          <div class="col-md-6">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Mercado financiero">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-secondary text-white">
                    <i class="fas fa-chart-line category-icon"></i>Economía
                  </span>
                  <small class="text-muted"><?php echo $economia["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $economia['enlace']; ?>">
                    <?php echo $economia["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $economia["autor"]; ?></div>
                    <small class="text-muted">Analista Económico</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $economia["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $economia['enlace']; ?>" class="btn btn-outline-secondary btn-outline-custom">
                      <i class="fas fa-newspaper me-2"></i>Leer más
                    </a>
                    <span class="read-time">5 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1589652717521-10c0d092dea9?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Análisis educativo">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-warning text-dark">
                    <i class="fas fa-comment category-icon"></i>Opinión
                  </span>
                  <small class="text-muted"><?php echo $opinion["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $opinion['enlace']; ?>">
                    <?php echo $opinion["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $opinion["autor"]; ?></div>
                    <small class="text-muted">Columnista</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $opinion["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $opinion['enlace']; ?>" class="btn btn-outline-warning btn-outline-custom">
                      <i class="fas fa-newspaper me-2"></i>Leer más
                    </a>
                    <span class="read-time">6 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sección 3: Tecnología y Ciencia -->
      <div class="news-section">
        <h2 class="section-title text-center">
          <i class="fas fa-microchip me-2"></i>Ciencia y Tecnología
        </h2>
        <?php
          include("secciones/tecnologia.php");
          include("secciones/ciencia.php");
        ?>
        <div class="row news-grid">
          <div class="col-md-6">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="App móvil">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-primary text-white">
                    <i class="fas fa-microchip category-icon"></i>Tecnología
                  </span>
                  <small class="text-muted"><?php echo $tecnologia["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $tecnologia['enlace']; ?>">
                    <?php echo $tecnologia["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $tecnologia["autor"]; ?></div>
                    <small class="text-muted">Especialista en Tecnología</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $tecnologia["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $tecnologia['enlace']; ?>" class="btn btn-outline-primary btn-outline-custom">
                      <i class="fas fa-newspaper me-2"></i>Leer más
                    </a>
                    <span class="read-time">4 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Orquídea amazónica">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-success text-white">
                    <i class="fas fa-flask category-icon"></i>Ciencia
                  </span>
                  <small class="text-muted"><?php echo $ciencia["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $ciencia['enlace']; ?>">
                    <?php echo $ciencia["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $ciencia["autor"]; ?></div>
                    <small class="text-muted">Investigador Científico</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $ciencia["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $ciencia['enlace']; ?>" class="btn btn-outline-success btn-outline-custom">
                      <i class="fas fa-newspaper me-2"></i>Leer más
                    </a>
                    <span class="read-time">3 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sección 4: Cultura y Entretenimiento -->
      <div class="news-section">
        <h2 class="section-title text-center">
          <i class="fas fa-theater-masks me-2"></i>Cultura y Entretenimiento
        </h2>
        <?php
          include("secciones/cultura.php");
          include("secciones/gente.php");
          include("secciones/television.php");
        ?>
        <div class="row news-grid">
          <div class="col-md-4">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Festival teatro">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-secondary text-white">
                    <i class="fas fa-theater-masks category-icon"></i>Cultura
                  </span>
                  <small class="text-muted"><?php echo $cultura["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $cultura['enlace']; ?>">
                    <?php echo $cultura["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $cultura["autor"]; ?></div>
                    <small class="text-muted">Crítico Cultural</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $cultura["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $cultura['enlace']; ?>" class="btn btn-outline-secondary btn-outline-custom">
                      Leer más
                    </a>
                    <span class="read-time">4 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1551218808-94e220e084d2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Chef peruana">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-warning text-dark">
                    <i class="fas fa-user-friends category-icon"></i>Gente
                  </span>
                  <small class="text-muted"><?php echo $gente["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $gente['enlace']; ?>">
                    <?php echo $gente["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $gente["autor"]; ?></div>
                    <small class="text-muted">Reportero de Espectáculos</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $gente["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $gente['enlace']; ?>" class="btn btn-outline-warning btn-outline-custom">
                      Leer más
                    </a>
                    <span class="read-time">3 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Serie peruana">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-info text-white">
                    <i class="fas fa-tv category-icon"></i>Televisión
                  </span>
                  <small class="text-muted"><?php echo $television["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $television['enlace']; ?>">
                    <?php echo $television["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $television["autor"]; ?></div>
                    <small class="text-muted">Crítico de TV</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $television["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $television['enlace']; ?>" class="btn btn-outline-info btn-outline-custom">
                      Leer más
                    </a>
                    <span class="read-time">4 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sección 5: Deportes y Sociedad -->
      <div class="news-section">
        <h2 class="section-title text-center">
          <i class="fas fa-futbol me-2"></i>Deportes y Sociedad
        </h2>
        <?php
          include("secciones/deportes.php");
          include("secciones/sociedad.php");
          include("secciones/video.php");
        ?>
        <div class="row news-grid">
          <div class="col-md-4">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Selección peruana">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-primary text-white">
                    <i class="fas fa-futbol category-icon"></i>Deportes
                  </span>
                  <small class="text-muted"><?php echo $deportes["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $deportes['enlace']; ?>">
                    <?php echo $deportes["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $deportes["autor"]; ?></div>
                    <small class="text-muted">Periodista Deportivo</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $deportes["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $deportes['enlace']; ?>" class="btn btn-outline-primary btn-outline-custom">
                      Leer más
                    </a>
                    <span class="read-time">5 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Comunidad Awajún">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-success text-white">
                    <i class="fas fa-users category-icon"></i>Sociedad
                  </span>
                  <small class="text-muted"><?php echo $sociedad["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $sociedad['enlace']; ?>">
                    <?php echo $sociedad["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $sociedad["autor"]; ?></div>
                    <small class="text-muted">Reportero Social</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $sociedad["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $sociedad['enlace']; ?>" class="btn btn-outline-success btn-outline-custom">
                      Leer más
                    </a>
                    <span class="read-time">4 min lectura</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm h-100">
              <img class="news-image" src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Video viral">
              <div class="card-body d-flex flex-column">
                <div class="news-meta">
                  <span class="category-badge bg-danger text-white">
                    <i class="fas fa-video category-icon"></i>Video Viral
                  </span>
                  <small class="text-muted"><?php echo $video["fecha"]; ?></small>
                </div>
                <h3 class="card-title">
                  <a class="text-dark text-decoration-none" href="<?php echo $video['enlace']; ?>">
                    <?php echo $video["titulo"]; ?>
                  </a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div>
                    <div class="font-weight-bold"><?php echo $video["autor"]; ?></div>
                    <small class="text-muted">Reportero Digital</small>
                  </div>
                </div>
                <p class="card-text flex-grow-1">
                  <?php echo $video["resumen"]; ?>
                </p>
                <div class="card-footer-custom text-center">
                  <div class="d-flex justify-content-between align-items-center">
                    <a href="<?php echo $video['enlace']; ?>" class="btn btn-outline-danger btn-outline-custom">
                      Ver video
                    </a>
                    <span class="read-time">2 min vista</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Newsletter Section -->
      <div class="news-section">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card bg-gradient-primary text-white border-0 shadow-lg">
              <div class="card-body text-center py-5 px-4">
                <h3 class="card-title mb-3">
                  <i class="fas fa-paper-plane me-2"></i>Mantente Informado
                </h3>
                <p class="card-text mb-4" style="font-size: 1.1rem;">
                  Suscríbete a nuestro newsletter y recibe las noticias más importantes del día directamente en tu correo
                </p>
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="input-group input-group-lg">
                      <input type="email" class="form-control border-0" placeholder="Tu correo electrónico" style="border-radius: 25px 0 0 25px;">
                      <div class="input-group-append">
                        <button class="btn btn-light text-primary font-weight-bold px-4" type="button" style="border-radius: 0 25px 25px 0;">
                          Suscribirse
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Footer -->
    <footer class="blog-footer bg-dark text-white py-5 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-4">
            <h5 class="mb-3">
              <i class="fas fa-newspaper me-2"></i>NOTICIAS SON NOTICIAS
            </h5>
            <p class="text-muted mb-3">
              El portal informativo más confiable del Perú. Actualidad nacional e internacional las 24 horas.
            </p>
            <div class="social-links">
              <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="btn btn-outline-light btn-sm rounded-circle me-2">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="btn btn-outline-light btn-sm rounded-circle">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 mb-4">
            <h6 class="mb-3">Secciones</h6>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Nacional</a></li>
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Internacional</a></li>
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Economía</a></li>
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Deportes</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 mb-4">
            <h6 class="mb-3">Empresa</h6>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Quiénes Somos</a></li>
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Contacto</a></li>
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Trabaja con Nosotros</a></li>
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Anunciarse</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 mb-4">
            <h6 class="mb-3">Legal</h6>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Términos y Condiciones</a></li>
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Política de Privacidad</a></li>
              <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Cookies</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-3 mb-4">
            <h6 class="mb-3">Contacto</h6>
            <ul class="list-unstyled text-muted">
              <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Lima, Perú</li>
              <li class="mb-2"><i class="fas fa-phone me-2"></i>+51 123 456 789</li>
              <li class="mb-2"><i class="fas fa-envelope me-2"></i>info@noticiassonnoticias.com</li>
            </ul>
          </div>
        </div>
        <hr class="bg-secondary my-4">
        <div class="row align-items-center">
          <div class="col-md-6">
            <p class="mb-0 text-muted">&copy; 2025 NOTICIAS SON NOTICIAS. Todos los derechos reservados.</p>
          </div>
          <div class="col-md-6 text-md-end">
            <p class="mb-0 text-muted">Desarrollado con <i class="fas fa-heart text-danger"></i> para el Perú</p>
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
        onlineElement.className = 'position-fixed bottom-0 end-0 m-3 p-3 bg-primary text-white rounded shadow-lg';
        onlineElement.innerHTML = `
          <div class="d-flex align-items-center">
            <i class="fas fa-eye me-2"></i>
            <div>
              <div class="font-weight-bold">${onlineReaders}</div>
              <small>lectores en línea</small>
            </div>
          </div>
        `;
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