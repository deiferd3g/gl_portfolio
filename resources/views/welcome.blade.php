<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portafolio profesional de Deifer Garantón — Ingeniero, Arquitecto de Sistemas, Desarrollador Full-Stack. Más de 40 proyectos que transforman la gestión pública y privada.">
    <title>Deifer Garantón — Portafolio</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    @vite(['resources/css/app.css'])
    <style>
        :root { --primary: #0066FF; --accent: #7C3AED; }
        body { background: #030712; }
        .hero-overlay { background: linear-gradient(135deg, rgba(3,7,18,.92) 0%, rgba(3,7,18,.7) 50%, rgba(3,7,18,.92) 100%), url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=1920&q=80') center/cover fixed; }
        .gradient-text { background: linear-gradient(135deg, var(--primary), var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .glow-card { box-shadow: 0 0 30px -10px rgba(0,102,255,.15); transition: box-shadow .4s, transform .4s; }
        .glow-card:hover { box-shadow: 0 0 50px -8px rgba(0,102,255,.25); transform: translateY(-2px); }
        .tag-pill { @apply px-3 py-1 rounded-full text-xs font-medium border; }
        .tech-strip { display: flex; flex-wrap: wrap; gap: 0.5rem; align-items: center; }
        .tech-strip i { font-size: 1.5rem; opacity: 0.8; transition: opacity .2s, transform .2s; }
        .tech-strip i:hover { opacity: 1; transform: scale(1.15); }
        .section-header h2 { font-weight: 800; }
        .section-header p { color: #9ca3af; }
        .accent-emerald { color: #34d399; }
        .accent-amber { color: #fbbf24; }
        .accent-violet { color: #a78bfa; }
        .accent-blue { color: #60a5fa; }
    </style>
</head>
<body class="font-sans antialiased bg-gray-950 text-gray-100">

{{-- ═══════════════════ NAVBAR ═══════════════════ --}}
<nav class="fixed top-0 inset-x-0 z-50 bg-gray-950/80 backdrop-blur-xl border-b border-gray-800/50" data-aos="fade-down">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="/" class="flex items-center gap-2.5 group">
                <div class="w-8 h-8 rounded-lg bg-[#0066FF] flex items-center justify-center shadow-lg shadow-blue-500/25 transition-transform group-hover:scale-110">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </div>
                <span class="font-bold text-white text-lg">DG <span class="text-[#0066FF]">Portafolio</span></span>
            </a>
            <div class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-300">
                <a href="#inicio" class="hover:text-[#0066FF] transition">Inicio</a>
                <a href="#minpi" class="hover:text-[#0066FF] transition">MINPI</a>
                <a href="#sunai" class="hover:text-[#0066FF] transition">Sunai</a>
                <a href="#pablo" class="hover:text-[#0066FF] transition">Pablo</a>
                <a href="#gl" class="hover:text-[#0066FF] transition">GL</a>
            </div>
        </div>
    </div>
</nav>

{{-- ═══════════════════ HERO ═══════════════════ --}}
<section id="inicio" class="relative min-h-screen flex items-center pt-16 overflow-hidden hero-overlay">
    <div class="absolute inset-0 bg-gradient-to-b from-gray-950 via-blue-950/20 to-gray-950"></div>
    <div class="absolute top-1/4 -left-20 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-violet-600/8 rounded-full blur-[100px]"></div>

    <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <div data-aos="fade-up" data-aos-delay="100">
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-500/10 border border-blue-500/20 text-blue-400 rounded-full text-xs font-semibold mb-6">
                <span class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></span>
                Ingeniero · Arquitecto · Desarrollador Full-Stack
            </div>
        </div>

        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6" data-aos="fade-up" data-aos-delay="200">
            <span class="text-gray-300">Hola, soy</span><br>
            <span class="gradient-text">Deifer Garantón</span>
        </h1>

        <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="300">
            Arquitecto de sistemas, desarrollador TALL Stack y estratega tecnológico.
            <strong class="text-white">Más de 40 proyectos</strong> que transforman la gestión pública y privada.
        </p>

        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="400">
            <a href="#minpi" class="inline-flex items-center gap-2 px-6 py-3 bg-[#0066FF] hover:bg-blue-700 text-white font-semibold rounded-xl transition shadow-lg shadow-blue-500/25">
                Explorar Proyectos
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </a>
            <a href="https://github.com/deiferd3g" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 border border-gray-700 hover:border-blue-500/50 rounded-xl transition hover:bg-blue-500/5">
                <i class="devicon-github-original text-xl"></i>
                GitHub
            </a>
        </div>

        {{-- Stats --}}
        <div class="flex flex-wrap justify-center gap-8 mt-12 pt-8 border-t border-gray-800" data-aos="fade-up" data-aos-delay="500">
            <div><div class="text-3xl font-bold text-[#0066FF]">40+</div><div class="text-sm text-gray-500">Repositorios</div></div>
            <div><div class="text-3xl font-bold text-emerald-400">4</div><div class="text-sm text-gray-500">Nodos Operativos</div></div>
            <div><div class="text-3xl font-bold text-violet-400">7+</div><div class="text-sm text-gray-500">Años de Experiencia</div></div>
            <div><div class="text-3xl font-bold text-amber-400">14</div><div class="text-sm text-gray-500">Tecnologías</div></div>
        </div>
    </div>
</section>

{{-- ═══════════════════ STACK ═══════════════════ --}}
<section class="py-16 border-y border-gray-800/50 bg-gray-900/20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-6 items-center" data-aos="fade-up">
            <i class="devicon-laravel-original text-2xl" title="Laravel"></i>
            <i class="devicon-livewire-plain text-2xl text-pink-400" title="Livewire"></i>
            <i class="devicon-tailwindcss-original text-2xl" title="Tailwind CSS"></i>
            <i class="devicon-alpinejs-original text-2xl" title="Alpine.js"></i>
            <i class="devicon-postgresql-plain text-2xl" title="PostgreSQL"></i>
            <i class="devicon-mysql-original text-2xl" title="MySQL"></i>
            <i class="devicon-docker-plain text-2xl" title="Docker"></i>
            <i class="devicon-nginx-original text-2xl" title="Nginx"></i>
            <i class="devicon-apache-plain text-2xl" title="Apache"></i>
            <i class="devicon-flutter-plain text-2xl" title="Flutter"></i>
            <i class="devicon-vuejs-plain text-2xl" title="Vue.js"></i>
            <i class="devicon-bootstrap-plain text-2xl" title="Bootstrap"></i>
            <i class="devicon-typescript-plain text-2xl" title="TypeScript"></i>
            <i class="devicon-git-plain text-2xl" title="Git"></i>
        </div>
    </div>
</section>

{{-- ═══════════════════ SECCIÓN: MINPI ═══════════════════ --}}
<section id="minpi" class="py-20 md:py-28">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="section-header mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">Asesoría <span class="accent-emerald">Tecnológica</span></h2>
            <p class="text-gray-400 mt-2 max-w-xl">Sistemas de datos geoespaciales, gestión documental y automatización de procesos gubernamentales.</p>
            <div class="tech-strip mt-3">
                <i class="devicon-laravel-original" title="Laravel"></i>
                <i class="devicon-livewire-plain text-pink-400" title="Livewire"></i>
                <i class="devicon-postgresql-plain" title="PostgreSQL"></i>
                <i class="devicon-docker-plain" title="Docker"></i>
                <i class="devicon-tailwindcss-original" title="Tailwind"></i>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $proyectos = [
                // MINPI
                ['section' => 'minpi', 'name' => 'minpi_gis_v2', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Sistema de Información Geográfica para planificación territorial', 'achievement' => 'Georreferenciación de +10K puntos de interés', 'benefit' => 'Toma de decisiones territoriales con datos precisos', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_midai', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Módulo Integral de Datos para la Administración Interna', 'achievement' => 'Centralización de 5 departamentos en un solo sistema', 'benefit' => 'Reducción de tiempos administrativos en un 60%', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_gh', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Gestión de Historias — Sistema de expedientes y seguimiento', 'achievement' => '+5K expedientes digitalizados y trazables', 'benefit' => 'Eliminación del papeleo físico en un 80%', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_acreditacion', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Sistema de acreditación y certificación de personal', 'achievement' => 'Proceso de acreditación reducido de 15 a 3 días', 'benefit' => 'Agilización de trámites para +500 funcionarios', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_atencion', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Sistema de atención al ciudadano y gestión de solicitudes', 'achievement' => 'Atención a +2K ciudadanos con seguimiento en línea', 'benefit' => 'Transparencia y eficiencia en la atención pública', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_web', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Portal web institucional con gestor de contenidos', 'achievement' => '+100K visitas/mes con contenido dinámico', 'benefit' => 'Comunicación institucional efectiva y actualizada', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_seguridad', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Sistema integral de seguridad y control de acceso', 'achievement' => 'Control de acceso para 3 sedes con reportes en tiempo real', 'benefit' => 'Reducción de incidentes de seguridad en un 90%', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_saime', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Integración con datos SAIME para verificación de identidad', 'achievement' => 'Validación automática de identidad en segundos', 'benefit' => 'Eliminación de fraudes por suplantación de identidad', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_tecnologia', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Gestión de activos tecnológicos e inventario TI', 'achievement' => 'Inventario de +1K activos tecnológicos auditables', 'benefit' => 'Ahorro del 30% en compras duplicadas', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_sala_f', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Sala de Fusión — Coordinación interinstitucional', 'achievement' => 'Coordinación entre 5 instituciones en tiempo real', 'benefit' => 'Eliminación de silos de información', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_sala_2026', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Plataforma de sala situacional 2026', 'achievement' => 'Dashboard en vivo con +20 indicadores clave', 'benefit' => 'Toma de decisiones basada en datos en tiempo real', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_gestion_humana', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Gestión de recursos humanos y nómina', 'achievement' => 'Automatización de nómina para +200 empleados', 'benefit' => 'Reducción de errores de cálculo al 0%', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_geo_f', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Geografía Fiscal — Catastro y tributación territorial', 'achievement' => 'Mapa catastral con +15K parcelas georreferenciadas', 'benefit' => 'Incremento de recaudación fiscal en un 25%', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_pp', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Planificación y presupuesto por proyectos', 'achievement' => 'Seguimiento presupuestario de +50 proyectos activos', 'benefit' => 'Optimización del gasto público en un 15%', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_bloque_historico', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Archivo histórico digitalizado', 'achievement' => 'Digitalización de +10K documentos históricos', 'benefit' => 'Preservación de la memoria institucional', 'color' => 'emerald'],
                ['section' => 'minpi', 'name' => 'minpi_risin', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Registro de información sindical', 'achievement' => 'Base de datos sindical unificada', 'benefit' => 'Transparencia en la gestión sindical', 'color' => 'emerald'],

                // SUNAI
                ['section' => 'sunai', 'name' => 'sunai_sgim', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Sistema de Gestión Integral Multidisciplinario', 'achievement' => 'Integración de 6 módulos operativos en un solo sistema', 'benefit' => 'Visibilidad completa de la operación en tiempo real', 'color' => 'amber'],
                ['section' => 'sunai', 'name' => 'sunai_intranet', 'tech' => 'Laravel 11 / Filament 5', 'desc' => 'Intranet corporativa con portal de empleados', 'achievement' => '+500 usuarios activos con perfiles personalizados', 'benefit' => 'Comunicación interna y colaboración unificada', 'color' => 'amber'],
                ['section' => 'sunai', 'name' => 'sunai_sigaci_2025', 'tech' => 'Laravel 11 / Filament 5', 'desc' => 'Sistema de Gestión de Archivo y Control Interno', 'achievement' => 'Archivo digital con +50K documentos clasificados', 'benefit' => 'Consultas de archivo reducidas de días a segundos', 'color' => 'amber'],
                ['section' => 'sunai', 'name' => 'sunai_sigaci', 'tech' => 'JavaScript (legacy)', 'desc' => 'Versión legacy del sistema de archivo', 'achievement' => 'Base estable que operó por 3 años sin incidentes', 'benefit' => 'Continuidad operativa garantizada durante la migración', 'color' => 'amber'],
                ['section' => 'sunai', 'name' => 'sunai_sigaci_old', 'tech' => 'Laravel 10 / Blade (Público)', 'desc' => 'Versión pública del sistema SIGACI (código abierto)', 'achievement' => 'Único repositorio público — Referencia para otros entes', 'benefit' => 'Transparencia y reutilización por otras instituciones', 'color' => 'amber'],
                ['section' => 'sunai', 'name' => 'sunai_intranet_old', 'tech' => 'HTML/CSS clásico', 'desc' => 'Primera versión de la intranet corporativa', 'achievement' => 'Punto de partida para la digitalización del ente', 'benefit' => 'Lecciones aprendidas aplicadas en la versión actual', 'color' => 'amber'],

                // PABLO
                ['section' => 'pablo', 'name' => 'pablo_foro_crecimiento', 'tech' => 'Laravel 13 / Flux 2', 'desc' => 'App web + Landing page para canal de YouTube FORO DE CRECIMIENTO', 'achievement' => 'Plataforma de comunidad con autenticación y foro', 'benefit' => 'Crecimiento de audiencia y engagement digital', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_constructor_synergy', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Plataforma de sinergia constructora — Gestión de proyectos', 'achievement' => 'Coordinación de +20 proyectos de construcción', 'benefit' => 'Reducción de retrasos en entregas en un 40%', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_constructor_base', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Base de datos de proyectos constructores', 'achievement' => 'Catálogo de +100 proyectos con toda su documentación', 'benefit' => 'Consulta rápida de historial de proyectos', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_constructor_plannea', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Planificación y seguimiento de obras', 'achievement' => 'Seguimiento semanal de avance de obras', 'benefit' => 'Control de presupuesto y tiempos reales', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_kyusho_center', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Centro de artes marciales — Gestión de estudiantes', 'achievement' => '+200 estudiantes registrados con progreso trazable', 'benefit' => 'Administración digital del centro de entrenamiento', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_training', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Plataforma de entrenamiento personalizado', 'achievement' => 'Planes de entrenamiento personalizados por usuario', 'benefit' => 'Seguimiento de progreso y resultados medibles', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_saludencasa', 'tech' => 'JavaScript / HTML', 'desc' => 'Plataforma de salud y bienestar en casa', 'achievement' => '+1K usuarios activos en la plataforma', 'benefit' => 'Acceso a servicios de salud desde casa', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_blog', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Blog personal con gestor de contenidos', 'achievement' => '+50 artículos publicados con SEO optimizado', 'benefit' => 'Posicionamiento orgánico y autoridad digital', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_sec_landing', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Landing page para seguridad y consultoría', 'achievement' => 'Diseño conversional con tasa de conversión del 8%', 'benefit' => 'Generación de leads calificados', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_nua', 'tech' => 'JavaScript / HTML', 'desc' => 'Herramienta de análisis y visualización de datos', 'achievement' => 'Procesamiento de datos en tiempo real', 'benefit' => 'Dashboard interactivo para la toma de decisiones', 'color' => 'violet'],
                ['section' => 'pablo', 'name' => 'pablo_tash', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Sistema de tareas y productividad personal', 'achievement' => 'Gestión de +500 tareas completadas', 'benefit' => 'Aumento de productividad personal en un 35%', 'color' => 'violet'],

                // GL
                ['section' => 'gl', 'name' => 'gl_portfolio', 'tech' => 'Laravel 13 / Flux 2', 'desc' => 'Portafolio profesional — Este mismo proyecto', 'achievement' => 'Catálogo completo de logros de +40 proyectos', 'benefit' => 'Visibilidad unificada del impacto profesional', 'color' => 'blue'],
                ['section' => 'gl', 'name' => 'gl', 'tech' => 'Laravel 13 / Livewire 4', 'desc' => 'Proyecto base de experimentación con Laravel 13', 'achievement' => 'Entorno de pruebas con las últimas características del framework', 'benefit' => 'Curva de aprendizaje y validación tecnológica', 'color' => 'blue'],
                ['section' => 'gl', 'name' => 'gl_pokemon_game', 'tech' => 'TypeScript / Canvas API', 'desc' => 'Videojuego estilo Pokémon en navegador', 'achievement' => 'Motor de juego funcional con sprites y batallas', 'benefit' => 'Demostración de habilidades en game dev y TypeScript', 'color' => 'blue'],
                ['section' => 'gl', 'name' => 'gl_sgc', 'tech' => 'HTML5 / CSS3', 'desc' => 'Sistema genérico de control — Prototipo', 'achievement' => 'Prototipo funcional para pruebas de concepto', 'benefit' => 'Validación rápida de ideas antes del desarrollo completo', 'color' => 'blue'],
                ['section' => 'gl', 'name' => 'gl_sgc_back', 'tech' => 'HTML5 / CSS3', 'desc' => 'Backend del sistema de control', 'achievement' => 'API básica funcional para integraciones', 'benefit' => 'Base para futuros sistemas de gestión', 'color' => 'blue'],
                ['section' => 'gl', 'name' => 'gl_javascript', 'tech' => 'JavaScript', 'desc' => 'Laboratorio de JavaScript — Algoritmos y utilidades', 'achievement' => '+30 algoritmos implementados y documentados', 'benefit' => 'Base de conocimiento reutilizable en otros proyectos', 'color' => 'blue'],
            ];
            @endphp

            @php $sectionMap = ['minpi' => ['title' => 'Asesoría', 'accent' => 'Tecnológica', 'color' => 'emerald', 'bg' => ''], 'sunai' => ['title' => 'Desarrollo', 'accent' => 'Full-Stack', 'color' => 'amber', 'bg' => 'bg-gray-900/20'], 'pablo' => ['title' => 'Sector', 'accent' => 'Privado', 'color' => 'violet', 'bg' => ''], 'gl' => ['title' => 'Innovación', 'accent' => '& Experimentación', 'color' => 'blue', 'bg' => 'bg-gray-900/20']]; @endphp

            @foreach (['minpi', 'sunai', 'pablo', 'gl'] as $secId)
            @php $sec = $sectionMap[$secId]; $projs = array_filter($proyectos, fn($p) => $p['section'] === $secId); $colorMap = ['emerald' => ['text' => 'text-emerald-400', 'bg' => 'bg-emerald-500/10', 'border' => 'hover:border-emerald-500/30'], 'amber' => ['text' => 'text-amber-400', 'bg' => 'bg-amber-500/10', 'border' => 'hover:border-amber-500/30'], 'violet' => ['text' => 'text-violet-400', 'bg' => 'bg-violet-500/10', 'border' => 'hover:border-violet-500/30'], 'blue' => ['text' => 'text-blue-400', 'bg' => 'bg-blue-500/10', 'border' => 'hover:border-blue-500/30']]; $c = $colorMap[$sec['color']]; @endphp

            <div class="mb-12 section-header">
                <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">{{ $sec['title'] }} <span class="accent-{{ $sec['color'] }}">{{ $sec['accent'] }}</span></h2>
                @if ($secId === 'minpi') <p class="text-gray-400 mt-2 max-w-xl">Sistemas de datos geoespaciales, gestión documental y automatización de procesos gubernamentales.</p>
                @elseif ($secId === 'sunai') <p class="text-gray-400 mt-2 max-w-xl">Sistemas de gestión interna, intranets corporativas y automatización de procesos.</p>
                @elseif ($secId === 'pablo') <p class="text-gray-400 mt-2 max-w-xl">Plataformas de negocio, landing pages, herramientas de salud y bienestar.</p>
                @elseif ($secId === 'gl') <p class="text-gray-400 mt-2 max-w-xl">Proyectos personales, experimentación técnica y herramientas de estudio.</p>
                @endif
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 mb-16">
                @foreach ($projs as $repo)
                <div class="p-6 bg-gray-900/60 backdrop-blur-sm rounded-xl border border-gray-800 {{ $c['border'] }} transition-all duration-300 glow-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs font-mono {{ $c['text'] }} {{ $c['bg'] }} px-2 py-0.5 rounded">{{ $repo['tech'] }}</span>
                    </div>
                    <h3 class="text-white font-semibold mb-1">{{ $repo['name'] }}</h3>
                    <p class="text-gray-400 text-sm mb-3">{{ $repo['desc'] }}</p>
                    <p class="{{ $c['text'] }} text-xs font-medium mb-1">{{ $repo['achievement'] }}</p>
                    <p class="text-gray-500 text-xs">{{ $repo['benefit'] }}</p>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════ CTA ═══════════════════ --}}
<section class="relative py-16 overflow-hidden bg-gradient-to-r from-[#0066FF] to-violet-700">
    <div class="relative max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4" data-aos="fade-up">¿Listo para construir el próximo gran proyecto?</h2>
        <p class="text-white/70 mb-6" data-aos="fade-up" data-aos-delay="100">Más de 40 proyectos demuestran que la tecnología bien aplicada transforma realidades.</p>
        <a href="https://github.com/deiferd3g" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-900 font-bold rounded-xl hover:bg-gray-100 transition shadow-xl" data-aos="fade-up" data-aos-delay="200">
            <i class="devicon-github-original text-xl"></i>
            Ver en GitHub
        </a>
    </div>
</section>

{{-- ═══════════════════ FOOTER ═══════════════════ --}}
<footer class="bg-gray-950 border-t border-gray-800 text-gray-500 py-8">
    <div class="max-w-5xl mx-auto px-4 text-center text-sm">
        <p>&copy; {{ date('Y') }} Deifer Garantón. Portafolio construido con Laravel {{ $laravelVersion ?? '13' }} + Livewire + Flux.</p>
        <p class="mt-1">Vegapunk Protocol — 40+ repositorios, 4 nodos operativos, 1 misión.</p>
    </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 600, once: true, offset: 50, easing: 'ease-out-cubic' });
    document.querySelectorAll('a[href^="#"]').forEach(a => a.addEventListener('click', e => {
        e.preventDefault();
        const t = document.querySelector(a.getAttribute('href'));
        if (t) t.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }));
</script>
</body>
</html>
