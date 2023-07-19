<!DOCTYPE html>
<html>
<head>
  <meta name="facebook-domain-verification" content="4jm5uz5lx66vx70kcfkv836nbqavsl" />
  <title>!Descubre el Secreto para una Transformación Saludable!</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:wght@600;700&display=swap">
  <style>
    :root {
      --primary-font: 'Nunito';
      --white-color: #fff;
      --neon-color: #00ff44;
    }

    * {
      font-size: 16px;
      box-sizing: border-box;
    }

    body {
      display: grid;
      font-family: var(--primary-font), sans-serif;
      place-items: center;
      min-height: 100vh;
      color: #fff;
      background-color: #000000;
    }

    .neon-box,
    .neon-text {
      padding: 1.25rem 2.5rem;
      border: 0.2rem solid var(--white-color);
      box-shadow: 0 0 .2rem var(--white-color),
                  0 0 .2rem var(--white-color),
                  0 0 2rem var(--neon-color),
                  0 0 0.8rem var(--neon-color),
                  0 0 2.8rem var(--neon-color),
                  inset 0 0 1.3rem var(--neon-color); 
    }

    .neon-text {
      font-size: 2.8rem;
      letter-spacing: .5rem;
      text-shadow: 0 0 0.625rem var(--neon-color),
                   0 0 1.25rem var(--neon-color),
                   0 0 2.5rem var(--neon-color),
                   0 0 5rem var(--neon-color),
                   0 0 7.5rem var(--neon-color);
      animation: blink 2s ease-in-out infinite;
      cursor: pointer;
    }

    @keyframes blink {
      from {
        opacity: 1;
      }
      to {
        opacity: 0.7;
      }
    }
  </style>
</head>
<body>
  <img src="verifica.png" alt="Imagem" style="width: 25%;">

  

  <div class="neon-box" onclick="redirect()">
    <h1 class="neon-text">VER VIDEO</h1>
  </div>

  <script>
    function redirect() {
      window.location.href = "video.html";
    }
  </script>  
</body>
</html>
