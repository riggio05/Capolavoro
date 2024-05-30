<?php
session_start();

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Gestione Sistema</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="ricerca.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/footers/footer-2/assets/css/footer-2.css">
</head>
<body>

<header>
        <div class="container" style="height: 70px;">
            <img src="img/ZuccanteSquared.png" alt="Logo Image" class="header-logo">
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="ricerche">Ricerca</a></li>
                    <li><a href="notifica">Notifiche</a></li>
                    <li><a href="alert.php">Alert</a></li>
                    <li><a href="segnalazioni">Segnalazioni</a></li>
                </ul>
            </nav>
        </div>
    </header>

      <!-- Form per la ricerca di aule o dispositivi -->
    <h2>Ricerca Dispositivi</h2>
    <div class="container mt-5">
    <div id="cardContainer" class="row"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    fetchCards();
});

function fetchCards() {

    //prendere l'id
    let query = window.location.search;
    const urlParams = new URLSearchParams(query);
    let aula_id = urlParams.get("aula_id");

    fetch(`dispositivi?aula_id=${aula_id}`)
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('cardContainer');
            data.forEach(card => {
                container.innerHTML += `
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">${card.dispositivo_id}</h5>
                                <p class="card-text">${card.tipo}</p>
                                <a href="${card.link}" class="btn btn-primary" style="margin-left: 5px; background-color: red; border-color: red;" >Segnala</a>
                            </div>
                        </div>
                    </div>`;
            });
        })
        .catch(error => console.error('Error fetching data:', error));
}
</script>

    <!-- Footer 2 - Bootstrap Brain Component -->
    <footer class="footer">

<!-- Widgets - Bootstrap Brain Component -->
<section class="bg-light py-4 py-md-5 py-xl-8 border-top border-light">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-lg-0 justify-content-xl-between">
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <a href="#!">
            <img src="img/ZuccanteSquared.png" alt="BootstrapBrain Logo" width="200" height="200">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <h4 class="widget-title mb-4">Informazioni</h4>
          <address class="mb-4">Indirizzo: Via Baglioni, 22</address>
          <p class="mb-1">
            <a class="link-secondary text-decoration-none" href="tel:+15057922430">Centralino: 041.5341.046</a>
          </p>
          <p class="mb-0">
            <a class="link-secondary text-decoration-none" href="mailto:demo@yourdomain.com">vetf04000t@istruzione.it</a>
          </p>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <h4 class="widget-title mb-4">Funzionalità</h4>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="ricerca.php" class="link-secondary text-decoration-none">Ricerca</a>
            </li>
            <li class="mb-2">
              <a href="notifica.php" class="link-secondary text-decoration-none">Notifiche</a>
            </li>
            <li class="mb-2">
              <a href="alert.php" class="link-secondary text-decoration-none">Alert</a>
            </li>
            <li class="mb-2">
              <a href="segnalazione.php" class="link-secondary text-decoration-none">Segnalazioni</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <h4 class="widget-title mb-4">Policy</h4>
          <ul class="list-unstyled">
          <li class="mb-2">
              <a href="#!" class="link-secondary text-decoration-none">Terms of Service</a>
            </li>
            <li class="mb-0">
              <a href="#!" class="link-secondary text-decoration-none">Privacy Policy</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

</footer>

</body>
</html>

aule.php
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Gestione Sistema </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="ricerca.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/footers/footer-2/assets/css/footer-2.css">
</head>
<body>

<header>
        <div class="container" style="height: 70px;">
            <img src="img/ZuccanteSquared.png" alt="Logo Image" class="header-logo">
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="ricerche">Ricerca</a></li>
                    <li><a href="notifica">Notifiche</a></li>
                    <li><a href="alert.php">Alert</a></li>
                    <li><a href="segnalazioni">Segnalazioni</a></li>
                </ul>
            </nav>
        </div>
    </header>

      <!-- Form per la ricerca di aule o dispositivi -->
    <h2>Aule disponibili</h2>
    <div class="container mt-5">
    <div id="cardContainer" class="row"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    fetchCards();
});

function fetchCards() {
    fetch('../helpdesk/ricerca2')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('cardContainer');
            data.forEach(card => {
              console.log(card.dispositivo_id);
                container.innerHTML += `
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">${card.nome}</h5>
                                <p class="card-text">${card.tipo}</p>
                                <p class="card-text">${card.numero}</p>
                                <p class="card-text">${card.piano}</p>
                                <a id="dispositivo" href="dispositivo?aula_id=${card.aula_id}" class="btn btn-primary" data-aula-id="${card.aula_id}">Dispositivi</a><a href="${card.link}" class="btn btn-primary" style="margin-left: 5px; background-color: red; border-color: red;" >Segnala</a>
                            </div>
                        </div>
                    </div>`;
            });
        })
        .catch(error => console.error('Error fetching data:', error));    
}
</script>

    <!-- Footer 2 - Bootstrap Brain Component -->
    <footer class="footer">

<!-- Widgets - Bootstrap Brain Component -->
<section class="bg-light py-4 py-md-5 py-xl-8 border-top border-light">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-lg-0 justify-content-xl-between">
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <a href="#!">
            <img src="img/ZuccanteSquared.png" alt="BootstrapBrain Logo" width="200" height="200">
          </a>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <h4 class="widget-title mb-4">Informazioni</h4>
          <address class="mb-4">Indirizzo: Via Baglioni, 22</address>
          <p class="mb-1">
            <a class="link-secondary text-decoration-none" href="tel:+15057922430">Centralino: 041.5341.046</a>
          </p>
          <p class="mb-0">
            <a class="link-secondary text-decoration-none" href="mailto:demo@yourdomain.com">vetf04000t@istruzione.it</a>
          </p>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <h4 class="widget-title mb-4">Funzionalità</h4>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="ricerca.php" class="link-secondary text-decoration-none">Ricerca</a>
            </li>
            <li class="mb-2">
              <a href="notifica.php" class="link-secondary text-decoration-none">Notifiche</a>
            </li>
            <li class="mb-2">
              <a href="alert.php" class="link-secondary text-decoration-none">Alert</a>
            </li>
            <li class="mb-2">
              <a href="segnalazione.php" class="link-secondary text-decoration-none">Segnalazioni</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-3 col-xl-2">
        <div class="widget">
          <h4 class="widget-title mb-4">Policy</h4>
          <ul class="list-unstyled">
          <li class="mb-2">
              <a href="#!" class="link-secondary text-decoration-none">Terms of Service</a>
            </li>
            <li class="mb-0">
              <a href="#!" class="link-secondary text-decoration-none">Privacy Policy</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

</footer>

</body>
</html>

