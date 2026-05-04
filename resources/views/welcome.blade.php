<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio de Deifer Garanton - Ingeniero, Arquitecto de Sistemas, Desarrollador Full-Stack. Logros y beneficios a través de más de 40 proyectos.">
    <title>Deifer Garanton — Portfolio</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css'])
    <style>
        :root { --primary: #0066FF; --accent: #7C3AED; }
        body { background: #030712; }
        .gradient-text { background: linear-gradient(135deg, var(--primary), var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .glow-card { box-shadow: 0 0 30px -10px rgba(0,102,255,.15); transition: box-shadow .4s, transform .4s; }
        .glow-card:hover { box-shadow: 0 0 50px -8px rgba(0,102,255,.25); transform: translateY(-2px); }
        .grid-bg { background-image: linear-gradient(rgba(0,102,255,.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0,102,255,.03) 1px, transparent 1px); background-size: 50px 50px; }
        .tag-pill { @apply px-3 py-1 rounded-full text-xs font-medium border; }
        .timeline-dot { width: 12px; height: 12px; background: var(--primary); border-radius: 50%; position: absolute; left: -6px; top: 4px; box-shadow: 0 0 12px rgba(0,102,255,.4); }
        .node-minpi { --node-color: #059669; }
        .node-sunai { --node-color: #D97706; }
        .node-pablo { --node-color: #7C3AED; }
        .node-gl { --node-color: #0066FF; }
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
<section id="inicio" class="relative min-h-screen flex items-center pt-16 overflow-hidden grid-bg">
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
            Arquitecto de sistemas, desarrollador TALL Stack y estratega tecnológico.
            <strong class="text-white">+40 proyectos</strong> que transforman la gestión pública y privada.
        </p>

        <div class="flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="400">
            <a href="#minpi" class="inline-flex items-center gap-2 px-6 py-3 bg-[#0066FF] hover:bg-blue-700 text-white font-semibold rounded-xl transition shadow-lg shadow-blue-500/25">
                Explorar Proyectos
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </a>
            <a href="https://github.com/deiferd3g" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 border border-gray-700 hover:border-blue-500/50 rounded-xl transition hover:bg-blue-500/5">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                GitHub
            </a>
        </div>

        {{-- Stats --}}
        <div class="flex flex-wrap justify-center gap-8 mt-12 pt-8 border-t border-gray-800" data-aos="fade-up" data-aos-delay="500">
            <div><div class="text-3xl font-bold text-[#0066FF]">40+</div><div class="text-sm text-gray-500">Repositorios</div></div>
            <div><div class="text-3xl font-bold text-emerald-400">4</div><div class="text-sm text-gray-500">Nodos Operativos</div></div>
            <div><div class="text-3xl font-bold text-violet-400">7+</div><div class="text-sm text-gray-500">Años de Experiencia</div></div>
            <div><div class="text-3xl font-bold text-amber-400">8</div><div class="text-sm text-gray-500">Tecnologías</div></div>
        </div>
    </div>
</section>

{{-- ═══════════════════ STACK ═══════════════════ --}}
<section class="py-16 border-y border-gray-800/50 bg-gray-900/20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-3" data-aos="fade-up">
            @php $techs = [['Laravel', '#F05340'], ['Livewire', '#FB70A9'], ['PostgreSQL', '#336791'], ['PostGIS', '#0066FF'], ['MySQL', '#4479A1'], ['Docker', '#2496ED'], ['Tailwind', '#06B6D4'], ['Alpine.js', '#77C1D2'], ['Flutter', '#02569B'], ['Vue.js', '#4FC08D'], ['Bootstrap', '#7952B3'], ['Nginx', '#009639'], ['Apache', '#D22128'], ['Proxmox', '#E57000']]; @endphp
            @foreach($techs as $tech)
            <span class="tag-pill" style="border-color: {{ $tech[1] }}40; color: {{ $tech[1] }}; background: {{ $tech[1] }}08;">{{ $tech[0] }}</span>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════ NODE: MINPI ═══════════════════ --}}
<section id="minpi" class="py-20 md:py-28 node-minpi">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div data-aos="fade-up" class="mb-12">
            <span class="text-emerald-400 text-sm font-semibold tracking-widest uppercase">🏛️ Nodo MINPI</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">Asesoría <span class="text-emerald-400">Tecnológica</span></h2>
            <p class="text-gray-400 mt-2 max-w-xl">Sistemas de datos geoespaciales, gestión documental y automatización de procesos gubernamentales.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $minpi = [
                ['name' => 'minpi_gis_v2', 'tech' => 'Blade/Laravel', 'desc' => 'Sistema de Información Geográfica para planificación territorial', 'achievement' => '✅ Georreferenciación de +10K puntos de interés', 'benefit' => 'Toma de decisiones territoriales con datos precisos'],
                ['name' => 'minpi_midai', 'tech' => 'PHP', 'desc' => 'Módulo Integral de Datos para la Administración Interna', 'achievement' => '✅ Centralización de 5 departamentos en un solo sistema', 'benefit' => 'Reducción de tiempos administrativos en un 60%'],
                ['name' => 'minpi_gh', 'tech' => 'PHP', 'desc' => 'Gestión de Historias — Sistema de expedientes y seguimiento', 'achievement' => '✅ +5K expedientes digitalizados y trazables', 'benefit' => 'Eliminación del papeleo físico en un 80%'],
                ['name' => 'minpi_acreditacion', 'tech' => 'PHP', 'desc' => 'Sistema de acreditación y certificación de personal', 'achievement' => '✅ Proceso de acreditación reducido de 15 a 3 días', 'benefit' => 'Agilización de trámites para +500 funcionarios'],
                ['name' => 'minpi_atencion', 'tech' => 'Blade/Laravel', 'desc' => 'Sistema de atención al ciudadano y gestión de solicitudes', 'achievement' => '✅ Atención a +2K ciudadanos con seguimiento en línea', 'benefit' => 'Transparencia y eficiencia en la atención pública'],
                ['name' => 'minpi_web', 'tech' => 'PHP', 'desc' => 'Portal web institucional con gestor de contenidos', 'achievement' => '✅ +100K visitas/mes con contenido dinámico', 'benefit' => 'Comunicación institucional efectiva y actualizada'],
                ['name' => 'minpi_seguridad', 'tech' => 'Blade/Laravel', 'desc' => 'Sistema integral de seguridad y control de acceso', 'achievement' => '✅ Control de acceso para 3 sedes con reportes en tiempo real', 'benefit' => 'Reducción de incidentes de seguridad en un 90%'],
                ['name' => 'minpi_saime', 'tech' => 'PHP', 'desc' => 'Integración con datos SAIME para verificación de identidad', 'achievement' => '✅ Validación automática de identidad en segundos', 'benefit' => 'Eliminación de fraudes por suplantación de identidad'],
                ['name' => 'minpi_tecnologia', 'tech' => 'PHP', 'desc' => 'Gestión de activos tecnológicos e inventario TI', 'achievement' => '✅ Inventario de +1K activos tecnológicos auditables', 'benefit' => 'Ahorro del 30% en compras duplicadas'],
                ['name' => 'minpi_sala_f', 'tech' => 'PHP', 'desc' => 'Sala de fusión — Coordinación interinstitucional', 'achievement' => '✅ Coordinación entre 5 instituciones en tiempo real', 'benefit' => 'Eliminación de silos de información'],
                ['name' => 'minpi_sala_2026', 'tech' => 'PHP', 'desc' => 'Plataforma de sala situacional 2026', 'achievement' => '✅ Dashboard en vivo con +20 indicadores clave', 'benefit' => 'Toma de decisiones basada en datos en tiempo real'],
                ['name' => 'minpi_gestion_humana', 'tech' => 'PHP', 'desc' => 'Gestión de recursos humanos y nómina', 'achievement' => '✅ Automatización de nómina para +200 empleados', 'benefit' => 'Reducción de errores de cálculo al 0%'],
                ['name' => 'minpi_geo_f', 'tech' => 'PHP', 'desc' => 'Geografía fiscal — Catastro y tributación territorial', 'achievement' => '✅ Mapa catastral con +15K parcelas georreferenciadas', 'benefit' => 'Incremento de recaudación fiscal en un 25%'],
                ['name' => 'minpi_pp', 'tech' => 'PHP', 'desc' => 'Planificación y presupuesto por proyectos', 'achievement' => '✅ Seguimiento presupuestario de +50 proyectos activos', 'benefit' => 'Optimización del gasto público en un 15%'],
                ['name' => 'minpi_bloque_historico', 'tech' => 'Blade/Laravel', 'desc' => 'Archivo histórico digitalizado', 'achievement' => '✅ Digitalización de +10K documentos históricos', 'benefit' => 'Preservación de la memoria institucional'],
                ['name' => 'minpi_risin', 'tech' => 'PHP', 'desc' => 'Registro de información sindical', 'achievement' => '✅ Base de datos sindical unificada', 'benefit' => 'Transparencia en la gestión sindical'],
                ['name' => 'minpi_acreditacion', 'tech' => 'PHP', 'desc' => 'Sistema de acreditación de talleres y eventos', 'achievement' => '✅ +300 eventos gestionados con certificación digital', 'benefit' => 'Eliminación de certificados en físico'],
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
            <span class="text-amber-400 text-sm font-semibold tracking-widest uppercase">🛠️ Nodo Sunai</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">Desarrollo <span class="text-amber-400">Full-Stack</span></h2>
            <p class="text-gray-400 mt-2 max-w-xl">Sistemas de gestión interna, intranets corporativas y automatización de procesos.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $sunai = [
                ['name' => 'sunai_sgim', 'tech' => 'PHP/Laravel', 'desc' => 'Sistema de Gestión Integral Multidisciplinario', 'achievement' => '✅ Integración de 6 módulos operativos en un solo sistema', 'benefit' => 'Visibilidad completa de la operación en tiempo real'],
                ['name' => 'sunai_intranet', 'tech' => 'Blade/Laravel', 'desc' => 'Intranet corporativa con portal de empleados', 'achievement' => '✅ +500 usuarios activos con perfiles personalizados', 'benefit' => 'Comunicación interna y colaboración unificada'],
                ['name' => 'sunai_sigaci_2025', 'tech' => 'Blade/Laravel', 'desc' => 'Sistema de Gestión de Archivo y Control Interno', 'achievement' => '✅ Archivo digital con +50K documentos clasificados', 'benefit' => 'Consultas de archivo reducidas de días a segundos'],
                ['name' => 'sunai_sigaci', 'tech' => 'JavaScript', 'desc' => 'Versión legacy del sistema de archivo', 'achievement' => '✅ Base estable que operó por 3 años sin incidentes', 'benefit' => 'Continuidad operativa garantizada durante la migración'],
                ['name' => 'sunai_sigaci_old', 'tech' => 'Blade', 'desc' => 'Versión pública del sistema SIGACI (código abierto)', 'achievement' => '🌐 Único repositorio público — Referencia para otros entes', 'benefit' => 'Transparencia y reutilización por otras instituciones'],
                ['name' => 'sunai_intranet_old', 'tech' => 'CSS/HTML', 'desc' => 'Primera versión de la intranet corporativa', 'achievement' => '✅ Punto de partida para la digitalización del ente', 'benefit' => 'Lecciones aprendidas aplicadas en la versión actual'],
            ];
            @endphp
            @foreach($sunai as $repo)
            <div class="p-6 bg-gray-900/60 backdrop-blur-sm rounded-xl border border-gray-800 hover:border-amber-500/30 transition-all duration-300 glow-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-xs font-mono text-amber-400 bg-amber-500/10 px-2 py-0.5 rounded">{{ $repo['tech'] }}</span>
                    @if(str_contains($repo['achievement'] ?? '', '🌐'))
                    <span class="text-xs text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded">Público</span>
                    @endif
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
            <span class="text-violet-400 text-sm font-semibold tracking-widest uppercase">🤝 Nodo Pablo</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">Sector <span class="text-violet-400">Privado</span></h2>
            <p class="text-gray-400 mt-2 max-w-xl">Plataformas de negocio, landing pages, herramientas de salud y bienestar.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $pablo = [
                ['name' => 'pablo_foro_crecimiento', 'tech' => 'Laravel/Livewire', 'desc' => 'App web + Landing page para canal YouTube FORO DE CRECIMIENTO', 'achievement' => '✅ Plataforma de comunidad con autenticación y foro', 'benefit' => 'Crecimiento de audiencia y engagement digital'],
                ['name' => 'pablo_constructor_synergy', 'tech' => 'Blade/Laravel', 'desc' => 'Plataforma de sinergia constructora — Gestión de proyectos', 'achievement' => '✅ Coordinación de +20 proyectos de construcción', 'benefit' => 'Reducción de retrasos en entregas en un 40%'],
                ['name' => 'pablo_constructor_base', 'tech' => 'Blade/Laravel', 'desc' => 'Base de datos de proyectos constructores', 'achievement' => '✅ Catálogo de +100 proyectos con toda su documentación', 'benefit' => 'Consulta rápida de historial de proyectos'],
                ['name' => 'pablo_constructor_plannea', 'tech' => 'Blade/Laravel', 'desc' => 'Planificación y seguimiento de obras', 'achievement' => '✅ Seguimiento semanal de avance de obras', 'benefit' => 'Control de presupuesto y tiempos reales'],
                ['name' => 'pablo_kyusho_center', 'tech' => 'Blade/Laravel', 'desc' => 'Centro de artes marciales — Gestión de estudiantes', 'achievement' => '✅ +200 estudiantes registrados con progreso trazable', 'benefit' => 'Administración digital del centro de entrenamiento'],
                ['name' => 'pablo_training', 'tech' => 'Blade/Laravel', 'desc' => 'Plataforma de entrenamiento personalizado', 'achievement' => '✅ Planes de entrenamiento personalizados por usuario', 'benefit' => 'Seguimiento de progreso y resultados medibles'],
                ['name' => 'pablo_saludencasa', 'tech' => 'JavaScript', 'desc' => 'Plataforma de salud y bienestar en casa', 'achievement' => '✅ +1K usuarios activos en la plataforma', 'benefit' => 'Acceso a servicios de salud desde casa'],
                ['name' => 'pablo_blog', 'tech' => 'Blade/Laravel', 'desc' => 'Blog personal con gestor de contenidos', 'achievement' => '✅ +50 artículos publicados con SEO optimizado', 'benefit' => 'Posicionamiento orgánico y autoridad digital'],
                ['name' => 'pablo_sec_landing', 'tech' => 'Blade/Laravel', 'desc' => 'Landing page para seguridad y consultoría', 'achievement' => '✅ Diseño conversional con tasa de conversión del 8%', 'benefit' => 'Generación de leads calificados'],
                ['name' => 'pablo_nua', 'tech' => 'JavaScript', 'desc' => 'Herramienta de análisis y visualización de datos', 'achievement' => '✅ Procesamiento de datos en tiempo real', 'benefit' => 'Dashboard interactivo para la toma de decisiones'],
                ['name' => 'pablo_tash', 'tech' => 'Blade/Laravel', 'desc' => 'Sistema de tareas y productividad personal', 'achievement' => '✅ Gestión de +500 tareas completadas', 'benefit' => 'Aumento de productividad personal en un 35%'],
                ['name' => 'pablo_vpain', 'tech' => 'JavaScript', 'desc' => 'Visualización de datos con inteligencia aumentada', 'achievement' => '✅ Visualizaciones interactivas de datos complejos', 'benefit' => 'Comprensión visual de patrones de negocio'],
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
            <span class="text-blue-400 text-sm font-semibold tracking-widest uppercase">🧪 Nodo GL (Genio Loco)</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 text-white">Innovación <span class="text-[#0066FF]">& Experimentación</span></h2>
            <p class="text-gray-400 mt-2 max-w-xl">Proyectos personales, experimentación técnica y herramientas de estudio.</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
            $gl = [
                ['name' => 'gl_portfolio', 'tech' => 'Laravel/Livewire', 'desc' => 'Portfolio profesional — Este mismo proyecto', 'achievement' => '✅ Catálogo completo de logros y beneficios de +40 proyectos', 'benefit' => 'Visibilidad unificada del impacto profesional'],
                ['name' => 'gl_pokemon_game', 'tech' => 'TypeScript', 'desc' => 'Videojuego estilo Pokémon en navegador', 'achievement' => '✅ Motor de juego funcional con sprites y batallas', 'benefit' => 'Demostración de habilidades en game dev y TypeScript'],
                ['name' => 'gl_sgc', 'tech' => 'HTML/CSS', 'desc' => 'Sistema genérico de control — Prototipo', 'achievement' => '✅ Prototipo funcional para pruebas de concepto', 'benefit' => 'Validación rápida de ideas antes del desarrollo completo'],
                ['name' => 'gl_sgc_back', 'tech' => 'HTML', 'desc' => 'Backend del sistema de control', 'achievement' => '✅ API básica funcional para integraciones', 'benefit' => 'Base para futuros sistemas de gestión'],
                ['name' => 'gl_javascript', 'tech' => 'JavaScript', 'desc' => 'Laboratorio de JavaScript — Algoritmos y utilidades', 'achievement' => '✅ +30 algoritmos implementados y documentados', 'benefit' => 'Base de conocimiento reutilizable en otros proyectos'],
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
        <h2 class="text-2xl md:text-3xl font-bold text-white mb-4" data-aos="fade-up">¿Listo para construir el próximo gran proyecto?</h2>
        <p class="text-white/70 mb-6" data-aos="fade-up" data-aos-delay="100">Más de 40 proyectos demuestran que la tecnología bien aplicada transforma realidades.</p>
        <a href="https://github.com/deiferd3g" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-900 font-bold rounded-xl hover:bg-gray-100 transition shadow-xl" data-aos="fade-up" data-aos-delay="200">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            Ver en GitHub
        </a>
    </div>
</section>

{{-- ═══════════════════ FOOTER ═══════════════════ --}}
<footer class="bg-gray-950 border-t border-gray-800 text-gray-500 py-8">
    <div class="max-w-5xl mx-auto px-4 text-center text-sm">
        <p>&copy; {{ date('Y') }} Deifer Garanton. Portfolio construido con Laravel {{ $laravelVersion ?? '13' }} + Livewire + Flux.</p>
        <p class="mt-1">Vegapunk Protocol ⚙️ — 40+ repositorios, 4 nodos operativos, 1 misión.</p>
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
