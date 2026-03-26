<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- SEO Optimization -->
    <title>Impordental - Insumos y Equipos Odontológicos Premium</title>
    <meta name="description" content="Catálogo avanzado de insumos dentales. Calidad, precisión y tecnología para potenciar tu clínica odontológica en Colombia.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Premium Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="light-theme">
    <header class="glass-header">
        <div class="container header-container">
            <div class="logo">
                <a href="{{ route('home') }}">Impor<span>dental</span></a>
            </div>
            
            <form action="#" class="header-search">
                <span class="search-icon">🔍</span>
                <input type="text" placeholder="¿Qué estás buscando hoy?">
            </form>

            <div class="header-actions">
                <a href="#" class="btn btn-outline" style="border:none; font-size: 1.2rem;">👤</a>
                <a href="#" class="btn btn-outline" style="border:none; font-size: 1.2rem; position:relative;">
                    🛒 <span style="position:absolute; top:5px; right:5px; background:var(--color-action); color:white; font-size:0.6rem; padding: 2px 5px; border-radius:50%;">0</span>
                </a>
            </div>
        </div>
        <nav class="secondary-nav">
            <div class="container">
                <a href="{{ route('home') }}">Inicio</a>
                <a href="#catalogo">Insumos</a>
                <a href="#">Equipos</a>
                <a href="#">Ortodoncia</a>
                <a href="#">Estética</a>
                <a href="#">Ofertas</a>
            </div>
        </nav>
    </header>

    <main id="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 3rem; text-align: left; padding: 4rem 0;">
            <div>
                <div class="logo" style="margin-bottom: 1.5rem;">
                    <a href="#" style="color: white;">Impor<span style="color: var(--color-accent-light);">dental</span></a>
                </div>
                <p style="font-size: 0.85rem; line-height: 1.8;">Expertos en suministro de equipos e insumos odontológicos de alta calidad. Tu socio estratégico en salud dental.</p>
            </div>
            <div>
                <h4 style="color: white; margin-bottom: 1.5rem;">Categorías</h4>
                <ul style="list-style: none; font-size: 0.85rem; line-height: 2;">
                    <li><a href="#" style="color: inherit; text-decoration: none;">Equipos Dentales</a></li>
                    <li><a href="#" style="color: inherit; text-decoration: none;">Insumos Clínicos</a></li>
                    <li><a href="#" style="color: inherit; text-decoration: none;">Bioseguridad</a></li>
                    <li><a href="#" style="color: inherit; text-decoration: none;">Instrumental</a></li>
                </ul>
            </div>
            <div>
                <h4 style="color: white; margin-bottom: 1.5rem;">Ayuda</h4>
                <ul style="list-style: none; font-size: 0.85rem; line-height: 2;">
                    <li><a href="#" style="color: inherit; text-decoration: none;">Preguntas Frecuentes</a></li>
                    <li><a href="#" style="color: inherit; text-decoration: none;">Envíos y Devoluciones</a></li>
                    <li><a href="#" style="color: inherit; text-decoration: none;">Contacto</a></li>
                </ul>
            </div>
            <div>
                <h4 style="color: white; margin-bottom: 1.5rem;">Contacto</h4>
                <p style="font-size: 0.85rem; line-height: 1.8;">📍 Calle Primaria #123, Ciudad<br>📞 +57 300 123 4567<br>✉️ info@impordental.com</p>
            </div>
        </div>
        <div style="border-top: 1px solid rgba(255,255,255,0.1); padding: 2rem 0;">
            <p>&copy; {{ date('Y') }} Impordental. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
