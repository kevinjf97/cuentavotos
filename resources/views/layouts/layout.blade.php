<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        {!! Html::style('../node_modules/bootstrap/dist/css/bootstrap.min.css') !!}
        {!! Html::script('../node_modules/bootstrap/dist/js/bootstrap.min.js') !!}
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <title>CuentaVotos - UP</title>
    </head>
    <body>
        <header>
            <?php
                function activeMenu($url){
                    return request()->is($url) ? 'active' : '';
                }
            ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="col-md-6">
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        @if(auth()->guest())
                            <li class="nav-item">
                                <a href="" class="nav-link" >Ingresar</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{  auth()->user()->name  }}</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        @if(auth()->user()->admin == 'true')
                                            <a href="" class="btn btn-link">Administración</a>
                                            <hr>
                                        @endif
                                        <a href="" class="dropdown-item" >Perfil</a>
                                        <a href="" class="dropdown-item" >Editar datos personales</a>
                                    </li>
                                    <li>
                                        <hr>
                                        {{ Form::open(array('route'=>'logout', 'method'=>'post', 'onsubmit'=>'return true;', "style" => "margin:0px;")) }}
                                            <button type="submit" class="btn btn-link">Cerrar sesión</button>
                                        {{  Form::close()  }}
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            @yield('contenido')
        </div>

        <footer class="footer-b">
            <p class="copyright">Kevin Firmani - 2018 ® &copy;</p>
        </footer>
    </body>
</html>
