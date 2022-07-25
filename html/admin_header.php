<header class="header">

    <div class="flex">
        <a href="admin_page.php" class="logo"><span>Painel</span> do Administrador</a>

        <nav class="navbar">
            <a href="admin_page.php">Home</a>
            <a href="admin-products.php">Produtos</a>
            <a href="admin_orders.php">Pedidos</a>
            <a href="admin_users.php">Usuários</a>
            <a href="admin_contacts.php">Mensagens</a>
        </nav>

        <div class="icons">
            <div id="menu_btn" class="fas fa-bars"></div>
            <div id="user_btn" class="fas fa-user"></div>
        </div>

        <div class="account-box">
            <p>username: <span><?php echo $_SESSION['admin_name']; ?></span></span></p>
            <p>email: <span><?php echo $_SESSION['admin_email']; ?></span></span></p>
            <a href="logout.php" class="delete-btn">Sair</a>
        </div>

    </div>

</header>