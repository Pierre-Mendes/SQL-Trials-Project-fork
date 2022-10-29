<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link href="{{ asset('css/logcad-page.css') }}" rel="stylesheet">

    <!--CSS-BOOTSTRAP-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">

    <title>Login</title>
</head>

<body>



    <div class="containerLR" style="background-image: url({{ asset('img/capa-fundo-login-register.png') }});">
        <div class="subcontainerLRR">
            <span class="titleLR">Redefinir senha</span>


            <form class="formLR">

                <div class="inputcontainer" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <a class="btna" href="senha.html">ENVIAR</a>

                <div class="text-center p-t-136">
                    <a class="login" href="{{ route('login.page') }}">Voltar<i class="fa fa-long-arrow-right m-l-5"
                            aria-hidden="true"></i></a>
                </div>

            </form>
            
        </div>
    </div>




</body>

</html>