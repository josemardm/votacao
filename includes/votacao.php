<!DOCTYPE html>
<html lang="pt_br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/fonts.css" />
    <link rel="stylesheet" href="styles/media.css" />

    <title>Votação</title>
  </head>
  <body>
    <header>
      <div>
        <h1>Eleições</h1>
        <h1>CIPA 2024</h1>
      </div>
      <div class="logo">        
        <img src="img/logo-fumec.png" alt="logo-menu">
    </div>
    </header>

    <main>
      <aside>
        <div>
          <h2>Registre seu voto agora!</h2>
          <h2>Use sua conta Google</h2>
          <p>
            Para acessar o formulário de votação, vôce deve logar com sua
            conta institucional (ex.: meuemail@fumec.br)
          </p>
        </div>
        <card_google>
            <p>Clique no botão abaixo !<?php echo session_name()?></p>
            <div
            id="g_id_onload"
            data-client_id="521051242555-gver8morcu70976qqssb9bii0b3dr8pf.apps.googleusercontent.com"
            data-login_uri="http://localhost/fumec/votacao/login.php"
            data-auto_prompt="false"
            ></div>
            <div
            class="g_id_signin"
            data-type="standard"
            data-size="large"
            data-theme="filled_white"
            data-text="sign_in_with"
            data-shape="circle"
            data-logo_alignment="left"
            ></div>
        </card_google>
    </aside>
      <article>
        <img src="img/urna.png" alt="Urna eletronica" />
      </article>
    </main>
  </body>
  <script src="https://accounts.google.com/gsi/client" async defer></script>
</html>
