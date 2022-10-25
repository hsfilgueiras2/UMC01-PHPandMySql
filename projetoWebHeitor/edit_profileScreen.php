<?php include("header.php");
include("database.php");

$username = $usuario['username'];
$password = $usuario['password'];

$sqlProfile = "SELECT * FROM heitor_users_info WHERE user_username='$username' AND user_password='$password'";

$resultado = mysqli_query($conexao, $sqlProfile);
$dados = mysqli_fetch_assoc($resultado);
$_SESSION['userInfo'] = $dados;
?>


<main class="editProfileMain">
    <h1>Atualizando perfil</h1>
    <hr>
    <form class="editProfileForm" action="edit_profile.php" method="POST">
        <span>
            <h6>Current profile picture:</h6>
            <img src="<?php print($dados['user_pictureURL']) ?>" alt="">
            <input type="text" placeholder="New picture URL" name="pictureURL">
        </span>
        <div>
            <span>
                <h6>Current username: </h6>
                <h4><?php print($dados['user_username']) ?></h4>
                <input type="text" placeholder="New username" name="username">
            </span>
            <span>
                <h6>Current password: </h6>
                <h4><?php print($dados['user_password']) ?></h4>
                <input type="text" placeholder="New password" name="password">
            </span>
            <span>
                <h6>Current full name: </h6>
                <h4><?php print($dados['user_fullname']) ?></h4>
                <input type="text" placeholder="New full name" name="fullname">
            </span>
            <span>
                <h6>Current email: </h6>
                <h4><?php print($dados['user_email']) ?></h4>
                <input type="email" placeholder="New email" name="email">
            </span>
            <span>
                <h6>Current identification: </h6>
                <h4><?php print($dados['user_identification']) ?></h4>
                <input type="text" placeholder="New identificiation" name="identification">
            </span>
            <span>
                <h6>Current telephone number: </h6>
                <h4><?php print($dados['user_tele']) ?></h4>
                <input type="tel" placeholder="New telephone number" name="telephone">
            </span>
            <span>
                <h6>Current address: </h6>
                <h4><?php print($dados['user_address']) ?></h4>
                <input type="text" placeholder="New address" name="address">
            </span>
            <span>
                <h6>Current birthday: </h6>
                <h4><?php print($dados['user_birthday']) ?></h4>
                <input type="date" placeholder="New birthday" name="birthday">
            </span>

            <span>
                <h6>Bio: </h6>
                <h4><?php print($dados['user_bio']) ?></h4>
                <textarea placeholder="New bio" name="bio"></textarea>
            </span>
        </div>
        <input type="submit" class="bn31" value="Atualizar dados">
    </form>


</main>
<?php include("footer.php"); ?>