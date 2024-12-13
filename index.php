<?php
require_once "config/database.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual da CM - Congregação Mariana</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="main-nav">
            <div class="logo">
                <h1>Manual da CM</h1>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Início</a></li>
                <li><a href="oracoes.php">Orações</a></li>
                <li><a href="ritos.php">Ritos</a></li>
                <li><a href="documentos.php">Documentos</a></li>
                <li><a href="biblioteca.php">Biblioteca</a></li>
            </ul>
        </nav>
    </header>

    <main class="hero-section">
        <div class="hero-content">
            <h1>Manual da Congregação Mariana</h1>
            <p>Guia completo de orações, ritos e documentos para congregados marianos</p>
        </div>
    </main>

    <section class="featured-content">
        <div class="container">
            <h2>Seções Principais</h2>
            <div class="content-grid">
                <div class="content-card">
                    <i class="fas fa-pray"></i>
                    <h3>Orações</h3>
                    <p>Orações diárias e devoções marianas</p>
                </div>
                <div class="content-card">
                    <i class="fas fa-church"></i>
                    <h3>Ritos</h3>
                    <p>Cerimônias e rituais da Congregação</p>
                </div>
                <div class="content-card">
                    <i class="fas fa-book"></i>
                    <h3>Documentos</h3>
                    <p>Documentos oficiais e regras</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Manual da CM - Todos os direitos reservados</p>
        </div>
    </footer>
</body>
</html>
