<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio de sesion</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }
        /* Contenedor de los formularios (Login y Registro) */
        .container {
            display: flex;
            height: 100%;
            width: 200%; /* Doble el ancho para permitir el desplazamiento entre formularios */
            transition: transform 0.6s ease-in-out; /* Transición suave al cambiar de formulario */
        }

        /* Sección de los formularios (Login y Registro) */
        .form-section {
            flex: 0 0 50%; /* Cada sección ocupará el 50% del contenedor */
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Estilo del cuadro de los formularios */
        .form-box {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
            z-index: 1;
        }

        /* Estilo para el mensaje de transición */
        .message-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8); /* Fondo oscuro */
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            opacity: 0; /* El mensaje está oculto al principio */
            transition: opacity 0.3s ease-in-out; /* Transición suave del mensaje */
        }

        /* Estilo de los inputs y botones */
        h2 {
            margin-top: 0;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            margin-bottom: 1rem;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 0.5rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .toggle {
            margin-top: 1rem;
            text-align: center;
        }

        .toggle a {
            color: #007bff;
            text-decoration: none;
            cursor: pointer;
        }

        .toggle a:hover {
            text-decoration: underline;
        }

        /* Estilo para el mensaje lateral con cuadro negro */
        .side-message {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%); /* Centrado vertical */
            background-color: black;
            color: white;
            font-size: 1.5rem;
            padding: 20px;
            width: 300px;
            height: 100%;
            z-index: 2;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 1; /* El mensaje es visible al principio */
            transition: transform 0.6s ease-in-out; /* Transición suave del mensaje lateral */
        }

        /* Cuando el mensaje lateral se mueve al lado izquierdo */
        .side-message.left {
            right: auto;
            left: 0; /* Cambia la posición del mensaje a la izquierda */
        }

        /* Media Queries para hacer el diseño responsivo en pantallas pequeñas */
        @media (max-width: 768px) {
            .side-message {
                position: absolute;
                top: 0;
                right: 0;
                left: auto;
                width: 100%;
                height: auto;
                font-size: 1rem;
                padding: 15px;
                transform: translateY(0); /* El mensaje se adapta al espacio disponible */
            }

            /* Asegurarse de que el mensaje lateral no interfiera con el formulario */
            .side-message.left {
                left: 0; /* Si la clase .left está activa, el mensaje se mueve al lado izquierdo */
            }
        }
    </style>
</head>
<body>
    <div class="container" id="formContainer">
        <!-- Sección de Login -->
        <div class="form-section" id="loginSection">
            <div class="form-box" id="loginForm">
                <h2>Iniciar Sesión</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="password" name="password" placeholder="Contraseña" required>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit">Iniciar Sesión</button>
                </form>
                <div class="toggle">
                    <a onclick="toggleForm('register')">¿No tienes una cuenta? Regístrate</a>
                </div>
            </div>
            <div class="message-overlay" id="loginMessage">
                Gracias por registrarte
            </div>
        </div>

        <!-- Sección de Registro -->
        <div class="form-section" id="registerSection">
            <div class="form-box" id="registerForm">
                <h2>Registro</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="text" name="name" placeholder="Nombre completo" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" name="email" placeholder="Correo electrónico" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="password" name="password" placeholder="Contraseña" required>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" required>
                    <button type="submit">Registrarse</button>
                </form>
                <div class="toggle">
                    <a onclick="toggleForm('login')">¿Ya tienes una cuenta? Inicia sesión</a>
                </div>
            </div>
            <div class="message-overlay" id="registerMessage">
                Bienvenido de nuevo
            </div>
        </div>
    </div>

    <!-- Mensaje lateral -->
    <div class="side-message" id="sideMessage">
        ¡Bienvenido! Por favor, inicia sesión o regístrate.
    </div>

    <script>
        function toggleForm(formType) {
            // Obtener referencias de los elementos necesarios
            const container = document.getElementById('formContainer');
            const loginMessage = document.getElementById('loginMessage');
            const registerMessage = document.getElementById('registerMessage');
            const sideMessage = document.getElementById('sideMessage');

            if (formType === 'register') {
                // Mover el contenedor hacia la izquierda para mostrar el formulario de registro
                container.style.transform = 'translateX(-50%)';
                setTimeout(() => {
                    // Hacer visible el mensaje de login y ocultar el mensaje de registro
                    loginMessage.style.opacity = '1';
                    registerMessage.style.opacity = '0';

                    // Cambiar el texto y mover el mensaje lateral a la izquierda
                    sideMessage.innerText = '¡Estás en el formulario de registro! Completa tus datos para crear una cuenta.';
                    sideMessage.classList.add('left'); // Mover el mensaje a la izquierda
                }, 300);
            } else {
                // Mover el contenedor hacia la derecha para mostrar el formulario de login
                container.style.transform = 'translateX(0)';
                setTimeout(() => {
                    // Hacer visible el mensaje de registro y ocultar el mensaje de login
                    loginMessage.style.opacity = '0';
                    registerMessage.style.opacity = '1';

                    // Cambiar el texto y mover el mensaje lateral a la derecha
                    sideMessage.innerText = '¡Ya tienes cuenta? Inicia sesión para continuar.';
                    sideMessage.classList.remove('left'); // Volver el mensaje a la derecha
                }, 300);
            }
        }
    </script>
</body>
</html>
