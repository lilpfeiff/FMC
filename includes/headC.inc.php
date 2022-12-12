<?php
  /*
  Filename: headC.inc.php
  Description: customer pages header
  Author: Loren Pfeiffer
  */
?>

<?php
  date_default_timezone_set('America/New_York');
  if (empty($_GET['id'])) {
    $cID = $_SESSION['id'];
  }
  else {$cID = $_GET['id'];}
?>

<header>
    <img class="logo" src="images/logo4.png" alt="logo">
    <nav>
        <ul class="navLinks">
          <?php
            echo "<li><a href='customer-home.php?id=" . $cID . "'>Home</a></li>";
            echo "<li><a href='customer-vendor.php?id=" . $cID . "'>Vendors</a></li>";
            echo "<li><a href='customer-products.php?id=" . $cID . "'>Products</a></li>";
            echo "<li><a href='customer-home.php?id=" . $cID . "#markets'>Markets</a></li>";
            echo "<li><a href='customer-home.php?id=" . $cID . "#events'>Events</a></li>";
            echo "<li><a href='customer-home.php?id=" . $cID . "#contact-us'>Contact Us</a></li>";
          ?>
        </ul>
    </nav>
    <a class="logoutButton" href="logout.php"><button>Logout</button></a>
</header>
