<div id="login">

<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form id="register" action="/register" method="post">
            @csrf
            <h1>Crea una cuenta</h1>
            <p>¡Es muy sencillo!</p>
            {{--<div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>--}}
            <div class="tienda">
                <p>¿Eres una tienda?</p>
                <div class="toggle">
                    <input type="checkbox" id="toggle" />
                    <label for="toggle"></label>
                </div>
            </div>
            <input name="name" type="text" placeholder="Name" />
            <input name="lastname" type="text" placeholder="Apellidos" />
            <input name="dni" type="text" placeholder="DNI" />
            <input name="email" type="email" placeholder="Email" />
            <input name="password" type="password" placeholder="Password" />
            <input name="location" type="text" id="location" placeholder="Localización">
            <div class="hidden" id="inputTienda">
                <input name="nombreTienda" type="text"  id="nombreTienda" placeholder="Nombre de la tienda">
                <input name="cif" type="text" id="cif" placeholder="CIF">

            </div>
            <button>Regístrate</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form id="formulario" method="post" action="/login">
            @csrf
            <h1>Hola,</h1>
            <p>encantados de verte de nuevo</p>
            {{--<div class="social-container">
                <a href="#" class="social"><i data-feather="facebook"></i></a>
                <a href="#" class="social"><i data-feather="google"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>--}}
            <input name="email" id="email" type="email" placeholder="Email" />
            <input name="password" id="password" type="password" placeholder="Password" />
            <a href="#">¿Has olvidado la contraseña?</a>
            <button>Acceder</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1 style="font-size: 30px">¿Nos conocemos?</h1>
                <p>Accede con tu cuenta para ver tus pedidos</p>
                <button type="submit" class="ghost" id="signIn">Acceder</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>¿Eres nuevo?</h1>
                <p>Introduce tus datos para comenzar con tus pedidos online</p>
                <button class="ghost" id="signUp">Registrarse</button>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>
        <i data-feather="zap" style="width: 20px; vertical-align: bottom;"></i> Proyecto creado por Juan José Díaz Santana
    </p>
</footer>
</div>
