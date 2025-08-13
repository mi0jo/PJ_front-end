<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>Fórum - BleedWithDignity</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

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

        <style>
          
        </style>
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
<?php
   require("../include/modalperfildeslogado.php");
   ?>
        


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Insira uma palavra-chave</h5>
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
                <h1 class="display-2 text-white mb-4">Fórum</h1>
                <p class="text-white">Compartilhe experiências, tire dúvidas e converse sobre saúde menstrual</p>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Forum Start -->
        <div class="container-fluid py-5 bg-light">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- New Post Form -->
                        <div id="new-post-form" class="wow fadeIn" data-wow-delay="0.1s">
                            <h4 class="mb-4">Criar novo post</h4>
                            <form id="post-form">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="post-title" placeholder="Título do post" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="post-content" rows="3" placeholder="O que você gostaria de compartilhar?" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="post-tags" placeholder="Tags (separadas por vírgula)">
                                </div>
                                <button type="submit" class="btn btn-primary">Publicar</button>
                            </form>
                        </div>

                        <!-- Filter Options -->
                        <div class="d-flex justify-content-between mb-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Filtrar por
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="filterDropdown">
                                    <li><a class="dropdown-item" href="#">Mais recentes</a></li>
                                    <li><a class="dropdown-item" href="#">Mais populares</a></li>
                                    <li><a class="dropdown-item" href="#">Sem respostas</a></li>
                                </ul>
                            </div>
                            <div>
                                <input type="text" class="form-control" placeholder="Buscar no fórum...">
                            </div>
                        </div>

                        <!-- Posts List -->
                        <div id="posts-container">
                            <!-- Post 1 -->
                            <div class="forum-post bg-white p-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="User" class="user-avatar me-3">
                                    <div>
                                        <h5 class="mb-1">Dúvida sobre absorventes reutilizáveis</h5>
                                        <p class="text-muted small mb-0">Postado por <strong>Ana Silva</strong> em 15/06/2023</p>
                                    </div>
                                </div>
                                <p class="mb-3">Olá pessoal, estou pensando em migrar para absorventes reutilizáveis para reduzir meu impacto ambiental, mas tenho algumas dúvidas sobre higienização e durabilidade. Alguém aqui já usa e pode compartilhar experiências?</p>
                                
                                <div class="mb-3">
                                    <span class="tag">sustentabilidade</span>
                                    <span class="tag">absorventes</span>
                                    <span class="tag">dúvidas</span>
                                </div>
                                
                                <div class="post-actions d-flex">
                                    <div class="action-btn like-btn active">
                                        <i class="fas fa-heart me-1"></i> <span>24</span>
                                    </div>
                                    <div class="action-btn comment-btn">
                                        <i class="fas fa-comment me-1"></i> <span>8</span>
                                    </div>
                                    <div class="action-btn save-btn active ms-auto">
                                        <i class="fas fa-bookmark me-1"></i> Salvar
                                    </div>
                                </div>
                                
                                <!-- Comments Section -->
                                <div class="comments-section">
                                    <div class="comment">
                                        <div class="d-flex">
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="user-avatar me-3" style="width: 40px; height: 40px;">
                                            <div>
                                                <strong>Maria Oliveira</strong>
                                                <p class="small text-muted mb-1">16/06/2023</p>
                                                <p>Uso há 6 meses e amo! No começo é estranho, mas você se acostuma. Lavo na máquina com água fria e sabão neutro. Dura cerca de 2 anos se cuidar bem.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="comment">
                                        <div class="d-flex">
                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User" class="user-avatar me-3" style="width: 40px; height: 40px;">
                                            <div>
                                                <strong>Carla Santos</strong>
                                                <p class="small text-muted mb-1">15/06/2023</p>
                                                <p>Recomendo começar com um kit pequeno para testar antes de investir em vários. Eu tenho 5 e já é suficiente para meu fluxo moderado.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <form class="comment-form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Adicione um comentário...">
                                                <button class="btn btn-primary" type="submit">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Post 2 -->
                            <div class="forum-post bg-white p-4 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="User" class="user-avatar me-3">
                                    <div>
                                        <h5 class="mb-1">Como lidar com cólicas intensas?</h5>
                                        <p class="text-muted small mb-0">Postado por <strong>Juliana Costa</strong> em 12/06/2023</p>
                                    </div>
                                </div>
                                <p class="mb-3">Gostaria de compartilhar que sofro com cólicas muito fortes que me impedem de trabalhar nos primeiros dias da menstruação. Já tentei vários remédios e chás, mas nada parece ajudar muito. Alguém tem alguma dica ou passou por algo parecido?</p>
                                
                                <div class="mb-3">
                                    <span class="tag">cólicas</span>
                                    <span class="tag">saúde</span>
                                    <span class="tag">dicas</span>
                                </div>
                                
                                <div class="post-actions d-flex">
                                    <div class="action-btn like-btn">
                                        <i class="fas fa-heart me-1"></i> <span>15</span>
                                    </div>
                                    <div class="action-btn comment-btn">
                                        <i class="fas fa-comment me-1"></i> <span>5</span>
                                    </div>
                                    <div class="action-btn save-btn ms-auto">
                                        <i class="fas fa-bookmark me-1"></i> Salvar
                                    </div>
                                </div>
                                
                                <!-- Comments Section (hidden by default) -->
                                <div class="comments-section">
                                    <div class="comment">
                                        <div class="d-flex">
                                            <img src="https://randomuser.me/api/portraits/women/50.jpg" alt="User" class="user-avatar me-3" style="width: 40px; height: 40px;">
                                            <div>
                                                <strong>Fernanda Lima</strong>
                                                <p class="small text-muted mb-1">13/06/2023</p>
                                                <p>Juliana, já considerou a possibilidade de endometriose? Eu tinha cólicas horríveis e descobri que era isso. Depois do diagnóstico e tratamento, melhorou muito.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <form class="comment-form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Adicione um comentário...">
                                                <button class="btn btn-primary" type="submit">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Post 3 -->
                            <div class="forum-post bg-white p-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/75.jpg" alt="User" class="user-avatar me-3">
                                    <div>
                                        <h5 class="mb-1">Relato: Primeira menstruação da minha filha</h5>
                                        <p class="text-muted small mb-0">Postado por <strong>Patrícia Almeida</strong> em 10/06/2023</p>
                                    </div>
                                </div>
                                <p class="mb-3">Queria compartilhar essa experiência linda que tivemos em casa. Minha filha de 11 anos menstruou pela primeira vez e, graças às conversas abertas que sempre tivemos, ela não teve medo, apenas veio me contar como se fosse a coisa mais natural do mundo (e é!). Preparamos um kit menstrual juntas e celebramos essa nova fase. Como foi a experiência de vocês?</p>
                                
                                <div class="mb-3">
                                    <span class="tag">primeira-menstruação</span>
                                    <span class="tag">educação</span>
                                    <span class="tag">relatos</span>
                                </div>
                                
                                <div class="post-actions d-flex">
                                    <div class="action-btn like-btn">
                                        <i class="fas fa-heart me-1"></i> <span>32</span>
                                    </div>
                                    <div class="action-btn comment-btn">
                                        <i class="fas fa-comment me-1"></i> <span>12</span>
                                    </div>
                                    <div class="action-btn save-btn active ms-auto">
                                        <i class="fas fa-bookmark me-1"></i> Salvar
                                    </div>
                                </div>
                                
                                <!-- Comments Section (hidden by default) -->
                                <div class="comments-section">
                                    <div class="comment">
                                        <div class="d-flex">
                                            <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="User" class="user-avatar me-3" style="width: 40px; height: 40px;">
                                            <div>
                                                <strong>Roberta Gonçalves</strong>
                                                <p class="small text-muted mb-1">11/06/2023</p>
                                                <p>Que lindo, Patrícia! Parabéns pelo trabalho de educação com sua filha. Infelizmente na minha época foi muito diferente, foi um susto e ninguém me explicou direito o que estava acontecendo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="comment">
                                        <div class="d-flex">
                                            <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="User" class="user-avatar me-3" style="width: 40px; height: 40px;">
                                            <div>
                                                <strong>Amanda Rocha</strong>
                                                <p class="small text-muted mb-1">10/06/2023</p>
                                                <p>Adorei sua abordagem! Estou grávida de uma menina e já estou pensando em como vou lidar com isso no futuro. Vou guardar sua experiência como inspiração!</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-3">
                                        <form class="comment-form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Adicione um comentário...">
                                                <button class="btn btn-primary" type="submit">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Pagination -->
                        <nav aria-label="Page navigation" class="mt-5 wow fadeIn" data-wow-delay="0.6s">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Próxima</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forum End -->

        <!-- Saved Posts Button -->
        <button class="btn btn-primary saved-posts-btn rounded-pill shadow">
            <i class="fas fa-bookmark me-2"></i> Posts salvos
        </button>

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

        <script>

       document.addEventListener('DOMContentLoaded', function () {
    const isLoggedIn = false; 

    // Referência ao modal de login
    const loginModal = new bootstrap.Modal(document.getElementById('loginRequiredModal'));

    // Função para exibir o modal caso o usuário não esteja logado
    function checkLogin(event) {
        if (!isLoggedIn) {
            loginModal.show();
            if (event) {
                event.preventDefault();
                event.stopPropagation();
            }
            return false;
        }
        return true;
    }

    // Bloquear envio de novo post se não estiver logado
    const postForm = document.getElementById('post-form');
    if (postForm) {
        postForm.addEventListener('submit', function (e) {
            if (!checkLogin(e)) return;
            alert('Post enviado (simulado).');
        });
    }

    // Bloquear envio de comentários se não estiver logado
    document.querySelectorAll('.comment-form').forEach(form => {
        form.addEventListener('submit', function (e) {
            if (!checkLogin(e)) return;
            alert('Comentário enviado (simulado).');
        });
    });

    // Spinner: esconde após carregamento
    window.addEventListener('load', function () {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.classList.remove('show');
            spinner.style.display = 'none';
        }
    });
});

</script>

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
                    <p>Para acessar o Fórum, faça login ou crie uma conta.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Mais tarde</button>
                    <a href="login.html" class="btn btn-primary">Fazer Login</a>
                </div>
            </div>
        </div>
    </div>


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

    

    </body>

</html>