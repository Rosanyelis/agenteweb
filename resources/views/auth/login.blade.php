<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('./admin/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Login | Administracion</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('./admin/assets/css/dashlite.css?ver=2.9.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('./admin/assets/css/theme.css?ver=2.9.0') }}">
</head>

<body class="nk-body bg-white npc-default pg-auth">

    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="{{ route('login') }}" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ asset('./admin/images/logo.png') }}"
                                    srcset="{{ asset('./admin/images/logo2x.png 2x') }}" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ asset('./admin/images/logo-dark.png') }}"
                                    srcset="{{ asset('./admin/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title text-center">Iniciar Sesion</h4>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Correo Electrónico</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="email" name="email" class="form-control form-control-lg"
                                                id="default-01" placeholder="Ingresar tu correo electrónico"
                                                value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password"
                                                placeholder="************">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Entrar</button>
                                    </div>
                                </form>

                                <div class="nk-footer nk-auth-footer-full">
                                    <div class="container wide-lg">
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="nk-block-content text-center text-lg-left">
                                                    <p class="text-soft text-center">&copy; 2023 Web Noemie. Todos los Derechos Reservados.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- wrap @e -->
                        </div>
                        <!-- content @e -->
                    </div>
                    <!-- main @e -->
                </div>
                <!-- app-root @e -->
                <!-- JavaScript -->
                <script src="{{ asset('./admin/assets/js/bundle.js?ver=2.9.0') }}"></script>
                <script src="{{ asset('./admin/assets/js/scripts.js?ver=2.9.0') }}"></script>


</html>
