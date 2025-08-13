<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <title>BleedWithDignity - Calendário Menstrual</title>
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

        <!-- FullCalendar CSS -->
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />

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
<!-- Modal Perfil End -->
        


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

        
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center py-5">
                <h1 class="display-2 text-white mb-4">Calendário Menstrual</h1>
                
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Calendário Menstrual Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div id="calendar-container">
                    <div id="calendar"></div>
                    
                    <div id="sidebar">
                        <h4 class="text-center mb-4">Registros Diários</h4>
                        
                        <!-- Fluxo Menstrual -->
                        <div class="icon-btn" onclick="toggleDropdown('fluxo-dropdown')">
                            <i class="fas fa-tint"></i>
                            <span>Fluxo Menstrual</span>
                        </div>
                        <div id="fluxo-dropdown" class="dropdown-content">
                            <p>Selecione a intensidade:</p>
                            <div class="text-center">
                                <span class="blood-drop" onclick="selectBloodDrop(1)">💧</span>
                                <span class="blood-drop" onclick="selectBloodDrop(2)">💧</span>
                                <span class="blood-drop" onclick="selectBloodDrop(3)">💧</span>
                                <span class="blood-drop" onclick="selectBloodDrop(4)">💧</span>
                                <span class="blood-drop" onclick="selectBloodDrop(5)">💧</span>
                            </div>
                        </div>
                        
                        <!-- Remédios -->
                        <div class="icon-btn" onclick="toggleDropdown('remedios-dropdown')">
                            <i class="fas fa-pills"></i>
                            <span>Remédios</span>
                        </div>
                        <div id="remedios-dropdown" class="dropdown-content">
                            <p>Registrar medicamento:</p>
                            <input type="text" class="form-control mb-2" placeholder="Nome do remédio">
                            <button class="btn btn-sm btn-primary">Adicionar</button>
                        </div>
                        
                        <!-- Sintomas -->
                        <div class="icon-btn" onclick="toggleDropdown('sintomas-dropdown')">
                            <i class="fas fa-thermometer-half"></i>
                            <span>Sintomas</span>
                        </div>
                        <div id="sintomas-dropdown" class="dropdown-content">
                            <p>Selecione os sintomas:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="cramps">
                                <label class="form-check-label" for="cramps">Cólicas</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="headache">
                                <label class="form-check-label" for="headache">Dor de cabeça</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="backache">
                                <label class="form-check-label" for="backache">Dor nas costas</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="nausea">
                                <label class="form-check-label" for="nausea">Náusea</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="fatigue">
                                <label class="form-check-label" for="fatigue">Fadiga</label>
                            </div>
                        </div>
                        
                        <!-- Humor -->
                        <div class="icon-btn" onclick="toggleDropdown('humor-dropdown')">
                            <i class="fas fa-smile"></i>
                            <span>Humor</span>
                        </div>
                        <div id="humor-dropdown" class="dropdown-content">
                            <p>Como você está se sentindo?</p>
                            <div class="text-center">
                                <span class="emoji-option" onclick="selectEmoji('😊')">😊</span>
                                <span class="emoji-option" onclick="selectEmoji('😢')">😢</span>
                                <span class="emoji-option" onclick="selectEmoji('😡')">😡</span>
                                <span class="emoji-option" onclick="selectEmoji('😴')">😴</span>
                                <span class="emoji-option" onclick="selectEmoji('😌')">😌</span>
                                <span class="emoji-option" onclick="selectEmoji('😐')">😐</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Legenda -->
                <div class="legend">
                    <div class="legend-item">
                        <div class="legend-color period-color"></div>
                        <span>Período Menstrual</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color fertility-color"></div>
                        <span>Janela da Fertilidade</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color ovulation-color"></div>
                        <span>Dia da Ovulação</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Calendário Menstrual End -->

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



    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const isLoggedIn = false; 
    
    
    const loginModal = new bootstrap.Modal(document.getElementById('loginRequiredModal'));
    
    if (!isLoggedIn) {
        loginModal.show();
    }
    
    document.getElementById('calendar').addEventListener('click', function(e) {
        if (!isLoggedIn) {
            loginModal.show();
            e.preventDefault(); 
            e.stopPropagation(); 
        }
    });
    
    document.getElementById('sidebar').addEventListener('click', function(e) {
        if (!isLoggedIn) {
            loginModal.show();
            e.preventDefault();
            e.stopPropagation();
        }
    });
});

    </script>
    
    <!-- Modal de Login Necessário -->
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
                    <p>Para acessar o Calendário Menstrual, faça login ou crie uma conta.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Mais tarde</button>
                    <a href="login.php" class="btn btn-primary">Fazer Login</a>
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
        
        <!-- FullCalendar JS -->
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/pt-br.js'></script>

        <!-- Template Javascript -->
        <script src="../js/main.js"></script>
        
    
    </body>
</html>