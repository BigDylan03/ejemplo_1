<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Estilos extra -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Verdes</title>
    <script>
        function irAlPie() {
            document.getElementById('registro').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</head>

<body>
<div class="container">

    <!-- HERO -->
    <section class="hero">
        <h1>Inicio</h1>
        <p class="lead mb-4">Pagina de Inicio</p>
        <button class="btn-verde" onclick="irAlPie()">Registrate</button>
    </section>


    <!-- POR QUÉ ELEGIRNOS -->
    <section class="section-card">
        <h2 class="text-center mb-5">Vistas</h2>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <i class="bi bi-lightning-fill icon-box"></i>
                <h5>Cursos</h5>
                <p>Encuentra informacion de tus cursos</p>
                <a href="{{route('cursos')}}">Ir a Cursos</a>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-globe-americas icon-box"></i>
                <h5>Contacto</h5>
                <p>Conoce como contactarnos</p>
                <a href="{{route('contacto')}}">Ir a Contacto</a>
            </div>
            <div class="col-md-4 mb-4">
                <i class="bi bi-clock icon-box"></i>
                <h5>Conoce mas sobre nosotros</h5>
                <p>Disponible todos los dias</p>
            </div>
        </div>
    </section>
    <!-- LOGIN -->
    <section class="text-center mb-5">
        <h5 class="fw-light mb-3">¿Ya tienes un perfil?</h5>
        <a href="" class="btn btn-outline-success rounded-pill px-4">Iniciar Sesión</a>
    </section>

</div>

<footer>
    © 2025 | Sitio creado por <span>Dylan Roldán</span>
</footer>

</body>
</html>