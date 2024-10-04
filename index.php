  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./CSS/stylesheet.css" />

    <script
      src="https://kit.fontawesome.com/051e1d8433.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <title>Portal Climático</title>
  </head>
  <body>
    <header>
      <a href="?page=home" class="logo">
        <img src="./IMG/logo.svg" alt="Cloud-logo" />
        <h1>Portal Climático</h1>
      </a>
      <button class="material-symbols-outlined button-menu">menu</button>
      <nav class="side-menu">
        <h2>Portal Climático</h2>
        <div class="menu-section">
          <div class="menu-section-header">
            <a href="?page=home">Home</a>
          </div>
          <div class="menu-section-links">
            <a href="?page=home#definicao">Definição</a>
            <a href="?page=home#importancia">Importância</a>
            <a href="?page=home#mundo">Mundo</a>
          </div>
        </div>
        <div class="menu-section">
          <div class="menu-section-header">
            <a href="?page=acordo">Acordo de Paris</a>
          </div>
          <div class="menu-section-links">
            <a href="?page=acordo#compromissos">Compromissos</a>
            <a href="?page=acordo#desafios">Desafios</a>
            <a href="?page=acordo#impacto">Impacto Global</a>
            <a href="?page=acordo#noticias"> Notícias </a>
          </div>
        </div>
        <div class="menu-section">
          <div class="menu-section-header">
            <a href="?page=projetos">Projetos</a>
          </div>
          <div class="menu-section-links">
            <a href="?page=projetos#andamento">Em Andamento</a>
            <a href="?page=projetos#futuros">Futuros</a>
            <a href="?page=projetos#brasil">Brasil</a>
          </div>
        </div>
      </nav>
    </header>
    <div class="overlay"></div>

    <section>
        
      <?php 
                
        include($_GET['page'] . '.php');

      ?>
    </section>
    <footer class="rodape">
      <p>
        &#169; Todos os Direitos Reservados - Gabriel dal Bó & Nicolas Baldin
      </p>
    </footer>
    <script src="./JS/javascript.js" type="text/javascript"></script>
    
  </body>
</html>
