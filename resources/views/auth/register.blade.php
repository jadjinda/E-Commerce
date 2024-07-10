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

                    @if(session()->has("success"))
                        <div class="alert alert-success">
                            {{session()->get("success")}}
                        </div>
                    @endif
                    @if(session()->has("error"))
                        <div class="alert alert-danger">
                            {{session()->get("error")}}
                        </div>
                    @endif
                    <form action="{{route("register.post")}}" method="POST" class="register-form">
                        @csrf
                        <fieldset>
                            <div class="form">
                                <div class="form-row">
                                    <span class="fas fa-user"></span>
                                    <label class="form-label" for="input">Nom</label>
                                    <input type="text" class="form-text" name="username">
                                    @if($errors->has('username'))
                                        <span class="text-danger">
                                        {{ $errors->first('username') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-envelope"></span>
                                    <label class="form-label" for="input">E-mail</label>
                                    <input type="email" class="form-text" name="email">
                                    @if($errors->has('email'))
                                        <span class="text-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <span class="fas fa-lock"></span>
                                    <label class="form-label" for="input">Mot de passe</label>
                                    <input type="password" class="form-text" name="password">
                                    @if($errors->has('password'))
                                        <span class="text-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                    @endif
                                </div>
                                <div class="form-row button-login">
                                    <button class="btn btn-login" type="submit">
                                        S'inscrire
                                        <span class="fas fa-arrow-right"></span>
                                    </button>
                                </div>
                                <div class="form-row">
                                    <span>vous avez déjà un compte? <a href="{{ URL::to('/login') }}" class="forgot">se connecter</a></span>
                                </div>
                            </div>
                        </fieldset>
                        </form>

                        <span class="create-account">s'incrire avec</span>

                        <div class="social-media">
                            <a href="#" class="fb"><span class="fab fa-facebook"></span></a>
                            <a href="#" class="tw"><span class="fab fa-twitter"></span></a>
                            <a href="#" class="pi"><span class="fab fa-pinterest"></span></a>
                        </div>
                </div>
                <!-- //register -->
            </div>
        </div>
    </section>

</body>

</html>
