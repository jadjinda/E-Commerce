<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Inscription</title>

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
                <!-- register -->
                <div class="register">
                    <span class="fas fa-user-circle"></span>
                    <strong>Créer un compte!</strong>
                    <form action="#" method="post" class="register-form">
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">Nom</label>
                                    <input type="text" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-envelope"></span>
                                    <label class="form-label" for="input">E-mail</label>
                                    <input type="email" class="form-text">
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label class="form-label" for="input">Mot de passe</label>
                                    <input type="password" class="form-text">
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login">S'inscrire <span
                                            class="fas fa-arrow-right"></span></button>
                                </div>
                                <div class="form-row">
                                    <span>vous avez déjà un compte? <a href="{{ URL::to('/login') }}" class="forgot">se connecter</a></span>
                                </div>
                            </div>
                        </fieldset>
                        </form>

                        <span class="create-account">s'incrire avec</span>

                        <div class="social-media">
                            <a href="#facebook" class="fb"><span class="fab fa-facebook"></span></a>
                            <a href="#twitter" class="tw"><span class="fab fa-twitter"></span></a>
                            <a href="#pinterest" class="pi"><span class="fab fa-pinterest"></span></a>
                        </div>
                </div>
                <!-- //register -->
            </div>
        </div>
    </section>

</body>

</html>
