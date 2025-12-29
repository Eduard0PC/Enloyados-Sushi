<header class="lados">
  <div class="logo">
    <a href="index.php">
      <img src="img/logo.png" alt="logo">
      <h1>ENLOYADOS</h1>
    </a>
  </div>
  <button class="menu-toggle" onclick="toggleMenu()">☰</button>
  <div class="nav" id="navMenu">
    <a href="index.php">HOME</a>
    <a href="menu.php">MENU</a>
    <a href="about.php">QUIENES SOMOS</a>
    <a href="contact.php">CONTACTANOS</a>
    <a href="login.php">INICIAR SESIÓN</a>
  </div>
</header>
<script>
function toggleMenu() {
  var nav = document.getElementById('navMenu');
  nav.classList.toggle('active');
}
</script>