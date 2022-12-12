<?php
  /*
  Filename: headV.inc.php
  Description: header for vendor pages
  Author: Loren Pfeiffer
  */
?>

<?php
  //session_start();
  date_default_timezone_set('America/New_York');
  if (empty($_GET['id'])) {
    $vID = $_SESSION['id'];
  }
  else {$vID = $_GET['id'];}
  if (empty($_GET['vFN'])) {
    $vFN = $_SESSION['vFN'];
  }
  else {$vFN = $_GET['vFN'];}

?>
<header>
    <img class="logo" src="images/logo4.png" alt="logo">
    <nav>
        <ul class="navLinks">
          <?php
            echo "<li><a href='vendor-home.php?id=" . $vID . "&vFN=" . $vFN . "'>Home</a></li>";
            echo "<li><a href='vendor-follower-view.php?id=" . $vID .  "&vFN=" . $vFN . "'>Followers</a></li>";
            echo "<li><a href='vendor-products.php?id=" . $vID .  "&vFN=" . $vFN . "'>Products</a></li>";
            echo "<li><a href='vendor-inventory-tracking.php?id=" . $vID .  "&vFN=" . $vFN . "'>Inventory Tracking</a></li>";
            echo "<li><a href='vendor-home.php?id=" . $vID .  "&vFN=" . $vFN . "#markets'>Markets</a></li>";
            echo "<li><a href='vendor-home.php?id=" . $vID . "&vFN=" . $vFN . "#events'>Events</a></li>";
            echo "<li><a href='vendor-home.php?id=" . $vID .  "&vFN=" . $vFN . "#contact-us'>Contact Us</a></li>";

            ?>
        </ul>
    </nav>
    <?php // echo "<a class='helloUser' href=''><button>Hello " . $vFN . "!</button></a>"?>
     <a class="logoutButton" href="logout.php"><button>Logout</button></a>
</header>
