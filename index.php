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
    <title>Meu Portfólio</title>
    
    <link rel="icon" type="image/png" href="uploads/wd.png">

    <link rel="stylesheet" href="style.css">
  
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="glow-bg"></div>

    <nav class="main-nav">
        <div class="nav-container">
            <div style="display: flex; align-items: center; gap: 1.5rem;">
                <a href="index.html?p=home" class="logo">William<span>Gabriel</span></a>
                
                <div class="status-badge">
                    <span class="status-dot"></span>
                    Disponível para Projetos
                </div>
            </div>

            <div class="nav-links">
                <a href="index.html?p=home#inicio" class="<?= $page == 'home' ? 'active' : '' ?>">Início</a>
                <a href="<?= $page == 'home' ? '#sobre' : 'index.html?p=sobre' ?>">Sobre Mim</a>
                <a href="<?= $page == 'home' ? '#projetos' : 'index.html?p=trabalhos' ?>">Projetos</a>
                <a href="<?= $page == 'home' ? '#contato' : 'index.html?p=contato' ?>">Contato</a>
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
                <a href="index.html" class="logo">William<span></span></a>
                <p>&copy; <?= date('Y'); ?> William Gabriel. Todos os direitos reservados.</p>
            </div>  
        </div>
    </footer>

    <div class="fab-container" id="fabContainer">
        <div class="fab-options">
            <a href="https://wa.me/5519998471570?text=Olá,%20vi%20seu%20portfólio%20e%20gostaria%20de%20um%20orçamento!" 
               target="_blank" 
               class="fab-btn whatsapp" 
               title="WhatsApp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="https://instagram.com/williamgabriel8919" 
               target="_blank" 
               class="fab-btn instagram" 
               title="Instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://linkedin.com/in/william-gabriel-85b825399" 
               target="_blank" 
               class="fab-btn linkedin" 
               title="LinkedIn">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/Will142930" 
               target="_blank" 
               class="fab-btn github" 
               title="GitHub">
                <i class="fa-brands fa-github"></i>
            </a>
        </div>

        <button class="fab-main" id="fabMain" aria-label="Abrir Menu">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <script src="script.js"></script>
</body>
</html>