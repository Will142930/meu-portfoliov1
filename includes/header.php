<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Meu Portfólio | William Gabriel - Desenvolvedor Web</title>
    <meta name="description" content="Portfólio profissional de desenvolvimento web, criação de sites e sistemas sob medida.">
    <meta name="author" content="William Gabriel Do Nascimento Doria">
    
    <link rel="icon" type="image/png" href="uploads/wd.png">
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="glow-bg"></div>

    <nav class="main-nav">
        <div class="nav-container">
            <div style="display: flex; align-items: center; gap: 1.5rem;">
                <a href="home.php" class="logo">William<span>Gabriel</span></a>
                
                <div class="status-badge">
                    <span class="status-dot"></span>
                    Disponível para Projetos
                </div>
            </div>

            <div class="nav-links">
                <a href="home.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'home.php' || basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">Início</a>
                <a href="sobre.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'sobre.php') ? 'active' : ''; ?>">Sobre Mim</a>
                <a href="trabalhos.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'trabalhos.php') ? 'active' : ''; ?>">Projetos</a>
                <a href="contato.php" class="<?php echo (basename($_SERVER['PHP_SELF']) == 'contato.php') ? 'active' : ''; ?>">Contato</a>
            </div>
        </div>
    </nav>