<?php
  require "header.html";
?>
      <main>
        <div class="wrapper-main">
          <section class="section-default">
            <h1>Signup</h1>
            <form action="includes/signup.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username">
              <input type="text" name="mail" placeholder="E-mail">
              <input type="password" name="pwd" placeholder="Pasword">
              <input type="password" name="pwd-repeat" placeholder="Pasword repeat">
              <button type="submit" name="signup-submit">Signup</button>
            </form>
          </section>
        </div>
      </main>
<?php
  include "footer.php";
?>
