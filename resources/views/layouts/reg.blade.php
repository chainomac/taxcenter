<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css?v=3.2.0') }}">
    <script nonce="236909ff-a1bc-4be8-8016-4de586a4d011">
        try {
            (function(w, d) {
                ! function(b, c, d, e) {
                    b[d] = b[d] || {};
                    b[d].executed = [];
                    b.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    b.zaraz.q = [];
                    b.zaraz._f = function(f) {
                        return async function() {
                            var g = Array.prototype.slice.call(arguments);
                            b.zaraz.q.push({
                                m: f,
                                a: g
                            })
                        }
                    };
                    for (const h of ["track", "set", "debug"]) b.zaraz[h] = b.zaraz._f(h);
                    b.zaraz.init = () => {
                        var i = c.getElementsByTagName(e)[0],
                            j = c.createElement(e),
                            k = c.getElementsByTagName("title")[0];
                        k && (b[d].t = c.getElementsByTagName("title")[0].text);
                        b[d].x = Math.random();
                        b[d].w = b.screen.width;
                        b[d].h = b.screen.height;
                        b[d].j = b.innerHeight;
                        b[d].e = b.innerWidth;
                        b[d].l = b.location.href;
                        b[d].r = c.referrer;
                        b[d].k = b.screen.colorDepth;
                        b[d].n = c.characterSet;
                        b[d].o = (new Date).getTimezoneOffset();
                        if (b.dataLayer)
                            for (const o of Object.entries(Object.entries(dataLayer).reduce(((p, q) => ({
                                    ...p[1],
                                    ...q[1]
                                })), {}))) zaraz.set(o[0], o[1], {
                                scope: "page"
                            });
                        b[d].q = [];
                        for (; b.zaraz.q.length;) {
                            const r = b.zaraz.q.shift();
                            b[d].q.push(r)
                        }
                        j.defer = !0;
                        for (const s of [localStorage, sessionStorage]) Object.keys(s || {}).filter((u => u
                            .startsWith("_zaraz_"))).forEach((t => {
                            try {
                                b[d]["z_" + t.slice(7)] = JSON.parse(s.getItem(t))
                            } catch {
                                b[d]["z_" + t.slice(7)] = s.getItem(t)
                            }
                        }));
                        j.referrerPolicy = "origin";
                        j.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(b[d])));
                        i.parentNode.insertBefore(j, i)
                    };
                    ["complete", "interactive"].includes(c.readyState) ? zaraz.init() : b.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>
                <form action="../../index.html" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>

                    </div>
                </form>
                <div class="social-auth-links text-center">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>
                <a href="login.html" class="text-center">I already have a membership</a>
            </div>

        </div>
    </div>


    <script src="{{ asset('vendor/adminlte/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>

</html>
