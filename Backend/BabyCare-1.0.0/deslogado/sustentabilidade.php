<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Sustentabilidade Ambiental - BleedWithDignity</title>
    <meta content="sustentabilidade menstrual, produtos ecológicos, meio ambiente, absorventes sustentáveis" name="keywords">
    <meta content="Informações sobre o impacto ambiental dos produtos menstruais e alternativas sustentáveis" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600;700&family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
     <?php
   require("../include/navbardeslogado.php");
   ?>

        <!-- Modal Perfil Start -->
<?php
   require("../include/modalperfildeslogado.php");
   ?>
   
    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buscar no site</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="Digite palavras-chave" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Sustentabilidade Ambiental</h1>
            <p class="text-white">Reduzindo o impacto ecológico da menstruação com escolhas conscientes</p>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Content Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Main Content Column -->
                <div class="col-lg-8 main-content">
                    <!-- Main Content -->
                    <div class="content-section wow fadeIn" data-wow-delay="0.1s">
                        <h2 class="mb-4">O Impacto Ambiental da Menstruação</h2>
                        <p class="lead">Uma pessoa que menstrua pode usar entre 5.000 e 15.000 absorventes descartáveis ao longo da vida, que podem levar até 500 anos para se decompor.</p>
                        
                        <img src="../img/impacto.webp" alt="Impacto ambiental" class="img-fluid rounded mb-4 img-border">
                        
                        <p>Os produtos menstruais descartáveis tradicionais representam um sério problema ambiental:</p>
                        
                        <ul class="impact-list">
                            <li><strong>Plástico:</strong> Um absorvente comum contém cerca de 4 sacolas plásticas em quantidade de plástico</li>
                            <li><strong>Decomposição:</strong> Podem levar de 500 a 800 anos para se decompor</li>
                            <li><strong>Resíduos:</strong> Geram cerca de 200kg de lixo por pessoa ao longo da vida</li>
                            <li><strong>Produção:</strong> Consomem grandes quantidades de água e energia na fabricação</li>
                            <li><strong>Transporte:</strong> Emitem CO2 em toda a cadeia de produção e distribuição</li>
                            <li><strong>Descarte:</strong> Muitos acabam em oceanos, prejudicando a vida marinha</li>
                        </ul>
                        
                        <div class="highlight-box wow fadeIn" data-wow-delay="0.2s">
                            <h4 class="text-primary"><i class="fas fa-info-circle me-2"></i>Impacto Global</h4>
                            <p>Estima-se que anualmente sejam descartados cerca de 45 bilhões de produtos menstruais no mundo. No Brasil, são aproximadamente 4 bilhões de absorventes descartados por ano, que podem levar séculos para se decompor.</p>
                        </div>
                    </div>
                    
                    <!-- Products Section -->
                    <div class="content-section wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="mb-4">Alternativas Sustentáveis</h2>
                        
                        <div class="row">
                            <!-- Product 1 -->
                            <div class="col-md-6 mb-4">
                                <div class="card product-card h-100">
                                    <div class="product-header">
                                        <h5><i class="fas fa-moon me-2"></i>Coletores Menstruais</h5>
                                    </div>
                                    <div class="product-body">
                                        <p>Feitos de silicone médico, duráveis (5-10 anos) e reutilizáveis.</p>
                                        <p><strong>Vantagens:</strong></p>
                                        <ul>
                                            <li>Reduzem resíduos em até 99%</li>
                                            <li>Econômicos a longo prazo</li>
                                            <li>Podem ficar até 12 horas sem troca</li>
                                            <li>Não contêm produtos químicos</li>
                                        </ul>
                                        <p class="text-muted small mt-2"><i class="fas fa-recycle me-1"></i> Cada coletor substitui cerca de 2.000 absorventes descartáveis</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 2 -->
                            <div class="col-md-6 mb-4">
                                <div class="card product-card h-100">
                                    <div class="product-header" style="background-color: #6f42c1;">
                                        <h5><i class="fas fa-tshirt me-2"></i>Absorventes de Pano</h5>
                                    </div>
                                    <div class="product-body">
                                        <p>Feitos de tecidos naturais como algodão, laváveis e reutilizáveis.</p>
                                        <p><strong>Vantagens:</strong></p>
                                        <ul>
                                            <li>Biodegradáveis</li>
                                            <li>Hipoalergênicos</li>
                                            <li>Confortáveis e respiráveis</li>
                                            <li>Durabilidade de 3-5 anos</li>
                                        </ul>
                                        <p class="text-muted small mt-2"><i class="fas fa-recycle me-1"></i> Conjunto de 6 absorventes substitui 1.500 descartáveis/ano</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 3 -->
                            <div class="col-md-6 mb-4">
                                <div class="card product-card h-100">
                                    <div class="product-header" style="background-color: #fd7e14;">
                                        <h5><i class="fas fa-undo me-2"></i>Calcinhas Absorventes</h5>
                                    </div>
                                    <div class="product-body">
                                        <p>Calcinhas com camadas absorventes, laváveis e reutilizáveis.</p>
                                        <p><strong>Vantagens:</strong></p>
                                        <ul>
                                            <li>Conforto superior</li>
                                            <li>Dispensam o uso de outros produtos</li>
                                            <li>Várias opções de absorção</li>
                                            <li>Durabilidade de 2-3 anos</li>
                                        </ul>
                                        <p class="text-muted small mt-2"><i class="fas fa-recycle me-1"></i> Cada calcinha substitui cerca de 100 descartáveis</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Product 4 -->
                            <div class="col-md-6 mb-4">
                                <div class="card product-card h-100">
                                    <div class="product-header" style="background-color: #d63384;">
                                        <h5><i class="fas fa-leaf me-2"></i>Absorventes Biodegradáveis</h5>
                                    </div>
                                    <div class="product-body">
                                        <p>Feitos com materiais naturais como bambu e algodão orgânico.</p>
                                        <p><strong>Vantagens:</strong></p>
                                        <ul>
                                            <li>Decompõem em 1-5 anos</li>
                                            <li>Sem plástico em sua composição</li>
                                            <li>Menos químicos em contato com o corpo</li>
                                            <li>Familiaridade de uso</li>
                                        </ul>
                                        <p class="text-muted small mt-2"><i class="fas fa-recycle me-1"></i> Decompõem 100x mais rápido que os tradicionais</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Benefits Section -->
                    <div class="content-section wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="mb-4">Benefícios da Menstruação Sustentável</h2>
                        
                        <div class="row align-items-center mb-4">
                            <div class="col-md-6">
                                <img src="../img/absorimpacto.png" alt="Meio ambiente" class="img-fluid rounded img-border">
                            </div>
                            <div class="col-md-6">
                                <h4>Para o Meio Ambiente</h4>
                                <ul>
                                    <li>Redução drástica de resíduos</li>
                                    <li>Menos poluição plástica</li>
                                    <li>Economia de recursos naturais</li>
                                    <li>Redução da pegada de carbono</li>
                                    <li>Menos impacto em aterros sanitários</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="row align-items-center flex-md-row-reverse">
                            <div class="col-md-6">
                                <img src="../img/saudefeminina.png" alt="Saúde feminina" class="img-fluid rounded img-border">
                            </div>
                            <div class="col-md-6">
                                <h4>Para a Saúde</h4>
                                <ul>
                                    <li>Menos exposição a químicos</li>
                                    <li>Redução de alergias e irritações</li>
                                    <li>Maior conforto físico</li>
                                    <li>Melhor equilíbrio da flora vaginal</li>
                                    <li>Menor risco de síndrome do choque tóxico</li>
                                </ul>
                                <p class="small text-muted">Produtos reutilizáveis geralmente são feitos com materiais mais naturais e menos tratados quimicamente.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tips Section -->
                    <div class="content-section wow fadeIn" data-wow-delay="0.5s">
                        <h2 class="mb-4">Como Fazer a Transição</h2>
                        
                        <div class="fact-card wow fadeIn" data-wow-delay="0.6s">
                            <h5><i class="fas fa-seedling text-success me-2"></i> Dicas para Adoção</h5>
                            <p>Mudar para produtos sustentáveis requer adaptação. Veja como facilitar:</p>
                            <ul>
                                <li><strong>Comece aos poucos:</strong> Use alternativas sustentáveis em casa primeiro</li>
                                <li><strong>Combine produtos:</strong> Use descartáveis só quando necessário</li>
                                <li><strong>Invista em kit básico:</strong> 2-3 coletores ou 6-8 absorventes de pano</li>
                                <li><strong>Aprenda a higienizar:</strong> Siga as instruções do fabricante</li>
                                <li><strong>Tenha paciência:</strong> Pode levar 2-3 ciclos para se adaptar</li>
                                <li><strong>Compartilhe experiências:</strong> Troque dicas com outras pessoas</li>
                            </ul>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card product-card h-100">
                                    <div class="product-header" style="background-color: #6c757d;">
                                        <h5><i class="fas fa-tint me-2"></i>Cuidados com Coletores</h5>
                                    </div>
                                    <div class="product-body">
                                        <ul>
                                            <li>Ferva por 5 min antes do primeiro uso</li>
                                            <li>Lave com sabão neutro entre as trocas</li>
                                            <li>Esterilize mensalmente</li>
                                            <li>Armazene em saco de algodão</li>
                                            <li>Substitua a cada 5-10 anos</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card product-card h-100">
                                    <div class="product-header" style="background-color: #6c757d;">
                                        <h5><i class="fas fa-tshirt me-2"></i>Cuidados com Absorventes de Pano</h5>
                                    </div>
                                    <div class="product-body">
                                        <ul>
                                            <li>Deixe de molho em água fria após uso</li>
                                            <li>Lave à mão ou na máquina (ciclone suave)</li>
                                            <li>Seque ao sol (desinfeta e remove manchas)</li>
                                            <li>Não use amaciantes ou alvejantes</li>
                                            <li>Armazene em local seco</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Myths Section -->
                    <div class="content-section wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="mb-4">Mitos e Verdades</h2>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card product-card h-100">
                                    <div class="product-header" style="background-color: #6c757d;">
                                        <h5><i class="fas fa-times-circle me-2"></i>Mitos</h5>
                                    </div>
                                    <div class="product-body">
                                        <ul>
                                            <li>"Produtos reutilizáveis são anti-higiênicos"</li>
                                            <li>"Só servem para fluxos leves"</li>
                                            <li>"São complicados de usar"</li>
                                            <li>"Não funcionam para atividades físicas"</li>
                                            <li>"São muito caros" (a longo prazo, economizam)</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card product-card h-100">
                                    <div class="product-header" style="background-color: #20c997;">
                                        <h5><i class="fas fa-check-circle me-2"></i>Verdades</h5>
                                    </div>
                                    <div class="product-body">
                                        <ul>
                                            <li>São seguros quando higienizados corretamente</li>
                                            <li>Existem opções para todos os fluxos</li>
                                            <li>Exige um período de adaptação</li>
                                            <li>Atletas profissionais usam coletores</li>
                                            <li>Economia de até 90% em 5 anos</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Comment Section -->
                    <div class="comment-section wow fadeIn" data-wow-delay="0.7s">
                        <h3 class="mb-4"><i class="fas fa-comments text-secondary me-2"></i>Compartilhe sua experiência</h3>
                        <p>Você já usa produtos menstruais sustentáveis? Tem alguma dica para quem quer começar? Conte para a comunidade!</p>
                        
                        <!-- Existing Comments -->
                        <div class="comment wow fadeIn" data-wow-delay="0.8s">
                            <div class="d-flex">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="User" class="user-avatar">
                                <div>
                                    <h5 class="mb-1">Ana Claudia</h5>
                                    <p class="text-muted small mb-2">Postado em 15/06/2023</p>
                                    <p>Uso coletor há 3 anos e foi a melhor decisão! No início foi difícil me adaptar, mas hoje não troco por nada. Economizei muito dinheiro e lixo. Dica: assistam tutoriais no YouTube para aprender a colocar corretamente.</p>
                                    
                                    <div class="comment-actions">
                                        <span class="action-btn like-btn"><i class="fas fa-heart me-1"></i> Curtir (24)</span>
                                        <span class="action-btn reply-btn"><i class="fas fa-reply me-1"></i> Responder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="comment wow fadeIn" data-wow-delay="0.9s">
                            <div class="d-flex">
                                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User" class="user-avatar">
                                <div>
                                    <h5 class="mb-1">Juliana Santos</h5>
                                    <p class="text-muted small mb-2">Postado em 10/06/2023</p>
                                    <p>Comecei com absorventes de pano e depois migrei para as calcinhas absorventes. Demorei 6 meses para fazer a transição completa, mas valeu a pena! Minha pele agradece - não tenho mais irritações. Para quem tem dúvidas: comecem usando em casa nos dias de fluxo mais leve.</p>
                                    
                                    <div class="comment-actions">
                                        <span class="action-btn like-btn"><i class="fas fa-heart me-1"></i> Curtir (15)</span>
                                        <span class="action-btn reply-btn"><i class="fas fa-reply me-1"></i> Responder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Comment Form -->
                        <div class="comment-form wow fadeIn" data-wow-delay="1s">
                            <h5 class="mb-3">Deixe seu comentário</h5>
                            <form id="add-comment">
                                <div class="mb-3">
                                    <textarea class="form-control" rows="4" placeholder="Compartilhe suas experiências com produtos menstruais sustentáveis..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar comentário</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar Column -->
                <div class="col-lg-4 sidebar-content">
                    <div class="content-section wow fadeIn" data-wow-delay="0.5s">
                        <h4 class="mb-4">Comparação de Impacto</h4>
                        <div class="list-group">
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-trash text-danger me-2"></i><strong>Absorventes descartáveis:</strong> 200kg de lixo/pessoa ao longo da vida
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-recycle text-success me-2"></i><strong>Coletores:</strong> Apenas 1-2 unidades em 10 anos
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-money-bill-wave text-primary me-2"></i><strong>Economia:</strong> Até R$ 3.000 em 10 anos com coletores
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-tree text-success me-2"></i><strong>Recursos:</strong> Absorventes de pano usam 90% menos água na produção
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-gas-pump text-warning me-2"></i><strong>Energia:</strong> Coletores reduzem em 95% o consumo energético vs descartáveis
                            </div>
                        </div>
                    </div>
                    
                    <div class="content-section wow fadeIn" data-wow-delay="0.6s">
                        <h4 class="mb-4">Dicas de Higiene</h4>
                        <div class="list-group">
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-hand-holding-water text-primary me-2"></i>Lave as mãos antes e após manipular produtos reutilizáveis
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-soap text-primary me-2"></i>Use sabão neutro para lavar coletores e absorventes
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-sun text-warning me-2"></i>Seque ao sol para desinfecção natural
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-box text-primary me-2"></i>Armazene em sacos de algodão ou recipientes arejados
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-clock text-primary me-2"></i>Troque coletores a cada 8-12 horas
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-recycle text-success me-2"></i>Composte absorventes biodegradáveis (sem plástico)
                            </div>
                        </div>
                    </div>
                    
                    <div class="content-section wow fadeIn" data-wow-delay="0.7s">
                        <h4 class="mb-4">Onde Comprar</h4>
                        <div class="list-group">
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-store text-primary me-2"></i>Lojas especializadas em produtos sustentáveis
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-globe-americas text-primary me-2"></i>Lojas online nacionais
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-hands-helping text-primary me-2"></i>Feiras de empreendedorismo feminino
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-scissors text-primary me-2"></i>Faça você mesma (DIY) absorventes de pano
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <i class="fas fa-piggy-bank text-primary me-2"></i>Cooperativas de costureiras locais
                            </div>
                        </div>
                    </div>
                    
                    <div class="content-section wow fadeIn" data-wow-delay="0.8s">
                        <h4 class="mb-4">Você sabia?</h4>
                        <div class="alert alert-primary">
                            <p><i class="fas fa-info-circle me-2"></i> Se todas as brasileiras usassem coletores, evitaríamos 1,5 bilhão de absorventes descartados por mês!</p>
                        </div>
                        <div class="alert alert-info">
                            <p><i class="fas fa-info-circle me-2"></i> O primeiro coletor menstrual moderno foi patenteado em 1937, mas só ganhou popularidade recentemente.</p>
                        </div>
                        <div class="alert alert-success">
                            <p><i class="fas fa-info-circle me-2"></i> Absorventes de pano eram comuns até a década de 1920, quando os descartáveis foram inventados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>BleedWithDignity</a>, todos os direitos reservados.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
    
    
    <!-- Modal de Login-->
    <div class="modal fade" id="loginRequiredModal" tabindex="-1" aria-labelledby="loginRequiredModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="loginRequiredModalLabel">Acesso Restrito</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <i class="fas fa-lock fa-4x text-primary mb-3"></i>
                    <h4 class="mb-3">Você precisa estar logado</h4>
                    <p>Para deixar um comentário, faça login ou crie uma conta.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Mais tarde</button>
                    <a href="login.html" class="btn btn-primary">Fazer Login</a>
                </div>
            </div>
        </div>
    </div>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    const loginModal = new bootstrap.Modal(document.getElementById('loginRequiredModal'));
    
    function blockAllActions(event) {
        event.preventDefault();
        event.stopPropagation();
        event.stopImmediatePropagation();
        loginModal.show();
        return false;
    }

    const commentForm = document.getElementById('add-comment');
    if (commentForm) {
        const newForm = commentForm.cloneNode(true);
        commentForm.parentNode.replaceChild(newForm, commentForm);
        
        newForm.addEventListener('submit', blockAllActions, true);
        newForm.onsubmit = blockAllActions;
        newForm.setAttribute('onsubmit', 'return false;');
    }

    document.querySelectorAll('.comment-section, .comment').forEach(section => {
        section.addEventListener('click', function(e) {
            if (!e.target.closest('a') && !e.target.closest('button')) {
                blockAllActions(e);
            }
        }, true);
    });

    window.addEventListener('load', function() {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.style.display = 'none';
        }
    });
});
</script>
</body>
</html>