<?php
    include('verifica_login.php');
?>
<h2>
    Olá <?php echo $_SESSION['usuario'];?>! Tudo bem?
</h2>

<h2>
    <a href="logout.php">Sair</a>
</h2>