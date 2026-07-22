<?php
// Sistema de rotas dinâmicas
$page = isset($_GET['p']) ? $_GET['p'] : 'home';
$allowed_pages = ['home', 'sobre', 'trabalhos', 'contato'];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>William Gabriel | Portfólio</title>

    <link rel="icon" type="image/x-icon" href="uploads/wd.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="glow-bg"></div>

    <nav class="main-nav">
        <div class="nav-container">
            <a href="index.php" class="logo">William<span>  Gabriel</span></a>
            
            <div class="nav-links">
                <a href="<?= $page == 'home' ? '#inicio' : 'index.php?p=home' ?>" class="<?= $page == 'home' ? 'active' : '' ?>">Home</a>
                <a href="<?= $page == 'home' ? '#sobre' : 'index.php?p=sobre' ?>">Sobre</a>
                <a href="<?= $page == 'home' ? '#projetos' : 'index.php?p=trabalhos' ?>">Projetos</a>
                <a href="<?= $page == 'home' ? '#contato' : 'index.php?p=contato' ?>">Contato</a>
            </div>
        </div>
    </nav>

    <main class="content-wrapper">
        <?php 
        if ($page == 'home') {
            if (file_exists('pages/home.php')) include 'pages/home.php';
            if (file_exists('pages/sobre.php')) include 'pages/sobre.php';
            if (file_exists('pages/trabalhos.php')) include 'pages/trabalhos.php';
            if (file_exists('pages/contato.php')) include 'pages/contato.php';
        } else {
            $file_path = "pages/{$page}.php";
            if (file_exists($file_path)) {
                include $file_path;
            } else {
                echo "<p style='text-align: center; color: var(--text-muted); padding: 4rem 0;'>Página não encontrada.</p>";
            }
        }
        ?>
    </main>

    <footer class="main-footer">
        <div class="footer-container">
            <div class="footer-brand">
                <a href="index.php" class="logo">William<span>  Gabriel</span></a>
                <p>&copy; <?= date('Y'); ?> William Gabriel. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <div class="fab-container" id="fabContainer">
        <div class="fab-options">
            <a href="https://github.com/Will142930" target="_blank" title="GitHub" class="fab-btn github">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="https://linkedin.com/in/william-gabriel-85b825399" target="_blank" title="LinkedIn" class="fab-btn linkedin">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="https://instagram.com/williamgabriel8919" target="_blank" title="Instagram" class="fab-btn instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://wa.me/5519998471570?text=Olá!%20Vim%20pelo%20seu%20portfólio." target="_blank" title="WhatsApp" class="fab-btn whatsapp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
        </div>

        <button class="fab-main" id="fabToggle" aria-label="Abrir redes sociais">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <script src="script.js"></script>

</body>
</html>