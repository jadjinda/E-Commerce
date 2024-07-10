<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Connexion E-SELL</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" type="text/css" media="all" />

    <!-- fontawesome v5 -->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

<section class="forms">
    <div class="container">
        <div class="forms-grid">
            <!-- login -->
            <div class="login">
                <span class="fas fa-sign-in-alt"></span>
                <strong>Bienvenue!</strong>
                <span>Veuillez-vous connecter à votre compte</span>

                <form action="{{ url('AuthController') }}" method="post" class="login-form">
                    <fieldset>
                        <div class="form">
                            <div class="form-row">
                                <span class="fas fa-user"></span>
                                <label class="form-label" for="input">Nom d'utilisateur</label>
                                <input type="text" class="form-text">
                            </div>
                            <div class="form-row">
                                <span class="fas fa-eye"></span>
                                <label class="form-label" for="input">Mot de passe</label>
                                <input type="password" class="form-text">
                            </div>
                            <div class="form-row bottom">
                                <div class="form-check">
                                    <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                    <label for="remenber"> se souvenir?</label>
                                </div>
                                <a href="{{ URL::to('/forgot') }}" class="forgot">mot de passe oublié?</a>
                            </div>
                            <div class="form-row button-login">
                                <button class="btn btn-login">Se connecter <span
                                        class="fas fa-arrow-right"></span></button>
                            </div>
                            <div class="form-row">
                                <span>vous n'avez pas de compte? <a href="{{ URL::to('/register') }}" class="forgot">s'inscrire</a></span>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <span class="create-account">se connecter avec</span>

                <div class="social-media">
                    <a href="#" class="fb"><span class="fab fa-facebook"></span></a>
                    <a href="#" class="tw"><span class="fab fa-twitter"></span></a>
                    <a href="#" class="pi"><span class="fab fa-pinterest"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

</html>
