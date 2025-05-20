<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cuquío Tour’s Web</title>

  <!-- ESTILOS CSS INTEGRADOS -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      font-family: Arial, sans-serif;
      height: 100%;
      scroll-behavior: smooth;
    }

    /* ENCABEZADO */
    .hero {
      background-image: url('cuquio.jpg'); /* Reemplaza por una imagen real */
      background-size: cover;
      background-position: center;
      height: 100vh;
      color: white;
      position: relative;
    }

    .nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
      background: rgba(0, 0, 0, 0.6);
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
    }

    .menu {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .menu li a {
      color: white;
      text-decoration: none;
      font-size: 16px;
    }

    .contenido-hero {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .contenido-hero h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .contenido-hero p {
      font-size: 20px;
      margin-bottom: 30px;
    }

    .btn {
      background-color: #ff9900;
      padding: 12px 25px;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #cc7a00;
    }

    /* CARRUSEL */
    .carrusel {
      padding: 50px 30px;
      background-color: #f9f9f9;
      text-align: center;
    }

    .carrusel h2 {
      margin-bottom: 30px;
      font-size: 32px;
      color: #333;
    }

    .imagenes {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .imagenes img {
      width: 300px;
      height: 200px;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .imagenes img:hover {
      transform: scale(1.05);
    }

    /* FOOTER */
    footer {
      background-color: #222;
      color: white;
      text-align: center;
      padding: 30px 20px;
    }

    .footer-contenido a {
      color: #ff9900;
      text-decoration: none;
      margin: 0 5px;
    }

    .footer-contenido a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- ENCABEZADO -->
  <header class="hero" id="inicio">
    <nav class="nav">
      <div class="logo">Cuquío Tour’s Web</div>
      <ul class="menu">
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#lugares">Lugares</a></li>
        <li><a href="#gastronomia">Gastronomía</a></li>
        <li><a href="#contacto">Contacto</a></li>
      </ul>
    </nav>
    <div class="contenido-hero">
      <h1>Descubre la magia de Cuquío</h1>
      <p>Historia, tradición y aventura en un solo lugar</p>
      <a href="#explorar" class="btn">Explorar</a>
    </div>
  </header>

  <!-- CARRUSEL DE IMÁGENES -->
  <section class="carrusel" id="explorar">
    <h2>Explora Cuquío</h2>
    <div class="imagenes">
      <img src="c:\Users\LEO\Downloads\cuquio4.jfif" alt="Lugar turístico 1">
      <img src="c:\Users\LEO\Downloads\cuquio3.jfif" alt="Lugar turístico 2">
      <img src="c:\Users\LEO\Downloads\cuquio2.jfif" alt="Lugar turístico 3">
    </div>
  </section>

  <!-- PIE DE PÁGINA -->
  <footer id="contacto">
    <div class="footer-contenido">
      <p>© 2025 Cuquío Tour’s Web. Todos los derechos reservados.</p>
      <p>Contacto: turismo@cuquio.mx | Tel: (123) 456-7890</p>
      <p>Síguenos en redes sociales:  
        <a href="#">Facebook</a> | 
        <a href="#">Instagram</a>
      </p>
    </div>
  </footer>

</body>
</html>