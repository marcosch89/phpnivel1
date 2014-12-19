<?php

session_start();

if (!isset($_SESSION['usuarioSession']) and ! isset($_SESSION['senhaSession'])):
    echo 'para ter acesso a esta pagina, tu precisa logar vei. <a href="index.php">TRY AGAIN</a>';
    die;
endif;