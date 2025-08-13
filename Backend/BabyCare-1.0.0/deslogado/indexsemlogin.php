<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>BleedWithDignity</title>
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
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Hero Start -->
        <div class="container-fluid py-5 hero-header wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7 col-md-12">
                        <h1 class="mb-3 text-primary">Encontre aqui informações seguras e gratuitas sobre:</h1>
                        <h1 class=" display-1 text-white">Dignidade Menstrual,</h1>
                         <h1 class="mb-5 display-1 text-white">Saúde Sexual e Reprodutiva</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="container-fluid py-5 about bg-light">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="col-md-20">
                                <img src="../img/logo.png" alt="logo" >
                            </div>
                    </div>
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="0.3s">
                        <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Sobre nós</h4>
                        <h1 class="text-dark mb-4 display-5">Nós temos o objetivo de disseminar informações confiáveis sobre dignidade menstrual!</h1>
                        <p class="text-dark mb-7">BleedWithDignity é uma plataforma dedicada a promover educação menstrual, saúde sexual e direitos reprodutivos de forma acessível, inclusiva e sem tabus. Nosso objetivo é combater a pobreza menstrual, oferecendo informações seguras, apoio e recursos para que todas as pessoas possam vivenciar sua menstruação com dignidade, saúde e confiança.

Acreditamos que conhecimento é poder, e por isso disponibilizamos conteúdos sobre:
                        </p>
                        <div class="row mb-4">
                            <div class="col-lg-6">
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2"></i>Dignidade menstrual</h6>
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-primary"></i>Produtos menstruais sustentáveis</h6>
                                <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Ciclo menstrual e saúde íntima</h6>
                             <h6 class="mb-3"><i class="fas fa-check-circle me-2 text-secondary"></i>Combate à pobreza menstrual</h6>
                            </div>
                           
                        
                </div>
            </div>
        </div>
       
        <!-- About End -->




        

       
       <div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="text-primary mb-4 border-bottom border-primary border-2 d-inline-block p-2 title-border-radius">Últimas publicações</h4>
            <h1 class="mb-5 display-3">Leia as nossas últimas publicações</h1>
        </div>
        <div class="row g-5 justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="blog-item rounded-bottom h-100 d-flex flex-column"> 
                    <div class="blog-img overflow-hidden position-relative img-border-radius" style="height: 200px;"> 
                        <img src="../img/dignidade menstrual.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Image"> 
                    </div>
                    <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments"></div>
                    <div class="blog-content d-flex align-items-center px-4 py-3 bg-light"></div>
                    <div class="px-4 pb-4 bg-light rounded-bottom flex-grow-1 d-flex flex-column"> 
                        <div class="blog-text-inner mb-3"> 
                            <a href="dignidademenstrual.html" class="h4">O que é dignidade menstrual?</a>
                            <p class="mt-3 mb-4">Descubra o que é dignidade menstrual e os conceitos envolvendo esse tópico.</p>
                        </div>
                        <div class="text-center mt-auto"> 
                            <a href="dignidademenstrual.html" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="blog-item rounded-bottom h-100 d-flex flex-column">
                    <div class="blog-img overflow-hidden position-relative img-border-radius" style="height: 200px;">
                        <img src="../img/fases-do-ciclo-menstrual.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                    <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments"></div>
                    <div class="blog-content d-flex align-items-center px-4 py-3 bg-light"></div>
                    <div class="px-4 pb-4 bg-light rounded-bottom flex-grow-1 d-flex flex-column">
                        <div class="blog-text-inner mb-3">
                            <a href="ciclomenstrual.html" class="h4">Ciclo menstrual</a>
                            <p class="mt-3 mb-4">Descubra tudo sobre as etapas que o ciclo menstrual possue.</p>
                        </div>
                        <div class="text-center mt-auto">
                            <a href="ciclomenstrual.html" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="blog-item rounded-bottom h-100 d-flex flex-column">
                    <div class="blog-img overflow-hidden position-relative img-border-radius" style="height: 200px;">
                        <img src="../img/produtosmenstruais.avif" class="img-fluid w-100 h-100 object-fit-cover" alt="Image">
                    </div>
                    <div class="d-flex justify-content-between px-4 py-3 bg-light border-bottom border-primary blog-date-comments"></div>
                    <div class="blog-content d-flex align-items-center px-4 py-3 bg-light"></div>
                    <div class="px-4 pb-4 bg-light rounded-bottom flex-grow-1 d-flex flex-column">
                        <div class="blog-text-inner mb-3">
                            <a href="produtos.html" class="h4">Produtos Menstruais para todos</a>
                            <p class="mt-3 mb-4">Descubra os programas do governo que envolvem produtos menstruais para pessoas de baixa renda.</p>
                        </div>
                        <div class="text-center mt-auto">
                            <a href="produtos.html" class="btn btn-primary text-white px-4 py-2 mb-3 btn-border-radius">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



   




        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>BleedWithDignity</a>, todos os direitos reservados.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
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
    </body>

</html>