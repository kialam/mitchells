<?php
// Code to identify current page name
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$page = $parts[count($parts) - 1];
?>

<header class="clearfix">
  <h1><a href="./">Mitchell's</a></h1>
  <nav>
    <ul class="sf-menu">
      <li<?php if ($page == "index.php") { echo ' class="active"'; } ?>><a href="./">Home</a></li>
      <li<?php if ($page == "about.php") { echo ' class="active"'; } ?>><a href="about.php">About</a>
        <ul>
          <li><a href="#">History</a></li>
          <li><a href="#">Partners</a></li>
        </ul>
      </li>
      <li><a href="#">Services</a></li>
      <li<?php if ($page == "careers.php") { echo ' class="active"'; } ?>><a href="careers.php">Careers</a></li>
      <li<?php if ($page == "contact.php") { echo ' class="active"'; } ?>><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
</header>