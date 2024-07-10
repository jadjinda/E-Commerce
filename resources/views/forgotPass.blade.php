<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Mot de passe oublié E-SELL</title>

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
                <span>Avez-vous oublié votre mot de passe?</span>

                <form action="#" method="post" class="login-form">
                    <fieldset>
                        <div class="form">
                            <div class="form-row">
                                <span class="fas fa-user"></span>
                                <label class="form-label" for="input">E-mail</label>
                                <input type="email" class="form-text">
                            </div>
                            <div class="form-row bottom">
                                <a href="{{ URL::to('/login') }}" class="forgot">mot de passe retrouvé?</a>
                            </div>
                            <div class="form-row button-login">
                                <button class="btn btn-login">Envoyer <span
                                        class="fas fa-arrow-right"></span></button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>

</body>

</html>
