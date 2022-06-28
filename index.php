<?php
 include 'header.php'
?>

<?php

  if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];

    echo $email;
    echo $pass;
  }

?>

<table>
  <h3>Login form using session and cookies with remember me </h3>

  <form method="post" action="validate.php">
   
      <label for="email">Email</label>
      <input type="text" name="email" required> <br/><br/>
      <label for="password">Password</label>
      <input type="password" name="password" required>

      <br/><br/>
      <input type="checkbox" name="remember" value="1">Remember Me
      <br/>
      <input type="submit" value="Login" name="login">
   
  </form>
</table>

    <?php
    

    
    ?>
  </body>
</html>
