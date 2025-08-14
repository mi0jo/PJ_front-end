<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Login - BleedWithDignity</title>
    <meta content="login, conta, acesso, bleedwithdignity" name="keywords">
    <meta content="Faça login na sua conta BleedWithDignity para acessar recursos exclusivos" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

     <?php
      require("../include/referenciashead.php");
      ?>

    
</head>

<body>
   <?php
      require("../include/spinner.php");

   require("../include/navbardeslogado.php");
       require("../include/modalsearch.php");

   ?>

   

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4">Acesse sua conta</h1>
            <p class="text-white">Gerencie seu calendário menstrual e participe da comunidade</p>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Login Form Start -->
    <div class="container-fluid py-5">
        <div class="container login-container wow fadeIn" data-wow-delay="0.1s">
            <div class="card login-card">
                <div class="card-header login-header">
                    <h3><i class="fas fa-lock me-2"></i>Login</h3>
                </div>
                <div class="card-body login-body">
                    <!-- Email Login Form -->
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="seu@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
                            <a href="#" class="forgot-password">Esqueceu a senha?</a>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Lembrar de mim</label>
                        </div>
                        <button type="submit" class="btn btn-login text-white w-100 py-2">Entrar</button>
                    </form>

                    <!-- Divider -->
                    <div class="divider mt-4">
                        <span class="divider-text">ou</span>
                    </div>

                    <!-- Register Link -->
                    <div class="text-center mt-4">
                        <p>Não tem uma conta? <a href="cadastro.php" class="text-primary">Cadastre-se</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Form End -->
  <?php
      require("../include/copyright.php");

   ?>


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