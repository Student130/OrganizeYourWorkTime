<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="css/app.css" />

</head>
<body class="login-page">
<div class="login-header box-shadow">
    <div
        class="container-fluid d-flex justify-content-between align-items-center"
    >
        <div class="brand-logo">
            <a href="login.html">
                <li>Organizer</li>
            </a>
        </div>
        <div class="login-menu">
            <ul>
                <li><a href="register.html">Zarejestruj</a></li>
            </ul>
        </div>
    </div>
</div>
<div
    class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-12">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">Zaloguj do aplikacji</h2>
                    </div>
                    <form>
                        <div class="input-group custom">
                            <input
                                type="text"
                                class="form-control form-control-lg"
                                placeholder="Email"
                            />
                            <div class="input-group-append custom">
										<span class="input-group-text"
                                        ><i class="icon-copy dw dw-user1"></i
                                            ></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input
                                type="password"
                                class="form-control form-control-lg"
                                placeholder="**********"
                            />
                            <div class="input-group-append custom">
										<span class="input-group-text"
                                        ><i class="dw dw-padlock1"></i
                                            ></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password">
                                    <a href="forgot-password.html">Odzyskaj hasło</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <!--
                                    use code for form submit
                                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                -->
                                    <a
                                        class="btn btn-primary btn-lg btn-block"
                                        href="index.html"
                                    >Zaloguj</a
                                    >
                                </div>
                                <div
                                    class="font-16 weight-600 pt-10 pb-10 text-center"
                                    data-color="#707373"
                                >
                                    Lub
                                </div>
                                <div class="input-group mb-0">
                                    <a
                                        class="btn btn-outline-primary btn-lg btn-block"
                                        href="register.html"
                                    >Kliknij aby utworzyć konto</a
                                    >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- js -->
<script src="js/app.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript
><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
    ></iframe
    ></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>
