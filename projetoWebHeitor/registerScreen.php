<?php
include("header.php");
?>

<main class="registerMain">
    <form class="registerForm" action="check_register_login.php" method="post">
        <input class="input" type="text" name="loginUsername" id="loginUsername" placeholder="Choose a Username">
        <input class="input" type="text" name="loginPassword" id="loginPassword" placeholder="Choose a Password">
        <p>User type:</p>
        <div>
        <input type="radio" name="loginType" value="client" id="Client">
        <label for="Client">Client</label></div>
        <div>
        <input type="radio" name="loginType" value="admin" id="Admin" placeholder="Admin">
        <label for="Admin">Admin</label></div>

        <input class="" type="submit" value="REGISTER">
    </form>
</main>

<?php
include("footer.php");
?>