<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        {!! Html::style('../node_modules/bootstrap/dist/css/bootstrap.min.css') !!}
        {!! Html::script('../node_modules/bootstrap/dist/js/bootstrap.min.js') !!}
        {!! Html::style('../node_modules/bootstrap/dist/css/bootstrap.min.css') !!}
        {!! Html::style('/css/app.css') !!}
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <title>CuentaVotos - UP</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="barra">
                    <a href="index.html">
                        <img src="img/logo-2.png" alt="Logotipo de CuentaVotos">
                    </a>
                    @if(auth()->guest())

                    @else
                        <nav class="navegacion" id="navegacion">
                            <a href="nosotros.html">Nosotros</a>
                            <a href="blog.html">Blog</a>
                            <a href="anuncios.html">Anuncios</a>
                            <a href="contacto.html">Contacto</a>
                            {{ Form::open(array('route'=>'logout', 'method'=>'post', 'onsubmit'=>'return true;', "style" => "margin:0px;")) }}
                                <button type="submit" class="btn btn-link">Cerrar sesión</button>
                            {{  Form::close()  }}
                        </nav>
                    @endif
                </div>
            </div>
        </header>
        <div class="container">
            @yield('contenido')
        </div>

        <footer class="site-footer">
            <div class="container container-footer">
                <p class="copyright">Sitio desarrollado por <a target="_blanck" href="https://www.mastercode.site">Master Code</a>. Todos los derechos reservados. 2019 &copy; &reg;</p>
            </div>
        </footer>
    </body>
</html>
