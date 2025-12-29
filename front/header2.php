<header class="lados">
  <div class="logo">
    <a href="dashboard.php">
      <img src="img/logo.png" alt="logo">
      <h1>ENLOYADOS</h1>
    </a>
  </div>
  <button class="menu-toggle" onclick="toggleMenu()">☰</button>
  <div class="nav" id="navMenu">
    <a href="users.php">USUARIOS</a>
    <a href="addmenu.php">MENU</a>
    <a class="salir" href="back/salir.php">CERRAR SESIÓN</a>
  </div>
</header>
<script>
function toggleMenu() {
  var nav = document.getElementById('navMenu');
  nav.classList.toggle('active');
}
</script>