<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Inicio de sesión del sistema" />
    <meta name="author" content="SakCode" />
    <title>Sistema de ventas - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"></script>
    <style>
        .form-outline {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-outline input {
            border: 1px solid #bdbdbd;
            border-radius: 0.25rem;
            padding: 0.375rem 0.75rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-outline input:focus {
            border-color: #1266f1;
            box-shadow: 0 0 0 0.2rem rgba(18, 102, 241, 0.25);
            outline: 0;
        }

        .form-outline label {
            position: absolute;
            top: 0;
            left: 0.75rem;
            padding: 0.375rem 0;
            pointer-events: none;
            transform-origin: 0 0;
            transition: all .2s ease-out;
            color: rgba(0,0,0,.6);
            margin-bottom: 0;
        }

        .form-outline input:focus ~ label,
        .form-outline input:not(:placeholder-shown) ~ label {
            transform: translateY(-1.28125rem) scale(0.8);
            background: white;
            padding: 0 0.2rem;
            color: #1266f1;
        }

        .card.shadow-2-strong {
            box-shadow: 0 2px 15px -3px rgba(0,0,0,0.07),0 10px 20px -2px rgba(0,0,0,0.04) !important;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .social-login-btn {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .form-check {
            padding-left: 1.75rem;
        }

        .form-check-input {
            margin-left: -1.75rem;
        }
        .lbl{
            font-size:1rem;
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color:#2e4053 ;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center " style="background-color:#f4f6f6;">
                            <h3 class="mb-5">Iniciar sesión</h3>

                            @if ($errors->any())
                                @foreach ($errors->all() as $item)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{$item}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endforeach
                            @endif

                            <form action="/login" method="post">
                                @csrf
                                
                                <div class="form-outline mb-4">
                                    <input 
                                        type="email" 
                                        id="inputEmail"
                                        name="email"
                                        class="form-control form-control-lg" 
                                        value="invitado@gmail.com"
                                        autofocus 
                                        autocomplete="off"
                                        placeholder=" "
                                    />
                                    <label class="form-label lbl" for="inputEmail">Correo electrónico</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input 
                                        type="password" 
                                        id="inputPassword"
                                        name="password"
                                        class="form-control form-control-lg" 
                                        value="12345678"
                                        placeholder=" "
                                    />
                                    <label class="form-label lbl" for="inputPassword">Contraseña</label>
                                </div>

                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                    <label class="form-check-label" for="form1Example3">Recordarme</label>
                                </div>

                                <button class="btn btn-primary btn-lg btn-block w-100 mb-4" type="submit">
                                    Iniciar sesión
                                </button>

                                <hr class="my-4">

                                <button class="btn btn-lg btn-block btn-primary w-100 mb-2 social-login-btn" 
                                    style="background-color: #dd4b39;" 
                                    type="button">
                                    <i class="fab fa-google me-2"></i>
                                    Continuar con Google
                                </button>

                                <button class="btn btn-lg btn-block btn-primary w-100 social-login-btn" 
                                    style="background-color: #3b5998;" 
                                    type="button">
                                    <i class="fab fa-facebook-f me-2"></i>
                                    Continuar con Facebook
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>