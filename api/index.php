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

    <!-- Custom styles -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
      :root {
        --primary-color: #2c3e50;
        --secondary-color: #3498db;
        --accent-color: #e74c3c;
        --success-color: #27ae60;
        --text-dark: #2c3e50;
        --text-light: #7f8c8d;
        --bg-light: #f8f9fa;
        --shadow: 0 4px 6px rgba(0,0,0,0.1);
        --shadow-hover: 0 10px 30px rgba(0,0,0,0.2);
      }

      body {
        font-family: 'Roboto', sans-serif;
        color: var(--text-dark);
        background-color: #fff;
      }

      /* Header mejorado */
      .blog-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, #34495e 100%);
        padding: 2rem 0 !important;
        margin-bottom: 3rem;
        box-shadow: var(--shadow);
      }

      .blog-header-logo {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        font-weight: 900;
        color: white !important;
        text-decoration: none;
        letter-spacing: 2px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        transition: all 0.3s ease;
      }

      .blog-header-logo:hover {
        transform: scale(1.05);
        text-shadow: 3px 3px 8px rgba(0,0,0,0.4);
      }

      .blog-header-logo i {
        margin-right: 15px;
        animation: pulse 2s infinite;
      }

      @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1); }
      }

      /* Portada Principal mejorada */
      .jumbotron {
        border-radius: 15px !important;
        overflow: hidden;
        margin-bottom: 4rem !important;
        box-shadow: var(--shadow-hover);
        position: relative;
        min-height: 400px;
        display: flex;
        align-items: center;
      }

      .jumbotron::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(44, 62, 80, 0.9) 0%, rgba(52, 73, 94, 0.7) 100%);
        z-index: 1;
      }

      .jumbotron .col-md-12 {
        position: relative;
        z-index: 2;
      }

      .jumbotron h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        margin-bottom: 1.5rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
      }

      .jumbotron .lead {
        font-size: 1.3rem;
        line-height: 1.7;
        font-weight: 300;
      }

      .jumbotron a {
        display: inline-block;
        padding: 12px 30px;
        background: var(--accent-color);
        border-radius: 50px;
        transition: all 0.3s ease;
        text-decoration: none !important;
      }

      .jumbotron a:hover {
        background: #c0392b;
        transform: translateX(10px);
        box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
      }

      /* Sección de noticias mejorada */
      .news-section {
        margin-bottom: 5rem;
      }

      .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 2.5rem;
        padding-bottom: 15px;
        border-bottom: 3px solid var(--secondary-color);
        position: relative;
      }

      .section-title::after {
        content: '';
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 100px;
        height: 3px;
        background: var(--accent-color);
      }

      /* Tarjetas de noticias mejoradas */
      .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: var(--shadow);
        height: 100%;
        background: white;
      }

      .card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-hover);
      }

      .news-image {
        height: 250px;
        object-fit: cover;
        width: 100%;
        transition: transform 0.4s ease;
      }

      .card:hover .news-image {
        transform: scale(1.1);
      }

      .card-body {
        padding: 2rem;
      }

      .category-badge {
        display: inline-flex;
        align-items: center;
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1rem;
      }

      .category-icon {
        font-size: 1.1em;
        margin-right: 8px;
      }

      .badge-internacional {
        background: linear-gradient(135deg, #3498db, #2980b9);
        color: white;
      }

      .badge-nacional {
        background: linear-gradient(135deg, #27ae60, #229954);
        color: white;
      }

      .badge-deportes {
        background: linear-gradient(135deg, #e67e22, #d35400);
        color: white;
      }

      .badge-tecnologia {
        background: linear-gradient(135deg, #9b59b6, #8e44ad);
        color: white;
      }

      .badge-economia {
        background: linear-gradient(135deg, #f39c12, #e67e22);
        color: white;
      }

      .badge-entretenimiento {
        background: linear-gradient(135deg, #e74c3c, #c0392b);
        color: white;
      }

      .card h3 {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1.4;
        margin-bottom: 1rem;
      }

      .card h3 a {
        color: var(--text-dark);
        text-decoration: none;
        transition: color 0.3s ease;
      }

      .card h3 a:hover {
        color: var(--secondary-color);
      }

      .author-info {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        padding: 10px 0;
        border-top: 1px solid #ecf0f1;
        border-bottom: 1px solid #ecf0f1;
      }

      .author-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 12px;
        border: 2px solid var(--secondary-color);
      }

      .author-details {
        display: flex;
        flex-direction: column;
      }

      .author-name {
        font-weight: 600;
        color: var(--text-dark);
        font-size: 0.9rem;
      }

      .publish-date {
        font-size: 0.8rem;
        color: var(--text-light);
      }

      .card-text {
        color: var(--text-light);
        line-height: 1.7;
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
      }

      .btn-read-more {
        display: inline-flex;
        align-items: center;
        padding: 10px 25px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 2px solid;
      }

      .btn-read-more i {
        margin-left: 8px;
        transition: transform 0.3s ease;
      }

      .btn-read-more:hover i {
        transform: translateX(5px);
      }

      .btn-internacional {
        color: #3498db;
        border-color: #3498db;
      }

      .btn-internacional:hover {
        background: #3498db;
        color: white;
      }

      .btn-nacional {
        color: #27ae60;
        border-color: #27ae60;
      }

      .btn-nacional:hover {
        background: #27ae60;
        color: white;
      }

      .btn-deportes {
        color: #e67e22;
        border-color: #e67e22;
      }

      .btn-deportes:hover {
        background: #e67e22;
        color: white;
      }

      .btn-tecnologia {
        color: #9b59b6;
        border-color: #9b59b6;
      }

      .btn-tecnologia:hover {
        background: #9b59b6;
        color: white;
      }

      .btn-economia {
        color: #f39c12;
        border-color: #f39c12;
      }

      .btn-economia:hover {
        background: #f39c12;
        color: white;
      }

      .btn-entretenimiento {
        color: #e74c3c;
        border-color: #e74c3c;
      }

      .btn-entretenimiento:hover {
        background: #e74c3c;
        color: white;
      }

      /* Footer mejorado */
      .blog-footer {
        background: linear-gradient(135deg, var(--primary-color) 0%, #34495e 100%);
        color: white;
        padding: 3rem 0 !important;
        margin-top: 5rem !important;
      }

      .blog-footer p {
        margin-bottom: 1rem;
        color: rgba(255,255,255,0.9);
      }

      .blog-footer a {
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        transition: color 0.3s ease;
        margin: 0 10px;
      }

      .blog-footer a:hover {
        color: white;
        text-decoration: underline;
      }

      /* Responsive */
      @media (max-width: 768px) {
        .jumbotron h1 {
          font-size: 2rem;
        }
        
        .blog-header-logo {
          font-size: 1.5rem;
        }

        .news-section {
          margin-bottom: 3rem;
        }

        .card-body {
          padding: 1.5rem;
        }
      }
    </style>
  </head>

  <body>
    <!-- Header -->
    <header class="blog-header">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <a class="blog-header-logo" href="#">
              <i class="fas fa-newspaper"></i>PANTA PISCOCHE JOSÉ DIEGO
            </a>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <!-- Portada Principal -->
      <div class="jumbotron p-4 p-md-5 text-white" style="background-image: url('https://images.unsplash.com/photo-1585829365295-ab7cd400d7be?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80'); background-size: cover; background-position: center;">
        <div class="col-md-10 mx-auto px-0">
          <h1 class="display-4">
            <i class="fas fa-star text-warning"></i> IA Transforma la Medicina en 2025
          </h1>
          <p class="lead my-4">
            Los nuevos sistemas de inteligencia artificial están revolucionando el diagnóstico médico, permitiendo detectar enfermedades con una precisión del 98% antes de que aparezcan los primeros síntomas.
          </p>
          <p class="lead mb-0">
            <a href="#" class="text-white font-weight-bold">
              Continuar leyendo <i class="fas fa-arrow-right"></i>
            </a>
          </p>
        </div>
      </div>

      <!-- Sección Internacional y Nacional -->
      <div class="news-section">
        <h2 class="section-title">
          <i class="fas fa-globe-americas text-primary"></i> Actualidad Mundial
        </h2>
        <div class="row">
          <!-- Internacional -->
          <div class="col-md-6 mb-4">
            <div class="card">
              <img class="news-image" src="https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Huracán Melissa">
              <div class="card-body">
                <span class="category-badge badge-internacional">
                  <i class="fas fa-globe-americas category-icon"></i>Internacional
                </span>
                <h3>
                  <a href="#">Huracán Melissa Categoría 5 Amenaza el Caribe</a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div class="author-details">
                    <span class="author-name">Juan Pérez</span>
                    <span class="publish-date">28 Oct 2025</span>
                  </div>
                </div>
                <p class="card-text">
                  El huracán Melissa se intensificó a categoría 5 con vientos de 280 km/h. Autoridades evacúan zonas costeras mientras se aproxima a las islas del Caribe oriental.
                </p>
                <a href="#" class="btn-read-more btn-internacional">
                  Leer más <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Nacional -->
          <div class="col-md-6 mb-4">
            <div class="card">
              <img class="news-image" src="https://images.unsplash.com/photo-1553909489-cd47e0907980?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Protestas Perú">
              <div class="card-body">
                <span class="category-badge badge-nacional">
                  <i class="fas fa-flag category-icon"></i>Nacional
                </span>
                <h3>
                  <a href="#">Protestas Masivas en Lima por Reforma Educativa</a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div class="author-details">
                    <span class="author-name">María González</span>
                    <span class="publish-date">28 Oct 2025</span>
                  </div>
                </div>
                <p class="card-text">
                  Miles de maestros y estudiantes marcharon por las principales avenidas de Lima exigiendo mayores inversiones en educación y mejores condiciones laborales para el sector.
                </p>
                <a href="#" class="btn-read-more btn-nacional">
                  Leer más <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sección Deportes y Tecnología -->
      <div class="news-section">
        <h2 class="section-title">
          <i class="fas fa-futbol text-warning"></i> Deportes y Tecnología
        </h2>
        <div class="row">
          <!-- Deportes -->
          <div class="col-md-6 mb-4">
            <div class="card">
              <img class="news-image" src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Deportes">
              <div class="card-body">
                <span class="category-badge badge-deportes">
                  <i class="fas fa-futbol category-icon"></i>Deportes
                </span>
                <h3>
                  <a href="#">Perú Clasifica al Mundial 2026 tras Victoria Histórica</a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div class="author-details">
                    <span class="author-name">Carlos Ruiz</span>
                    <span class="publish-date">27 Oct 2025</span>
                  </div>
                </div>
                <p class="card-text">
                  La selección peruana logró su pase al Mundial 2026 al vencer 3-1 a Colombia en Lima. Paolo Guerrero anotó dos goles en su partido despedida con la blanquirroja.
                </p>
                <a href="#" class="btn-read-more btn-deportes">
                  Leer más <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Tecnología -->
          <div class="col-md-6 mb-4">
            <div class="card">
              <img class="news-image" src="https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Tecnología">
              <div class="card-body">
                <span class="category-badge badge-tecnologia">
                  <i class="fas fa-microchip category-icon"></i>Tecnología
                </span>
                <h3>
                  <a href="#">Apple Presenta iPhone 17 con Batería de 7 Días</a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div class="author-details">
                    <span class="author-name">Ana Torres</span>
                    <span class="publish-date">26 Oct 2025</span>
                  </div>
                </div>
                <p class="card-text">
                  El nuevo iPhone 17 rompe récords con su batería de grafeno que dura una semana completa. Incluye procesador cuántico y cámaras con IA de última generación.
                </p>
                <a href="#" class="btn-read-more btn-tecnologia">
                  Leer más <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Sección Economía y Entretenimiento -->
      <div class="news-section">
        <h2 class="section-title">
          <i class="fas fa-chart-line text-success"></i> Economía y Entretenimiento
        </h2>
        <div class="row">
          <!-- Economía -->
          <div class="col-md-6 mb-4">
            <div class="card">
              <img class="news-image" src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Economía">
              <div class="card-body">
                <span class="category-badge badge-economia">
                  <i class="fas fa-chart-line category-icon"></i>Economía
                </span>
                <h3>
                  <a href="#">Bitcoin Alcanza los $150,000 en Mercado Alcista</a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div class="author-details">
                    <span class="author-name">Luis Mendoza</span>
                    <span class="publish-date">25 Oct 2025</span>
                  </div>
                </div>
                <p class="card-text">
                  La criptomoneda líder supera todas las expectativas alcanzando un nuevo máximo histórico. Expertos predicen que podría llegar a $200,000 antes de fin de año.
                </p>
                <a href="#" class="btn-read-more btn-economia">
                  Leer más <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <!-- Entretenimiento -->
          <div class="col-md-6 mb-4">
            <div class="card">
              <img class="news-image" src="https://images.unsplash.com/photo-1574267432644-f2f75f3c6e3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Entretenimiento">
              <div class="card-body">
                <span class="category-badge badge-entretenimiento">
                  <i class="fas fa-film category-icon"></i>Entretenimiento
                </span>
                <h3>
                  <a href="#">Netflix Anuncia Serie sobre Historia de Perú</a>
                </h3>
                <div class="author-info">
                  <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" class="author-avatar" alt="Avatar">
                  <div class="author-details">
                    <span class="author-name">Sofía Vargas</span>
                    <span class="publish-date">24 Oct 2025</span>
                  </div>
                </div>
                <p class="card-text">
                  La plataforma de streaming producirá una megaserie de 10 episodios sobre los Incas, con un presupuesto de $80 millones. El rodaje comenzará en Cusco en 2026.
                </p>
                <a href="#" class="btn-read-more btn-entretenimiento">
                  Leer más <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Footer -->
    <footer class="blog-footer">
      <div class="container text-center">
        <p style="font-size: 1.1rem; font-weight: 500;">
          <i class="fas fa-newspaper"></i> Noticias SON Noticias 2025
        </p>
        <p style="opacity: 0.9;">Portal informativo líder en Perú</p>
        <p class="mb-0">
          <a href="#"><i class="fas fa-home"></i> Inicio</a> | 
          <a href="#"><i class="fas fa-envelope"></i> Contacto</a> | 
          <a href="#"><i class="fas fa-shield-alt"></i> Privacidad</a>
        </p>
        <p style="margin-top: 1.5rem; opacity: 0.7; font-size: 0.9rem;">
          © 2025 Todos los derechos reservados
        </p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>