<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NomeSito - Innovazione e Creatività</title>
  
  <!-- Google Fonts: Raleway per titoli, Source Sans Pro per il corpo -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
  <!-- Animate.css per animazioni -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <!-- FontAwesome per le icone -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- Bootstrap 5 CSS (opzionale per la button grid e alcune utilità) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
    /* Variabili CSS per personalizzare colori e tipografia */
    :root {
      --primary-color: #5A20CB;     /* Viola intenso */
      --accent-color: #FFC107;      /* Oro brillante */
      --background-color: #F2F2F2;    /* Grigio molto chiaro */
      --text-color: #333333;        /* Testi scuri */
      --navbar-bg: rgba(90,32,203,0.8);
      --header-overlay: rgba(0,0,0,0.65);
      --footer-bg: #333333;
      --nav-height: 70px;
    }
    
    /* Global reset e stili di base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Source Sans Pro', sans-serif;
      background-color: var(--background-color);
      color: var(--text-color);
      line-height: 1.6;
    }
    
    h1, h2, h3, .section-title {
      font-family: 'Raleway', sans-serif;
      margin-bottom: 1rem;
    }
    
    /* Navbar */
    nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: var(--nav-height);
      background-color: var(--navbar-bg);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      z-index: 100;
      transition: background-color 0.3s ease;
    }
    
    .logo {
      display: flex;
      align-items: center;
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--accent-color);
    }
    
    .logo img {
      height: 40px;
      margin-right: 10px;
    }
    
    nav ul {
      list-style: none;
      display: flex;
    }
    
    nav ul li {
      margin-left: 20px;
    }
    
    nav ul li a {
      text-decoration: none;
      font-weight: 600;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      transition: color 0.3s;
    }
    
    nav ul li a:hover {
      color: var(--accent-color);
    }
    
    /* Navbar scroll effect: cambia il background */
    .scrolled {
      background-color: var(--primary-color) !important;
    }
    
    /* Hero Section con effetto Parallax */
    .hero {
      position: relative;
      height: 100vh;
      background: url('https://source.unsplash.com/1600x900/?abstract,creative') no-repeat center center/cover;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 0 20px;
    }
    
    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background: var(--header-overlay);
      z-index: 1;
    }
    
    .hero-content {
      position: relative;
      z-index: 2;
      color: #fff;
    }
    
    .hero-content h1 {
      font-size: 4rem;
      margin-bottom: 1rem;
      animation: fadeInDown 1s;
    }
    
    .hero-content p {
      font-size: 1.5rem;
      margin-bottom: 2rem;
      animation: fadeInUp 1s;
    }
    
    .btn-custom {
      background-color: var(--accent-color);
      border: none;
      padding: 0.75rem 1.5rem;
      font-size: 1.2rem;
      color: var(--primary-color);
      text-transform: uppercase;
      letter-spacing: 0.5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    
    .btn-custom:hover {
      background-color: darken(var(--accent-color), 10%);
    }
    
    /* Sezioni generali */
    section {
      padding: 80px 0;
    }
    
    .section-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
    
    /* About Section: layout a due colonne */
    #about .about-container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 40px;
    }
    
    #about .about-container img {
      flex: 1;
      max-width: 100%;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    
    #about .about-text {
      flex: 1;
      font-size: 1.2rem;
      color: var(--primary-color);
    }
    
    /* Services Section: griglia con card */
    #services .services-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }
    
    .service-card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s;
    }
    
    .service-card:hover {
      transform: translateY(-5px);
    }
    
    .service-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
    
    .service-card .card-body {
      padding: 20px;
      text-align: center;
    }
    
    .service-card .card-body h5 {
      font-size: 1.4rem;
      color: var(--primary-color);
      margin-bottom: 10px;
    }
    
    .service-card .card-body p {
      font-size: 1rem;
      color: var(--text-color);
    }
    
    /* Portfolio Section: griglia modulare */
    #portfolio .portfolio-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }
    
    .portfolio-item {
      overflow: hidden;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }
    
    .portfolio-item:hover {
      transform: scale(1.02);
    }
    
    .portfolio-item img {
      width: 100%;
      object-fit: cover;
    }
    
    /* Contact Section */
    #contact .contact-info {
      text-align: center;
      margin-top: 20px;
    }
    
    #contact .contact-info p {
      font-size: 1.1rem;
      margin: 0.5rem 0;
    }
    
    #contact .contact-info i {
      color: var(--primary-color);
      margin-right: 8px;
      font-size: 1.5rem;
    }
    
    /* Newsletter Section */
    #newsletter .newsletter-form {
      text-align: center;
      margin-top: 20px;
    }
    
    #newsletter .newsletter-form input[type="email"] {
      padding: 0.5rem 1rem;
      border: 1px solid var(--primary-color);
      border-radius: 4px;
      max-width: 400px;
      width: 100%;
    }
    
    #newsletter .newsletter-form button {
      padding: 0.5rem 1rem;
      background-color: var(--primary-color);
      border: none;
      color: #fff;
      border-radius: 4px;
      cursor: pointer;
      margin-left: 10px;
    }
    
    /* Footer */
    .footer {
      background-color: var(--footer-bg);
      color: #fff;
      text-align: center;
      padding: 20px;
    }
    
    .footer a {
      color: var(--accent-color);
      margin: 0 0.5rem;
      font-size: 1.3rem;
      text-decoration: none;
    }
    
    .footer a:hover {
      text-decoration: underline;
    }
    
    /* Animazioni personalizzate */
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-50px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(50px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav>
    <div class="section-container d-flex justify-content-between align-items-center">
      <div class="logo">
        <img src="https://via.placeholder.com/150x50?text=Logo" alt="Logo NomeSito">
        NomeSito
      </div>
      <ul class="d-flex list-unstyled">
        <li><a href="#hero">Home</a></li>
        <li><a href="#about">Chi Siamo</a></li>
        <li><a href="#services">Servizi</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contatti</a></li>
        <li><a href="#newsletter">Newsletter</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <header id="hero" class="hero">
    <div class="hero-content">
      <h1 class="animate__animated animate__fadeInDown">Benvenuti su NomeSito</h1>
      <p class="animate__animated animate__fadeInUp animate__delay-1s">Soluzioni innovative per un mondo digitale</p>
      <a href="#about" class="btn btn-custom animate__animated animate__fadeInUp animate__delay-2s">Scopri di più</a>
    </div>
  </header>

  <!-- About Section -->
  <section id="about">
    <div class="section-container">
      <h2 class="section-title center-align">Chi Siamo</h2>
      <div class="about-container">
        <img src="https://source.unsplash.com/600x400/?office,team" alt="Il nostro team">
        <div class="about-text">
          <p>
            NomeSito è una piattaforma generica creata per supportare le aziende e i professionisti nel mondo digitale. Il nostro team mette a disposizione competenze creative e tecnologiche per realizzare progetti unici e funzionali.
          </p>
          <p>
            Puntiamo all'innovazione, offrendo soluzioni personalizzate e all'avanguardia che fanno la differenza.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services">
    <div class="section-container">
      <h2 class="section-title center-align">I Nostri Servizi</h2>
      <div class="services-grid">
        <div class="service-card animate__animated animate__fadeInLeft">
          <img src="https://source.unsplash.com/400x300/?web,design" alt="Sviluppo Web">
          <div class="card-body">
            <h5>Sviluppo Web</h5>
            <p>Siti web moderni, responsive e personalizzati per ogni esigenza.</p>
          </div>
        </div>
        <div class="service-card animate__animated animate__fadeInUp animate__delay-1s">
          <img src="https://source.unsplash.com/400x300/?graphic,design" alt="Graphic Design">
          <div class="card-body">
            <h5>Graphic Design</h5>
            <p>Immagini, loghi e materiali di comunicazione creativi e d'impatto.</p>
          </div>
        </div>
        <div class="service-card animate__animated animate__fadeInRight animate__delay-2s">
          <img src="https://source.unsplash.com/400x300/?digital,marketing" alt="Digital Marketing">
          <div class="card-body">
            <h5>Digital Marketing</h5>
            <p>Strategie innovative per aumentare la visibilità e coinvolgere il tuo pubblico.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="section-container">
      <h2 class="section-title center-align">Portfolio</h2>
      <div class="portfolio-grid">
        <div class="portfolio-item animate__animated animate__zoomIn">
          <img src="https://source.unsplash.com/600x400/?project,creative" alt="Progetto 1">
        </div>
        <div class="portfolio-item animate__animated animate__zoomIn animate__delay-1s">
          <img src="https://source.unsplash.com/600x400/?website,ui" alt="Progetto 2">
        </div>
        <div class="portfolio-item animate__animated animate__zoomIn animate__delay-2s">
          <img src="https://source.unsplash.com/600x400/?app,development" alt="Progetto 3">
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <div class="section-container">
      <h2 class="section-title center-align">Contatti</h2>
      <div class="contact-info">
        <p><i class="fas fa-map-marker-alt"></i> Via Esempio, 123 - Città</p>
        <p><i class="fas fa-phone"></i> +39 012 3456789</p>
        <p><i class="fas fa-envelope"></i> info@nomesito.com</p>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section id="newsletter">
    <div class="section-container">
      <h2 class="section-title center-align">Newsletter</h2>
      <p class="center-align">Iscriviti per ricevere aggiornamenti su novità e offerte!</p>
      <div class="newsletter-form center-align">
        <input type="email" class="form-control d-inline-block" placeholder="nome@esempio.com" style="max-width:400px;" required>
        <button class="btn btn-custom">Iscriviti</button>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="section-container">
      <p>© 2025 NomeSito - Tutti i diritti riservati</p>
      <p>
        Seguici:
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
      </p>
    </div>
  </footer>
  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Abilita l'effetto scroll per la navbar: modifica il background se la pagina è scorsa di > 50px
    const navbar = document.querySelector('nav');
    window.addEventListener('scroll', () => {
      if(window.scrollY > 50){
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>
</body>
</html>
