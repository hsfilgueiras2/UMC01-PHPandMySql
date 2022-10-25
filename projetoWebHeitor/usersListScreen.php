<?php
require("header.php");
require("database.php");
$sql = "SELECT * FROM heitor_users_info";
$resultado = mysqli_query($conexao, $sql);
$usuario = $_SESSION['usuario'];
?>
<main class="usersListMain">
  <h1>Users list</h1>
  <?php if ($usuario['type'] != "admin") { ?>
    <ul class="usersList">
      <?php while ($userInfo = mysqli_fetch_assoc($resultado)) { ?>
        <li>
          <img src="<?php print($userInfo['user_pictureURL'])?>" alt="">
          <p class="fullname"><?php print($userInfo['user_fullname'])?></p>
          <p class="identification">ID: <?php print($userInfo['user_identification'])?></p>
          <p class="birthday">Born: <?php print($userInfo['user_birthday'])?></p>
          <p class="email"><?php print($userInfo['user_email'])?></p>
          <p class="telephone"><?php print($userInfo['user_tele'])?></p>
          <p class="address"><?php print($userInfo['user_address'])?></p>
          <p class="bio"><?php print($userInfo['user_bio'])?></p>
        </li>
      <?php } 
      ?>
    </ul>
  <?php }else { ?>
    <ul class="usersList">
      <?php while ($userInfo = mysqli_fetch_assoc($resultado)) { ?>
        <li>
          <img src="<?php print($userInfo['user_pictureURL'])?>" alt="">
          <p class="fullname"><?php print($userInfo['user_fullname'])?></p>
          <p class="identification">ID: <?php print($userInfo['user_identification'])?></p>
          <p class="birthday">Born: <?php print($userInfo['user_birthday'])?></p>
          <p class="email"><?php print($userInfo['user_email'])?></p>
          <p class="telephone"><?php print($userInfo['user_tele'])?></p>
          <p class="address"><?php print($userInfo['user_address'])?></p>
          <p class="bio"><?php print($userInfo['user_bio'])?></p>
          <form action="delete_user.php" method="POST">
          <input type="hidden" name="password" value=<?php print($userInfo['user_password'])?>>
          <input type="hidden" name="username" value=<?php print($userInfo['user_username'])?>>
          <input type="submit" class="delButton bn31" value="DELETE">
          </form>
        </li>
      <?php } 
      ?>
    </ul>
  <?php } ?>
</main>
<?php
include("footer.php");
?>