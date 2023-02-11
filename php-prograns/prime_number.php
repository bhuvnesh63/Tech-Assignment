<!DOCTYPE html>
<html>
  <head>
    <title>Prime Number Checker</title>
  </head>
  <body>
    <?php
      if (isset($_POST['submit'])) {
        // Function to check if a number is prime
        function is_prime($num) {
          if ($num <= 1) {
            return false;
          }

          for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
              return false;
            }
          }

          return true;
        }

        // Read the number from the form
        $num = (int) $_POST['num'];

        // Check if the number is prime
        if (is_prime($num)) {
          echo $num . " is a prime number.\n";
        } else {
          echo $num . " is not a prime number.\n";
        }
      } else {
    ?>
    <!-- HTML form to get user input -->
    <form action="" method="post">
      <label for="num">Enter a number:</label>
      <input type="text" id="num" name="num">
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php
      }
    ?>
  </body>
</html>
