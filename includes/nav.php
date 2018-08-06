<?php
if (!isset($soda)) {
  header("Location: /home.php");
}
?>

<!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand title" href="home.php">Lauryn Derrick Therapies</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about.php">About Me</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Publications</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Personal development</a>
          <a class="dropdown-item" href="#">Relationships</a>
          <a class="dropdown-item" href="#">Family</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a id="book" class="nav-link" href="/book.php">Book an appointment</a>
      </li>
    </ul>
  </div>
</nav>
