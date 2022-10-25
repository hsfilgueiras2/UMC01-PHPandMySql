<?php
include("header.php");
?>

<main class="loginMain">
    <form class="loginForm" action="check_login.php" method="post">
        <input class="input" type="text" name="loginUsername" id="loginUsername" placeholder="Username">
        <input class="input"type="text" name="loginPassword" id="loginPassword" placeholder="Password">
        <input type="submit" value="LOGIN">
    </form>
    <p>Não tem uma conta? <a href="registerScreen.php">Cadastre-se</a></p>
    <?php
            //Comando em PHP para imprimir uma mensagem de erro abaixo do formulário de login
            //Comando para iniciar uma sessão em PHP
            //Verifica se existe alguma mensagem na sessão, armazena em uma variável e imprime
            if(isset($_SESSION['mensagem']))
            {
                //armazena em uma variável a mensagem da sessão
                $mensagem = $_SESSION['mensagem'];

                //comando para imprimir a mensagem da sessão 
                echo '<br><p>'. $mensagem . '</p>';

                //Unset retira a mensagem da sessão
                unset($_SESSION['mensagem']);

            }
        ?>
</main>

<?php
include("footer.php");
?>