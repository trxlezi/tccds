<!DOCTYPE html>
<html lang = "pt-br">
<head> 
  <!-- Required meta tags -->
  <meta charset = "utf-8">
  <meta http-equiv = "X-UA-Compatible" content = "IE-edge">
  <meta name = "viewport" content = "width-device-width, initial-scale-1.0">

  <!-- CSS, Bootstrap e Icons -->
  <link rel = "stylesheet" href="/css/mainstyle.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">

  {{-- logo guia do site --}}
  {{-- <link rel="icon" href="../img/rubens.png"> --}}


  <title>DS E TI</title>

</head>

<body>
  <div class="ajuda">
    <div class="boas-vindas">
      <h1>Bem-Vindos!!</h1>
        <p>Aqui apresentamos o curso de Desenvolvimento de Sistemas e o curso de Técnico de Informática </p>
    </div>
  </div>

<div class="container">
  <div class="card"> 
      <a href = "/paginas/home">
        <div class="icon">
          <ion-icon name="laptop-outline"></ion-icon>
        </div>    
      </a>
        <div class="content">
          <h2>Desenvolvimento 
            de Sistemas</h2>
          <p><a href = "/paginas/home"> Entrar  </a></p>
        </div>
    </div>
 
  <div class="card"> 
    <a href = "/paginasti/hometi">
      <div class="icon">
        <ion-icon name="cloud-circle-outline"></ion-icon>
      </div>
    </a>
        <div class="content">
          <h2>Técnico de Informática</h2>
          <p><a href = "/paginasti/hometi"> Entrar  </a></p>
        </div>
  </div>
</div>
      {{-- SCRIPT QUE PUXA OS ICONs --}}
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body> 
