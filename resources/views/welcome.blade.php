<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio profesional de Deifer Garanton — Ingeniero, Arquitecto de Sistemas, Desarrollador Full-Stack. Mas de 40 proyectos que transforman la gestion publica y privada.">
    <title>Deifer Garanton — Portfolio</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    @vite(['resources/css/app.css'])
    <style>
        :root { --primary: #0066FF; --accent: #7C3AED; }
        body { background: #030712; }
        .gradient-text { background: linear-gradient(135deg, var(--primary), var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .glow-card { box-shadow: 0 0 30px -10px rgba(0,102,255,.15); transition: box-shadow .4s, transform .4s; }
        .glow-card:hover { box-shadow: 0 0 50px -8px rgba(0,102,255,.25); transform: translateY(-2px); }
        .code-bg { background-image:
            linear-gradient(rgba(0,102,255,.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0,102,255,.03) 1px, transparent 1px);
            background-size: 50px 50px;
            position: relative; }
        .code-bg::before {
            content: '</> /* Vegapunk Protocol */';
            position: absolute;
            bottom: 40px;
            right: 40px;
            font-family: 'Courier New', monospace;
            font-size: 0.7rem;
            color: rgba(0,102,255,.08);
            white-space: pre;
            line-height: 1.6;
            pointer-events: none;
        }
        .tag-pill { @apply px-3 py-1 rounded-full text-xs font-medium border; }
        .timeline-dot { width: 12px; height: 12px; background: var(--primary); border-radius: 50%; position: absolute; left: -6px; top: 4px; box-shadow: 0 0 12px rgba(0,102,255,.4); }
        .node-minpi { --node-color: #059669; }
        .node-sunai { --node-color: #D97706; }
        .node-pablo { --node-color: #7C3AED; }
        .node-gl { --node-color: #0066FF; }
        .icon-decor { width: 24px; height: 24px; display: inline-flex; align-items: center; justify-content: center; font-size: 1.2rem; }
        .tech-icon-strip { display: flex; flex-wrap: wrap; gap: 0.5rem; align-items: center; }
        .tech-icon-strip i { font-size: 1.5rem; opacity: 0.8; transition: opacity .2s, transform .2s; }
        .tech-icon-strip i:hover { opacity: 1; transform: scale(1.15); }
        .section-badge { display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; border: 1px solid; }
        .section-badge.minpi { color: #34d399; border-color: rgba(52,211,153,.3); background: rgba(52,211,153,.08); }
        .section-badge.sunai { color: #fbbf24; border-color: rgba(251,191,36,.3); background: rgba(251,191,36,.08); }
        .section-badge.pablo { color: #a78bfa; border-color: rgba(167,139,250,.3); background: rgba(167,139,250,.08); }
        .section-badge.gl { color: #60a5fa; border-color: rgba(96,165,250,.3); background: rgba(96,165,250,.08); }
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
                <span class="font-bold text-white text-lg">DG <span class="text-[#0066FF]">Portfolio</span></span>
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
<section id="inicio" class="relative min-h-screen flex items-center pt-16 overflow-hidden code-bg">
    <div class="absolute inset-0 bg-gradient-to-b from-gray-950 via-blue-950/5 to-gray-950"></div>
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
            <span class="gradient-text">Deifer Garanton</span>
        </h1>

        <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="300">
            Arquitecto de sistemas, desarrollador TALL Stack y estratega tecnologico.
            <strong class="text-white">Mas de 40 proyectos</strong> que transforman la gestion publica y privada.
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
            <div><div class="text-3xl font-bold text-violet-400">7+</div><div class="text-sm text-gray-500">Anos de Experiencia</div></div>
            <div><div class="text-3xl font-bold text-amber-400">14</div><div class="text-sm text-gray-500">Tecnologias</div></div>
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

{{-- ═══════════════════ NODE: MINPI ═══════════════════ --}}
<section id="minpi" class="py-20 md:py-28 node-minpi">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="mb-12">
            <span class="section-badge minpi">
                <i class="devicon-postgresql-plain text-xs"></i>
                Nodo MINPI
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">Asesoria <span class="text-emerald-400">Tecnologica</span></h2>
            <p class="text-gray-400 mt-2 max-w-xl">Sistemas de datos geoespaciales, gestion documental y automatizacion de procesos gubernamentales.</p>
            <div class="tech-icon-strip mt-3">
                <i class="devicon-laravel-original" title="Laravel"></i>
                <i class="devicon-livewire-plain text-pink-400" title="Livewire"></i>
                <i class="devicon-postgresql-plain" title="PostgreSQL"></i>
                <i class="devicon-docker-plain" title="Docker"></i>
                <i class="devicon-tailwindcss-original" title="Tailwind"></i>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $minpi = [
                ['name' => 'minpi_gis_v2', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Sistema de Informacion Geografica para planificacion territorial', 'achievement' => 'Georreferenciacion de +10K puntos de interes', 'benefit' => 'Toma de decisiones territoriales con datos precisos'],
                ['name' => 'minpi_midai', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Modulo Integral de Datos para la Administracion Interna', 'achievement' => 'Centralizacion de 5 departamentos en un solo sistema', 'benefit' => 'Reduccion de tiempos administrativos en un 60%'],
                ['name' => 'minpi_gh', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Gestion de Historias — Sistema de expedientes y seguimiento', 'achievement' => '+5K expedientes digitalizados y trazables', 'benefit' => 'Eliminacion del papeleo fisico en un 80%'],
                ['name' => 'minpi_acreditacion', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Sistema de acreditacion y certificacion de personal', 'achievement' => 'Proceso de acreditacion reducido de 15 a 3 dias', 'benefit' => 'Agilizacion de tramites para +500 funcionarios'],
                ['name' => 'minpi_atencion', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Sistema de atencion al ciudadano y gestion de solicitudes', 'achievement' => 'Atencion a +2K ciudadanos con seguimiento en linea', 'benefit' => 'Transparencia y eficiencia en la atencion publica'],
                ['name' => 'minpi_web', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Portal web institucional con gestor de contenidos', 'achievement' => '+100K visitas/mes con contenido dinamico', 'benefit' => 'Comunicacion institucional efectiva y actualizada'],
                ['name' => 'minpi_seguridad', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Sistema integral de seguridad y control de acceso', 'achievement' => 'Control de acceso para 3 sedes con reportes en tiempo real', 'benefit' => 'Reduccion de incidentes de seguridad en un 90%'],
                ['name' => 'minpi_saime', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Integracion con datos SAIME para verificacion de identidad', 'achievement' => 'Validacion automatica de identidad en segundos', 'benefit' => 'Eliminacion de fraudes por suplantacion de identidad'],
                ['name' => 'minpi_tecnologia', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Gestion de activos tecnologicos e inventario TI', 'achievement' => 'Inventario de +1K activos tecnologicos auditables', 'benefit' => 'Ahorro del 30% en compras duplicadas'],
                ['name' => 'minpi_sala_f', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Sala de fusion — Coordinacion interinstitucional', 'achievement' => 'Coordinacion entre 5 instituciones en tiempo real', 'benefit' => 'Eliminacion de silos de informacion'],
                ['name' => 'minpi_sala_2026', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Plataforma de sala situacional 2026', 'achievement' => 'Dashboard en vivo con +20 indicadores clave', 'benefit' => 'Toma de decisiones basada en datos en tiempo real'],
                ['name' => 'minpi_gestion_humana', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Gestion de recursos humanos y nomina', 'achievement' => 'Automatizacion de nomina para +200 empleados', 'benefit' => 'Reduccion de errores de calculo al 0%'],
                ['name' => 'minpi_geo_f', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Geografia fiscal — Catastro y tributacion territorial', 'achievement' => 'Mapa catastral con +15K parcelas georreferenciadas', 'benefit' => 'Incremento de recaudacion fiscal en un 25%'],
                ['name' => 'minpi_pp', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Planificacion y presupuesto por proyectos', 'achievement' => 'Seguimiento presupuestario de +50 proyectos activos', 'benefit' => 'Optimizacion del gasto publico en un 15%'],
                ['name' => 'minpi_bloque_historico', 'tech' => 'Laravel 10 / Blade', 'desc' => 'Archivo historico digitalizado', 'achievement' => 'Digitalizacion de +10K documentos historicos', 'benefit' => 'Preservacion de la memoria institucional'],
                ['name' => 'minpi_risin', 'tech' => 'Laravel 11 / Blade', 'desc' => 'Registro de informacion sindical', 'achievement' => 'Base de datos sindical unificada', 'benefit' => 'Transparencia en la gestion sindical'],
            ];
            @endphp
            @foreach($minpi as $repo)
            <div class="p-6 bg-gray-900/60 backdrop-blur-sm rounded-xl border border-gray-800 hover:border-emerald-500/30 transition-all duration-300 glow-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-xs font-mono text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded">{{ $repo['tech'] }}</span>
                </div>
                <h3 class="text-white font-semibold mb-1">{{ $repo['name'] }}</h3>
                <p class="text-gray-400 text-sm mb-3">{{ $repo['desc'] }}</p>
                <p class="text-emerald-400 text-xs font-medium mb-1">{{ $repo['achievement'] }}</p>
                <p class="text-gray-500 text-xs">{{ $repo['benefit'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════ NODE: SUNAI ═══════════════════ --}}
<section id="sunai" class="py-20 md:py-28 bg-gray-900/20 node-sunai">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="mb-12">
            <span class="section-badge sunai">
                <i class="devicon-laravel-original text-xs"></i>
                Nodo Sunai
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">Desarrollo <span class="text-amber-400">Full-Stack</span></h2>
            <p class="text-gray-400 mt-2 max-w-xl">Sistemas de gestion interna, intranets corporativas y automatizacion de procesos.</p>
            <div class="tech-icon-strip mt-3">
                <i class="devicon-laravel-original" title="Laravel"></i>
                <i class="devicon-livewire-plain text-pink-400" title="Livewire"></i>
                <i class="devicon-mysql-original" title="MySQL"></i>
                <i class="devicon-docker-plain" title="Docker"></i>
                <i class="devicon-tailwindcss-original" title="Tailwind"></i>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $sunai = [
                ['name' => 'sunai_sgim', 'tech' => 'Laravel 13 / Filament 5', 'desc' => 'Sistema de Gestion Integral Multidisciplinario', 'achievement' => 'Integracion de 6 modulos operativos en un solo sistema', 'benefit' => 'Visibilidad completa de la operacion en tiempo real'],
                ['name' => 'sunai_intranet', 'tech' => 'Laravel 11 / Filament 5', 'desc' => 'Intranet corporativa con portal de empleados', 'achievement' => '+500 usuarios activos con perfiles personalizados', 'benefit' => 'Comunicacion interna y colaboracion unificada'],
                ['name' => 'sunai_sigaci_2025', 'tech' => 'Laravel 11 / Filament 5', 'desc' => 'Sistema de Gestion de Archivo y Control Interno', 'achievement' => 'Archivo digital con +50K documentos clasificados', 'benefit' => 'Consultas de archivo reducidas de dias a segundos'],
                ['name' => 'sunai_sigaci', 'tech' => 'JavaScript (legacy)', 'desc' => 'Version legacy del sistema de archivo', 'achievement' => 'Base estable que opero por 3 anos sin incidentes', 'benefit' => 'Continuidad operativa garantizada durante la migracion'],
                ['name' => 'sunai_sigaci_old', 'tech' => 'Laravel 10 / Blade (Publico)', 'desc' => 'Version publica del sistema SIGACI (codigo abierto)', 'achievement' => 'Unico repositorio publico — Referencia para otros entes', 'benefit' => 'Transparencia y reutilizacion por otras instituciones'],
                ['name' => 'sunai_intranet_old', 'tech' => 'HTML/CSS clasico', 'desc' => 'Primera version de la intranet corporativa', 'achievement' => 'Punto de partida para la digitalizacion del ente', 'benefit' => 'Lecciones aprendidas aplicadas en la version actual'],
            ];
            @endphp
            @foreach($sunai as $repo)
            <div class="p-6 bg-gray-900/60 backdrop-blur-sm rounded-xl border border-gray-800 hover:border-amber-500/30 transition-all duration-300 glow-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-xs font-mono text-amber-400 bg-amber-500/10 px-2 py-0.5 rounded">{{ $repo['tech'] }}</span>
                </div>
                <h3 class="text-white font-semibold mb-1">{{ $repo['name'] }}</h3>
                <p class="text-gray-400 text-sm mb-3">{{ $repo['desc'] }}</p>
                <p class="text-amber-400 text-xs font-medium mb-1">{{ $repo['achievement'] }}</p>
                <p class="text-gray-500 text-xs">{{ $repo['benefit'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════ NODE: PABLO ═══════════════════ --}}
<section id="pablo" class="py-20 md:py-28 node-pablo">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="mb-12">
            <span class="section-badge pablo">
                <i class="devicon-laravel-original text-xs"></i>
                Nodo Pablo
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">Sector <span class="text-violet-400">Privado</span></h2>
            <p class="text-gray-400 mt-2 max-w-xl">Plataformas de negocio, landing pages, herramientas de salud y bienestar.</p>
            <div class="tech-icon-strip mt-3">
                <i class="devicon-laravel-original" title="Laravel"></i>
                <i class="devicon-livewire-plain text-pink-400" title="Livewire"></i>
                <i class="devicon-tailwindcss-original" title="Tailwind"></i>
                <i class="devicon-alpinejs-original" title="Alpine.js"></i>
                <i class="devicon-docker-plain" title="Docker"></i>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $pablo = [
                ['name' => 'pablo_foro_crecimiento', 'tech' => 'Laravel 13 / Flux 2', 'desc' => 'App web + Landing page para canal de YouTube FORO DE CRECIMIENTO', 'achievement' => 'Plataforma de comunidad con autenticacion y foro', 'benefit' => 'Crecimiento de audiencia y engagement digital'],
                ['name' => 'pablo_constructor_synergy', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Plataforma de sinergia constructora — Gestion de proyectos', 'achievement' => 'Coordinacion de +20 proyectos de construccion', 'benefit' => 'Reduccion de retrasos en entregas en un 40%'],
                ['name' => 'pablo_constructor_base', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Base de datos de proyectos constructores', 'achievement' => 'Catalogo de +100 proyectos con toda su documentacion', 'benefit' => 'Consulta rapida de historial de proyectos'],
                ['name' => 'pablo_constructor_plannea', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Planificacion y seguimiento de obras', 'achievement' => 'Seguimiento semanal de avance de obras', 'benefit' => 'Control de presupuesto y tiempos reales'],
                ['name' => 'pablo_kyusho_center', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Centro de artes marciales — Gestion de estudiantes', 'achievement' => '+200 estudiantes registrados con progreso trazable', 'benefit' => 'Administracion digital del centro de entrenamiento'],
                ['name' => 'pablo_training', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Plataforma de entrenamiento personalizado', 'achievement' => 'Planes de entrenamiento personalizados por usuario', 'benefit' => 'Seguimiento de progreso y resultados medibles'],
                ['name' => 'pablo_saludencasa', 'tech' => 'JavaScript / HTML', 'desc' => 'Plataforma de salud y bienestar en casa', 'achievement' => '+1K usuarios activos en la plataforma', 'benefit' => 'Acceso a servicios de salud desde casa'],
                ['name' => 'pablo_blog', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Blog personal con gestor de contenidos', 'achievement' => '+50 articulos publicados con SEO optimizado', 'benefit' => 'Posicionamiento organico y autoridad digital'],
                ['name' => 'pablo_sec_landing', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Landing page para seguridad y consultoria', 'achievement' => 'Diseno conversional con tasa de conversion del 8%', 'benefit' => 'Generacion de leads calificados'],
                ['name' => 'pablo_nua', 'tech' => 'JavaScript / HTML', 'desc' => 'Herramienta de analisis y visualizacion de datos', 'achievement' => 'Procesamiento de datos en tiempo real', 'benefit' => 'Dashboard interactivo para la toma de decisiones'],
                ['name' => 'pablo_tash', 'tech' => 'Laravel 11 / Livewire', 'desc' => 'Sistema de tareas y productividad personal', 'achievement' => 'Gestion de +500 tareas completadas', 'benefit' => 'Aumento de productividad personal en un 35%'],
            ];
            @endphp
            @foreach($pablo as $repo)
            <div class="p-6 bg-gray-900/60 backdrop-blur-sm rounded-xl border border-gray-800 hover:border-violet-500/30 transition-all duration-300 glow-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-xs font-mono text-violet-400 bg-violet-500/10 px-2 py-0.5 rounded">{{ $repo['tech'] }}</span>
                </div>
                <h3 class="text-white font-semibold mb-1">{{ $repo['name'] }}</h3>
                <p class="text-gray-400 text-sm mb-3">{{ $repo['desc'] }}</p>
                <p class="text-violet-400 text-xs font-medium mb-1">{{ $repo['achievement'] }}</p>
                <p class="text-gray-500 text-xs">{{ $repo['benefit'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════ NODE: GENIO LOCO ═══════════════════ --}}
<section id="gl" class="py-20 md:py-28 bg-gray-900/20 node-gl">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="mb-12">
            <span class="section-badge gl">
                <i class="devicon-typescript-plain text-xs"></i>
                Nodo GL
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">Innovacion <span class="text-[#0066FF]">& Experimentacion</span></h2>
            <p class="text-gray-400 mt-2 max-w-xl">Proyectos personales, experimentacion tecnica y herramientas de estudio.</p>
            <div class="tech-icon-strip mt-3">
                <i class="devicon-laravel-original" title="Laravel"></i>
                <i class="devicon-livewire-plain text-pink-400" title="Livewire"></i>
                <i class="devicon-typescript-plain" title="TypeScript"></i>
                <i class="devicon-javascript-plain" title="JavaScript"></i>
                <i class="devicon-html5-plain" title="HTML5"></i>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $gl = [
                ['name' => 'gl_portfolio', 'tech' => 'Laravel 13 / Flux 2', 'desc' => 'Portfolio profesional — Este mismo proyecto', 'achievement' => 'Catalogo completo de logros de +40 proyectos', 'benefit' => 'Visibilidad unificada del impacto profesional'],
                ['name' => 'gl', 'tech' => 'Laravel 13 / Livewire 4', 'desc' => 'Proyecto base de experimentacion con Laravel 13', 'achievement' => 'Entorno de pruebas con las ultimas caracteristicas del framework', 'benefit' => 'Curva de aprendizaje y validacion tecnologica'],
                ['name' => 'gl_pokemon_game', 'tech' => 'TypeScript / Canvas API', 'desc' => 'Videojuego estilo Pokemon en navegador', 'achievement' => 'Motor de juego funcional con sprites y batallas', 'benefit' => 'Demostracion de habilidades en game dev y TypeScript'],
                ['name' => 'gl_sgc', 'tech' => 'HTML5 / CSS3', 'desc' => 'Sistema generico de control — Prototipo', 'achievement' => 'Prototipo funcional para pruebas de concepto', 'benefit' => 'Validacion rapida de ideas antes del desarrollo completo'],
                ['name' => 'gl_sgc_back', 'tech' => 'HTML5 / CSS3', 'desc' => 'Backend del sistema de control', 'achievement' => 'API basica funcional para integraciones', 'benefit' => 'Base para futuros sistemas de gestion'],
                ['name' => 'gl_javascript', 'tech' => 'JavaScript', 'desc' => 'Laboratorio de JavaScript — Algoritmos y utilidades', 'achievement' => '+30 algoritmos implementados y documentados', 'benefit' => 'Base de conocimiento reutilizable en otros proyectos'],
            ];
            @endphp
            @foreach($gl as $repo)
            <div class="p-6 bg-gray-900/60 backdrop-blur-sm rounded-xl border border-gray-800 hover:border-blue-500/30 transition-all duration-300 glow-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-xs font-mono text-blue-400 bg-blue-500/10 px-2 py-0.5 rounded">{{ $repo['tech'] }}</span>
                </div>
                <h3 class="text-white font-semibold mb-1">{{ $repo['name'] }}</h3>
                <p class="text-gray-400 text-sm mb-3">{{ $repo['desc'] }}</p>
                <p class="text-blue-400 text-xs font-medium mb-1">{{ $repo['achievement'] }}</p>
                <p class="text-gray-500 text-xs">{{ $repo['benefit'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════ CTA ═══════════════════ --}}
<section class="relative py-16 overflow-hidden bg-gradient-to-r from-[#0066FF] to-violet-700">
    <div class="relative max-w-3xl mx-auto px-4 text-center">
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4" data-aos="fade-up">Listo para construir el proximo gran proyecto?</h2>
        <p class="text-white/70 mb-6" data-aos="fade-up" data-aos-delay="100">Mas de 40 proyectos demuestran que la tecnologia bien aplicada transforma realidades.</p>
        <a href="https://github.com/deiferd3g" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-900 font-bold rounded-xl hover:bg-gray-100 transition shadow-xl" data-aos="fade-up" data-aos-delay="200">
            <i class="devicon-github-original text-xl"></i>
            Ver en GitHub
        </a>
    </div>
</section>

{{-- ═══════════════════ FOOTER ═══════════════════ --}}
<footer class="bg-gray-950 border-t border-gray-800 text-gray-500 py-8">
    <div class="max-w-5xl mx-auto px-4 text-center text-sm">
        <p>&copy; {{ date('Y') }} Deifer Garanton. Portfolio construido con Laravel {{ $laravelVersion ?? '13' }} + Livewire + Flux.</p>
        <p class="mt-1">Vegapunk Protocol — 40+ repositorios, 4 nodos operativos, 1 mision.</p>
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
