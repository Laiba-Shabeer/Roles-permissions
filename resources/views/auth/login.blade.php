<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Admin & Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>Sign In - AppStack - Admin & Dashboard Template</title>

    <link rel="preconnect" href="//fonts.gstatic.com/" crossorigin="">

    <!-- PICK ONE OF THE STYLES BELOW -->
    <link href="{{ asset('assets/css/classic.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/corporate.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/modern.css') }}" rel="stylesheet"> -->

    <!-- BEGIN SETTINGS -->
    <style>
        body {
            opacity: 0;
        }
    </style>
    <script src="{{ asset('js/settings.js') }}"></script>
    <!-- END SETTINGS -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-120946860-6');
    </script>

    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments);
            };
            h._hjSettings = {
                hjid: 1685936,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body>
    <main class="main d-flex justify-content-center w-100">
        <div class="container d-flex flex-column">
            <div class="row h-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Permissions</h1>
                            <p class="lead">
                                Log in to your account to continue
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/avatars/avatar.jpg') }}" alt="Chris Wood"
                                            class="img-fluid rounded-circle" width="132" height="132">
                                    </div>
                                    @include('message')
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                placeholder="Enter your email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                placeholder="Enter your password" required>
                                            <small>
                                                <a href="pages-reset-password.html">Forgot password?</a>
                                            </small>
                                        </div>
                                        <div>
                                            <div class="custom-control custom-checkbox align-items-center">
                                                <input type="checkbox" class="custom-control-input" id="remember-me"
                                                    value="1" name="remember-me" checked>
                                                <label class="custom-control-label text-small"
                                                    for="remember-me">Remember me next
                                                    time</label>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
