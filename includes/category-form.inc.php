<?php
  /*
  Filename: category-form.inc.php
  Description: Form for vendors to add new categories for products
  Author: Loren Pfeiffer
  */
?>

<?php
  if(isset($_POST['submitNewCategory'])) {
    if(!empty($newProductCategory)) {
      // code to send to database
      $server = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $db = "fmc";
      $con = mysqli_connect($server, $dbuser, $dbpass, $db);

      if (!$con) {
        die("<br>Connection failed: " . mysqli_connect_error());
      }

      $sqlCat = "INSERT INTO Category (CategoryName) VALUES ('$newProductCategory')";

      if (mysqli_query($con, $sqlCat)) {
        // echo "<br><br><h3>New Product added successfully</h3>";
      } else {
        echo "<br> Error: " . $sqlCat . "<br>" . mysqli_error($con);
      }

      mysqli_close($con);

      $output_form = true;
    }
  }
?>


<button id="myBtn" type="button">Add New Category</button>
      <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <form id="addProductCategoryForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <label for="newProductCategory" id="newCatLabel" >New Category Name: </label>
              <input type="text" id="newProductCategory" name="newProductCategory" value="<?php echo $newProductCategory; ?>" >
              <input type="submit" name="submitNewCategory" id="submitNewCategory" value="Add New Category">
            </form>
          </div>
      </div>

      <script type="text/javascript">
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on the button, open the modal
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      </script>
