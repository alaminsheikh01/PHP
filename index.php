<?php
 include 'header.php'
?>

<table>
  <h3>Login form using session and cookies with remember me </h3>

  <form method="post" action="validate.php">
   
      <label for="email">Email</label>
      <input type="text" name="email"> <br/><br/>
      <label for="password">Password</label>
      <input type="password" name="password">

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
