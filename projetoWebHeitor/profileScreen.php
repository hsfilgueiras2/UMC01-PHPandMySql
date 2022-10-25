<?php include("header.php");
include("database.php");

$username = $usuario['username'];
$password = $usuario['password'];

$sqlProfile = "SELECT * FROM heitor_users_info WHERE user_username='$username' AND user_password='$password'";

$resultado = mysqli_query($conexao, $sqlProfile);
$dados = mysqli_fetch_assoc($resultado);
$_SESSION['userInfo'] = $dados;
?>


<main class="mainProfile">

    <h1>VOCE ESTA LOGADO</h1>

    <h3>Seja bem-vindo, <?php print $usuario['username']; ?> </h3>
    <p>Você tem o perfil de acesso: <?php print $usuario['type']; ?></p>
    <div></div>
    <div class="profile">
        <span>
            <h6>Profile picture: </h6>
            <img src="<?php print($dados['user_pictureURL']) ?>" alt="">
        </span>
        <span>
            <h6>Full name: </h6>
            <h3><?php print($dados['user_fullname']) ?></h3>
        </span>
        <span>
            <h6>Username:</h6>
            <h4> <?php print($dados['user_username']) ?></h4>
        </span>
        <span>
            <h6>Password: </h6>
            <h4><?php print($dados['user_password']) ?></h4>
        </span>
        
        <span>
            <h6>Email: </h6>
            <h4><?php print($dados['user_email']) ?></h4>
        </span>
        <span>
            <h6>Identification: </h6>
            <h4><?php print($dados['user_identification']) ?></h4>
        </span>
        <span>
            <h6>Telephone: </h6>
            <h4><?php print($dados['user_tele']) ?></h4>
        </span>
        <span>
            <h6>Address: </h6>
            <h4><?php print($dados['user_address']) ?></h4>
        </span>
        <span>
            <h6>Birthday: </h6>
            <h4><?php print($dados['user_birthday']) ?></h4>
        </span>

        <span>
            <h6>Bio: </h6>
            <h5><?php print($dados['user_bio']) ?></h5>
        </span>
        <a href="edit_profileScreen.php"><button class="bn31"><span class="bn31span">Atualizar informacoes</span></button></a>
    </div>


</main>
<?php include("footer.php"); ?>