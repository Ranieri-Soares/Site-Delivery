

<head>
  <title>Burguer Freitas - Login</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="description" content="Lanches, Lanche, Lanches em São Paulo, Lanche em São Paulo" >
  <meta name="author" content="Hugo Vasconcelos e Ranieri Soares" >

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/login.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="icon" href="images/favicon-nova.ico" type="image/x-icon">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<!------ Include the above in your HEAD tag ---------->

<!-- login start -->

<div class='container-fluid'>

    <section class="login-block mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 login-sec">
                    <h5 class="text-center mb-4">Faça seu Login</h5>
                    
                    <form class="login100-form validate-form">
                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Usuário</span><br>
                            <input class="input100" type="text" name="username"
                            placeholder="Insira seu email">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <span class="label-input100">Senha</span>
                            <input class="input100" type="password" name="pass" 
                            placeholder="Insira sua senha">
                            <span class="focus-input100 password"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <button class="btn btn-primary">
                                    Logar
                                </button>
                            </div>
                        </div>

                    </form>

                    <div class="copy-text">Não tem cadastro ?
                        <a class="text-primary" href="" data-toggle="modal" data-target="#modal-login">Cadastre-se</a>
                    </div>

                    <div class="text-center p-t-8 p-b-31">
                        <a class="text-danger" href="#">
                            <small> Recuperar Senha? </small>
                         </a>
                    </div>

                </div>
                <div class="col-md-8 banner-sec">   
                  <div class="signup__overlay"></div>          
                  <div class="banner">
                    <div id="demo" class="carousel slide carousel-fade"
                    data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/banner/promocao.jpg" height="100%" width="100%">

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

<!-- login end -->

</div>

</body>


<div class="modal fade" id="modal-login" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>