<?php
$soda = "fanta";
include "includes/head.php";
include "includes/nav.php";
?>

<div class="container content">

<!-- Banner -->
<div id="book-banner" class="text-center banner">
  <div class="center-text">
    <h1 class="title">Book an appointment</h1>
    <h3>Let's have a chat...</h3>
  </div>
</div>

<!-- Message form -->
<div class="message-box">
  <form action="book.php" method="post">
    Full name: <br>
    <input type="text" name="name" placeholder="Full name" required autocomplete="off"><br><br>
    Email address: <br>
    <input type="text" name="email" placeholder="Email address" required autocomplete="off"><br><br>
    Message: <br>
    <textarea name="message" rows="5" placeholder="Write your message here..."></textarea><br><br>
    <input type="submit" value="Send a message"><br><br>
  </form>
</div>

<!-- Address -->
<?php include "includes/address.php" ?>

</div>

<?php include "includes/footer.php" ?>
<?php include "includes/foot.php" ?>


<!--
<div class="message-box row">
  <form action="book.php" method="post" class="col">
    Full name: <br>
    <input type="text" name="name" placeholder="Full name" required autocomplete="off"><br><br>
    Email address: <br>
    <input type="text" name="email" placeholder="Email address" required autocomplete="off"><br><br>
    Message: <br>
    <textarea name="message" rows="5" placeholder="Write your message here..."></textarea><br><br>
    <input type="submit" value="Send a message"><br><br>
  </form>
  <img id="coffee" src="/images/coffee.jpg" alt="coffee meetup" class="col">
</div>
-->
