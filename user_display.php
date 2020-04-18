<?php
include 'config.php';
$result = $mysqli->query('SELECT * FROM users');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Account || BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">BOLT Sports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li class="active"><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>
<body>
  <table align = "center" border="3px" style = "width:1200px; line-height:40,px;">
    <tr>
      <th colspan = "4"><h2>User Record</h2></th>
    </tr>
    <t>
      <th>Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Adress</th>
      <th>City</th>
      <th>Pin</th>
      <th>Email</th>
    </t>
    <?php
    while($rows=mysqli_fetch_assoc($result))
    {
    ?>
      <tr>
        <td><?php echo $rows['id'];?></td>
        <td><?php echo $rows['fname'];?></td>
        <td><?php echo $rows['lname'];?></td>
        <td><?php echo $rows['adress'];?></td>
        <td><?php echo $rows['city'];?></td>
        <td><?php echo $rows['pin'];?></td>
        <td><?php echo $rows['email'];?></td>
    <?php
  }
    ?>
  </table>
</body>
</html>
