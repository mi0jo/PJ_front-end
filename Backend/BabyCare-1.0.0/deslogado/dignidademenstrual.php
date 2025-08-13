<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Dignidade Menstrual - BleedWithDignity</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="dignidade menstrual, saúde menstrual, direitos menstruais" name="keywords">
        <meta content="Entenda o que é dignidade menstrual e sua importância para a saúde e direitos das mulheres" name="description">

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
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <?php
   require("../include/navbardeslogado.php");
   ?>

        <!-- Modal Perfil Start -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="profileModalLabel">Meu Perfil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <i class="fas fa-user-circle fa-4x text-secondary"></i>
                </div>
                <div class="mb-3">
                    <a href="login.html" class="btn btn-outline-primary w-100">Entrar</a>
                </div>
                <div class="mb-3">
                    <a href="cadastro.html" class="btn btn-primary w-100">Criar Conta</a>
                </div>
                <hr>
                <div class="d-grid gap-2">
                
                    <a href="#" class="btn btn-light text-start text-danger"><i class="fas fa-sign-out-alt me-2"></i> Sair</a>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <h1 class="display-2 text-white mb-4">O que é Dignidade Menstrual?</h1>
                <p class="text-white">Entendendo e promovendo os direitos menstruais básicos</p>
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
                            <h2 class="mb-4">Definição de Dignidade Menstrual</h2>
                            <p class="lead">Dignidade menstrual é o direito de toda pessoa que menstrua de vivenciar seu ciclo menstrual de forma saudável, segura e sem vergonha ou constrangimento.</p>
                            
                            <img src="../img/dignidade menstrual.jpg" alt="Dignidade Menstrual" class="img-fluid rounded mb-4 img-border">
                            
                            <p>A dignidade menstrual engloba três aspectos fundamentais:</p>
                            <ol>
                                <li><strong>Acesso</strong> a produtos menstruais adequados e seguros</li>
                                <li><strong>Educação</strong> sobre saúde menstrual e corpo humano</li>
                                <li><strong>Ambiente</strong> que permita o manejo da menstruação com privacidade e segurança</li>
                            </ol>
                            
                            <div class="highlight-box wow fadeIn" data-wow-delay="0.2s">
                                <h4 class="text-primary"><i class="fas fa-quote-left me-2"></i>Dignidade Menstrual é um Direito Humano</h4>
                                <p>Em 2014, a ONU reconheceu oficialmente que o direito à higiene menstrual é uma questão de direitos humanos e saúde pública. A menstruação não deve ser um obstáculo para educação, trabalho ou participação social.</p>
                            </div>
                        </div>
                        
                        <!-- Why It Matters -->
                        <div class="content-section wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="mb-4">Por que a Dignidade Menstrual é importante?</h2>
                            <p>A falta de dignidade menstrual tem impactos profundos na vida de milhões de pessoas:</p>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fact-card wow fadeIn" data-wow-delay="0.4s">
                                        <h5><i class="fas fa-graduation-cap text-danger me-2"></i> Educação</h5>
                                        <p>Meninas perdem em média 45 dias de aula por ano devido à menstruação quando não têm acesso a produtos adequados.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fact-card wow fadeIn" data-wow-delay="0.5s">
                                        <h5><i class="fas fa-briefcase text-danger me-2"></i> Trabalho</h5>
                                        <p>Mulheres em situação de pobreza menstrual têm maior probabilidade de faltar ao trabalho durante o período menstrual.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fact-card wow fadeIn" data-wow-delay="0.6s">
                                        <h5><i class="fas fa-heartbeat text-danger me-2"></i> Saúde</h5>
                                        <p>O uso de materiais inadequados pode levar a infecções urinárias e reprodutivas graves.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fact-card wow fadeIn" data-wow-delay="0.7s">
                                        <h5><i class="fas fa-brain text-danger me-2"></i> Autoestima</h5>
                                        <p>A vergonha associada à menstruação afeta negativamente a autoimagem e saúde mental.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- How to Promote -->
                        <div class="content-section wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="mb-4">Como promover a Dignidade Menstrual?</h2>
                            <div class="row align-items-center mb-4">
                                <div class="col-md-6">
                                    <img src="../img/educação mesntrual.png" alt="Educação menstrual" class="img-fluid rounded img-border">
                                </div>
                                <div class="col-md-6">
                                    <h4>1. Educação menstrual inclusiva</h4>
                                    <p>Promover conversas abertas sobre menstruação em escolas, famílias e comunidades, incluindo todos os gêneros no diálogo para combater estigmas.</p>
                                </div>
                            </div>
                            
                            <div class="row align-items-center mb-4 flex-md-row-reverse">
                                <div class="col-md-6">
                                    <img src="../img/produtosmenstruais.avif" alt="Produtos menstruais" class="img-fluid rounded img-border">
                                </div>
                                <div class="col-md-6">
                                    <h4>2. Acesso a produtos menstruais</h4>
                                    <p>Defender políticas públicas que forneçam absorventes gratuitos em escolas, presídios e abrigos, além de apoiar iniciativas de distribuição comunitária.</p>
                                </div>
                            </div>
                            
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <img src="../img/infraestrutura.jpeg" alt="Infraestrutura" class="img-fluid rounded img-border">
                                </div>
                                <div class="col-md-6">
                                    <h4>3. Infraestrutura adequada</h4>
                                    <p>Garantir banheiros limpos, privados e com água corrente em escolas, locais de trabalho e espaços públicos, além de lixeiras em todos os banheiros.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Comment Section -->
                        <div class="comment-section wow fadeIn" data-wow-delay="0.5s">
                            <h3 class="mb-4"><i class="fas fa-comments text-secondary me-2"></i>Compartilhe sua opinião</h3>
                            <p>Este espaço é para troca de experiências e informações sobre dignidade menstrual. Respeite sempre a diversidade de vivências.</p>
                            
                            <!-- Existing Comments -->
                            <div class="comment wow fadeIn" data-wow-delay="0.6s">
                                <div class="d-flex">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="User" class="user-avatar">
                                    <div>
                                        <h5 class="mb-1">Ana Claudia</h5>
                                        <p class="text-muted small mb-2">Postado em 15/06/2023</p>
                                        <p>Na minha escola nunca falaram sobre menstruação. Aprendi com minha mãe, mas muitas amigas não tiveram essa sorte e sofriam muito no período menstrual por falta de informação.</p>
                                        
                                        <div class="comment-actions">
                                            <span class="action-btn like-btn"><i class="fas fa-heart me-1"></i> Curtir (24)</span>
                                            <span class="action-btn reply-btn"><i class="fas fa-reply me-1"></i> Responder</span>
                                        </div>
                                        
                                        <!-- Reply -->
                                        <div class="comment mt-3 ms-4">
                                            <div class="d-flex">
                                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="user-avatar" style="width: 40px; height: 40px;">
                                                <div>
                                                    <h5 class="mb-1">Maria Eduarda</h5>
                                                    <p class="text-muted small mb-2">Postado em 16/06/2023</p>
                                                    <p>Passei pela mesma situação! Hoje dou palestras em escolas para ajudar a mudar essa realidade. Educação menstrual deveria ser obrigatória!</p>
                                                    
                                                    <div class="comment-actions">
                                                        <span class="action-btn like-btn active"><i class="fas fa-heart me-1"></i> Curtir (8)</span>
                                                        <span class="action-btn reply-btn"><i class="fas fa-reply me-1"></i> Responder</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="comment wow fadeIn" data-wow-delay="0.7s">
                                <div class="d-flex">
                                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="User" class="user-avatar">
                                    <div>
                                        <h5 class="mb-1">Carlos Silva</h5>
                                        <p class="text-muted small mb-2">Postado em 10/06/2023</p>
                                        <p>Sou professor e vejo como os meninos também precisam aprender sobre menstruação para acabar com o bullying e criar uma geração mais consciente. Incluo o tema nas minhas aulas de ciências.</p>
                                        
                                        <div class="comment-actions">
                                            <span class="action-btn like-btn"><i class="fas fa-heart me-1"></i> Curtir (15)</span>
                                            <span class="action-btn reply-btn"><i class="fas fa-reply me-1"></i> Responder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Comment Form -->
                            <div class="comment-form wow fadeIn" data-wow-delay="0.8s">
                                <h5 class="mb-3">Deixe seu comentário</h5>
                                <form id="add-comment">
                                    <div class="mb-3">
                                        <textarea class="form-control" rows="4" placeholder="Compartilhe sua experiência ou opinião sobre dignidade menstrual..." required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Enviar comentário</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sidebar Column -->
                    <div class="col-lg-4 sidebar-content">
                        <div class="content-section wow fadeIn" data-wow-delay="0.5s">
                            <h4 class="mb-4">Dados sobre Dignidade Menstrual</h4>
                            <div class="list-group">
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Pobreza Menstrual no Brasil</h6>
                                    </div>
                                    <p class="mb-1">28% das mulheres brasileiras já deixaram de ir à escola ou ao trabalho por não terem absorventes.</p>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Impacto na Educação</h6>
                                    </div>
                                    <p class="mb-1">1 em cada 4 estudantes já faltou aula devido à menstruação, segundo pesquisa da UNICEF.</p>
                                </div>
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Alternativas Perigosas</h6>
                                    </div>
                                    <p class="mb-1">Sem acesso a absorventes, muitas usam jornal, papelão ou até miolo de pão, aumentando riscos de infecções.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="content-section wow fadeIn" data-wow-delay="0.6s">
                            <h4 class="mb-4">Recursos Úteis</h4>
                            <div class="list-group">
                                <a href="produtos.html" class="list-group-item list-group-item-action">
                                    <i class="fas fa-box-open text-primary me-2"></i>Tipos de produtos menstruais
                                </a>
                                <a href="sustentabilidade.html" class="list-group-item list-group-item-action">
                                    <i class="fas fa-leaf text-primary me-2"></i>Opções sustentáveis
                                </a>
                                <a href="pobrezamenstrual.html" class="list-group-item list-group-item-action">
                                    <i class="fas fa-hand-holding-heart text-primary me-2"></i>Combate à pobreza menstrual
                                </a>
                                <a href="forum.html" class="list-group-item list-group-item-action">
                                    <i class="fas fa-comments text-primary me-2"></i>Fórum de discussões
                                </a>
                            </div>
                        </div>
                        
                        <div class="content-section wow fadeIn" data-wow-delay="0.7s">
                            <h4 class="mb-4">Você sabia?</h4>
                            <div class="alert alert-primary">
                                <p><i class="fas fa-info-circle me-2"></i> Em 2021, o Brasil aprovou a Lei 14.214 que institui o Programa de Proteção e Promoção da Saúde Menstrual, distribuindo absorventes para estudantes de baixa renda.</p>
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
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a clas="border-bottom" href="https://themewagon.com">ThemeWagon</a>
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