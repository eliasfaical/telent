<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innozza</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Montserrat & Sora -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Sora:wght@500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        display: ['Sora', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f4f8fb',
                            100: '#e3edf5',
                            200: '#c5dbe9',
                            500: '#0B3A5B', // Confiança
                            600: '#092d47', 
                            700: '#072033',
                            800: '#051624',
                            900: '#0B3A5B',
                            950: '#030c14',
                        },
                        innozza: {
                            confianca: '#0B3A5B',
                            inclusao: '#0987A7',
                            movimento: '#16B8A6',
                            oportunidade: '#7BC043',
                            energia: '#F6B800',
                            diversidade: '#7A5AF8'
                        }
                    },
                    borderRadius: {
                        '3xl': '1.5rem',
                        'full': '9999px',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes ticker {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-ticker {
            display: inline-flex;
            white-space: nowrap;
            animation: ticker 30s linear infinite;
        }
        .animate-ticker:hover {
            animation-play-state: paused;
        }
        body, h1, h2, h3, h4, h5, h6, p, span, a, button, input, textarea, select {
            color: #0B3A5B;
        }
        .text-white, .text-white *, .bg-brand-900 *, .bg-brand-600 *, .bg-brand-500 *, .bg-innozza-confianca * {
            color: #ffffff !important;
        }
    </style>
</head>
<body class="bg-brand-50 antialiased min-h-screen flex flex-col selection:bg-innozza-oportunidade selection:text-white rounded-none">

    <div class="bg-innozza-inclusao text-white text-xs py-2 overflow-hidden border-b border-brand-600 relative z-50">
        <div class="flex items-center">
            <div class="bg-innozza-energia text-slate-900 px-4 py-1 font-bold text-[10px] uppercase tracking-wider shrink-0 flex items-center gap-1.5 z-10 shadow-sm ml-2 rounded-full">
                <i class="fa-solid fa-bolt text-slate-900 animate-pulse"></i> Vagas Afirmativas PCD
            </div>
            <div class="overflow-hidden flex-1 relative flex">
                <div class="animate-ticker flex items-center gap-8 pl-4 text-slate-100">
                    <span class="inline-flex items-center gap-2 cursor-pointer hover:text-white transition" onclick="openJobModal(1)">
                        <strong class="text-white font-semibold">TechCorp:</strong> Estágio em Desenvolvimento Afirmativo PCD • São Paulo
                    </span>
                    <span class="text-slate-400">•</span>
                    <span class="inline-flex items-center gap-2 cursor-pointer hover:text-white transition" onclick="openJobModal(2)">
                        <strong class="text-white font-semibold">GrowthMedia:</strong> Analista de Marketing Digital Jr PCD • Remoto
                    </span>
                    <span class="text-slate-400">•</span>
                    <span class="inline-flex items-center gap-2 cursor-pointer hover:text-white transition" onclick="openJobModal(3)">
                        <strong class="text-white font-semibold">CapitalInvest:</strong> Finanças Corporativas & Bolsas PCD • Rio de Janeiro
                    </span>
                </div>
            </div>
        </div>
    </div>

    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3 cursor-pointer py-1" onclick="switchView('landing')">
                <img src="img/logo.png" alt="Innozza Logo" class="h-8 sm:h-9 w-auto object-contain max-w-[150px]" onerror="this.onerror=null; this.src='https://placehold.co/180x50/0B3A5B/ffffff?text=Innozza';">
            </div>
            
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium font-display text-brand-500">
                <a href="#como-funciona" onclick="switchView('landing')" class="hover:text-innozza-inclusao transition">Como funciona</a>
                <a href="#pilares" onclick="switchView('landing')" class="hover:text-innozza-inclusao transition">Pilares</a>
                <a href="#servicos" onclick="switchView('landing')" class="hover:text-innozza-inclusao transition">Serviços</a>
                <a href="#impacto" onclick="switchView('landing')" class="hover:text-innozza-inclusao transition">Impacto</a>
            </nav>

            <div class="flex items-center gap-3" id="authNavContainer">
                <div id="notificationBellWrapper" class="relative hidden">
                    <button onclick="toggleNotificationDropdown()" class="w-10 h-10 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-brand-500 relative transition shadow-sm">
                        <i class="fa-solid fa-bell text-sm"></i>
                        <span class="absolute -top-1 -right-1 bg-rose-500 text-white text-[10px] font-bold w-5 h-5 rounded-full flex items-center justify-center shadow-md animate-pulse">2</span>
                    </button>
                    
                    <div id="notificationDropdown" class="absolute right-0 mt-3 w-80 bg-white rounded-3xl shadow-2xl border border-slate-200 hidden z-50 overflow-hidden text-left">
                        <div class="p-4 border-b border-slate-100 flex items-center justify-between">
                            <h4 class="font-bold text-sm text-brand-500 font-display">Notificações</h4>
                            <button onclick="markAllNotificationsRead()" class="text-xs text-innozza-inclusao font-semibold hover:underline">Marcar como lidas</button>
                        </div>
                        <div class="divide-y divide-slate-100 max-h-96 overflow-y-auto">
                            <div class="p-4 hover:bg-slate-50 transition cursor-pointer">
                                <h5 class="font-bold text-xs text-brand-500">Seu cadastro foi aprovado.</h5>
                                <p class="text-[11px] text-slate-600 mt-0.5">Sua documentação PCD foi analisada e aprovada.</p>
                            </div>
                            <div class="p-4 hover:bg-slate-50 transition cursor-pointer">
                                <h5 class="font-bold text-xs text-brand-500">Sua candidatura foi recebida.</h5>
                                <p class="text-[11px] text-slate-600 mt-0.5">Candidatura para Pessoa Desenvolvedora Front-end Júnior registrada.</p>
                            </div>
                            <div class="p-4 hover:bg-slate-50 transition cursor-pointer">
                                <h5 class="font-bold text-xs text-brand-500">Você foi aprovado no processo seletivo.</h5>
                                <p class="text-[11px] text-slate-600 mt-0.5">Matrícula confirmada em Desenvolvimento Web Full Stack.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="loggedOutAuthButtons" class="flex items-center gap-3">
                    <button onclick="openAuthModal()" class="px-6 py-2.5 text-sm font-medium text-brand-500 hover:bg-slate-100 rounded-full transition flex items-center gap-2 border border-slate-300 shadow-sm">
                        <i class="fa-solid fa-user text-xs text-innozza-inclusao"></i> Entrar
                    </button>
                    <button onclick="openResumeModal()" class="px-6 py-2.5 text-sm font-medium text-white bg-innozza-oportunidade hover:opacity-90 rounded-full transition flex items-center gap-2 shadow-sm">
                        <i class="fa-solid fa-user-plus text-xs"></i> Criar cadastro
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        <!-- Landing View -->
        <div id="view-landing" class="block">
            <!-- Hero Section -->
            <section class="relative overflow-hidden pt-12 pb-16 lg:pt-20 lg:pb-24 bg-innozza-confianca border-b border-brand-600">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                    <div class="grid lg:grid-cols-12 gap-10 items-center">
                        <div class="lg:col-span-7 text-center lg:text-left">
                            <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 text-white text-xs font-semibold mb-4 border border-white/25">
                                <i class="fa-solid fa-sparkles text-innozza-energia"></i> Inclusão que conecta oportunidades, educação e trabalho
                            </span>
                            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight mb-5 text-white font-display">
                                Diferentes trajetórias. <span class="text-innozza-energia">Oportunidades para todos.</span>
                            </h1>
                            <p class="text-sm sm:text-base mb-8 max-w-xl mx-auto lg:mx-0 font-normal leading-relaxed text-slate-200">
                                Uma plataforma que aproxima pessoas com deficiência, empresas e instituições de ensino para criar oportunidades de formação, empregabilidade e inclusão de excelência.
                            </p>
                            
                            <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 mb-4">
                                <a href="#como-funciona" class="px-8 py-3.5 bg-innozza-oportunidade hover:opacity-90 text-white font-medium rounded-full transition flex items-center gap-2 text-sm shadow-md">
                                    <i class="fa-solid fa-compass text-sm"></i> Conhecer a plataforma
                                </a>
                            </div>
                        </div>

                        <!-- Hero Right -->
                        <div class="lg:col-span-5 relative flex justify-center">
                            <div class="w-full max-w-md bg-white/10 border border-white/20 backdrop-blur-md rounded-3xl shadow-xl overflow-hidden text-white">
                                <div class="p-8 flex flex-col items-center justify-center text-center space-y-4">
                                    <img src="img/icon.png" alt="Innozza Icon" class="w-40 h-40 object-contain filter drop-shadow-md rounded-2xl" onerror="this.onerror=null; this.src='https://placehold.co/150x150/0B3A5B/ffffff?text=Innozza';">
                                    <div>
                                        <h3 class="font-bold text-lg font-display text-white">Ecossistema Integrado Innozza</h3>
                                        <p class="text-xs text-slate-300 mt-1">Tecnologia com propósito. Inclusão com resultados.</p>
                                    </div>
                                    <div class="w-full space-y-2 text-xs text-slate-200 pt-2 text-left">
                                        <div class="flex items-start gap-2 bg-white/5 p-3 rounded-2xl border border-white/10">
                                            <i class="fa-solid fa-arrow-right text-innozza-oportunidade mt-0.5"></i>
                                            <span>Pessoa com deficiência → formação → oportunidade → emprego</span>
                                        </div>
                                        <div class="flex items-start gap-2 bg-white/5 p-3 rounded-2xl border border-white/10">
                                            <i class="fa-solid fa-arrow-right text-innozza-oportunidade mt-0.5"></i>
                                            <span>Empresa → financiamento → acompanhamento → contratação</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Como Funciona Section -->
            <section id="como-funciona" class="py-20 bg-white border-b border-slate-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-2xl mb-12">
                        <span class="text-innozza-inclusao font-semibold text-xs uppercase tracking-wider block mb-2"><i class="fa-solid fa-compass"></i> Jornada Integrada</span>
                        <h2 class="text-3xl font-extrabold text-brand-500 font-display">Como funciona</h2>
                        <p class="text-sm text-slate-600 mt-2">Três públicos conectados por um mesmo objetivo: gerar oportunidades reais.</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-brand-50/60 border border-slate-200 hover:border-innozza-inclusao transition shadow-sm overflow-hidden flex flex-col rounded-3xl">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80" alt="Pessoa com deficiência e autonomia" class="w-full h-48 object-cover rounded-t-3xl" onerror="this.onerror=null; this.src='https://placehold.co/600x400/0B3A5B/ffffff?text=Candidatos';">
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="w-12 h-12 bg-innozza-inclusao/10 text-innozza-inclusao flex items-center justify-center text-lg mb-3 border border-innozza-inclusao/20 rounded-2xl">
                                        <i class="fa-solid fa-universal-access"></i>
                                    </div>
                                    <h3 class="font-bold text-base mb-2 text-brand-500 font-display">Pessoa com deficiência</h3>
                                    <p class="text-xs text-slate-600 leading-relaxed">Desenvolvimento, autonomia e acesso a cursos, bolsas e oportunidades profissionais afirmativas.</p>
                                </div>
                                <button onclick="switchView('candidate');" class="mt-4 text-xs font-bold text-innozza-inclusao hover:underline flex items-center gap-1">Acessar painel do candidato <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>

                        <div class="bg-brand-50/60 border border-slate-200 hover:border-innozza-movimento transition shadow-sm overflow-hidden flex flex-col rounded-3xl">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="Empresas parceiras e inclusão" class="w-full h-48 object-cover rounded-t-3xl" onerror="this.onerror=null; this.src='https://placehold.co/600x400/0B3A5B/ffffff?text=Empresas';">
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="w-12 h-12 bg-innozza-movimento/10 text-innozza-movimento flex items-center justify-center text-lg mb-3 border border-innozza-movimento/20 rounded-2xl">
                                        <i class="fa-solid fa-building-user"></i>
                                    </div>
                                    <h3 class="font-bold text-base mb-2 text-brand-500 font-display">Empresas</h3>
                                    <p class="text-xs text-slate-600 leading-relaxed">Talentos, inclusão e fortalecimento de compromissos corporativos e sociais.</p>
                                </div>
                                <button onclick="switchView('company');" class="mt-4 text-xs font-bold text-innozza-movimento hover:underline flex items-center gap-1">Acessar painel corporativo <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>

                        <div class="bg-brand-50/60 border border-slate-200 hover:border-innozza-oportunidade transition shadow-sm overflow-hidden flex flex-col rounded-3xl">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Instituições de ensino" class="w-full h-48 object-cover rounded-t-3xl" onerror="this.onerror=null; this.src='https://placehold.co/600x400/0B3A5B/ffffff?text=Instituicoes';">
                            <div class="p-6 flex-1 flex flex-col justify-between">
                                <div>
                                    <div class="w-12 h-12 bg-innozza-oportunidade/10 text-innozza-oportunidade flex items-center justify-center text-lg mb-3 border border-innozza-oportunidade/20 rounded-2xl">
                                        <i class="fa-solid fa-graduation-cap"></i>
                                    </div>
                                    <h3 class="font-bold text-base mb-2 text-brand-500 font-display">Instituições de ensino</h3>
                                    <p class="text-xs text-slate-600 leading-relaxed">Educação inclusiva, bolsas financiadas e aproximação com o mercado de trabalho.</p>
                                </div>
                                <button onclick="switchView('candidate'); switchStudentTab('cursos');" class="mt-4 text-xs font-bold text-innozza-oportunidade hover:underline flex items-center gap-1">Ver cursos e bolsas <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pilares Section -->
            <section id="pilares" class="py-20 bg-white border-b border-slate-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
                    <span class="text-innozza-diversidade font-semibold text-xs uppercase tracking-wider block mb-2"><i class="fa-solid fa-columns"></i> Fundamentos</span>
                    <h2 class="text-3xl font-extrabold text-brand-500 font-display">Pilares da plataforma</h2>
                    <p class="text-sm text-slate-600 mt-2">Os quatro eixos fundamentais que estruturam todo o ecossistema de inclusão e empregabilidade Innozza.</p>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="relative group h-96 overflow-hidden border border-slate-200 shadow-xl rounded-3xl">
                            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=800&q=80" alt="Empregabilidade" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent"></div>
                            <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                                <div class="w-12 h-12 bg-innozza-oportunidade text-white flex items-center justify-center text-lg mb-3 shadow-md rounded-2xl font-bold">
                                    <i class="fa-solid fa-briefcase"></i>
                                </div>
                                <h3 class="font-bold text-lg mb-2 text-white font-display">Empregabilidade</h3>
                                <p class="text-xs text-slate-100 leading-relaxed font-medium">Vagas afirmativas homologadas e acompanhamento transparente de candidaturas em tempo real.</p>
                            </div>
                        </div>

                        <div class="relative group h-96 overflow-hidden border border-slate-200 shadow-xl rounded-3xl">
                            <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=80" alt="Educação" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent"></div>
                            <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                                <div class="w-12 h-12 bg-innozza-inclusao text-white flex items-center justify-center text-lg mb-3 shadow-md rounded-2xl">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                </div>
                                <h3 class="font-bold text-lg mb-2 text-white font-display">Educação</h3>
                                <p class="text-xs text-slate-100 leading-relaxed font-medium">Catálogo robusto de cursos, bolsas de estudo integrais e trilhas de formação profissional adaptadas.</p>
                            </div>
                        </div>

                        <div class="relative group h-96 overflow-hidden border border-slate-200 shadow-xl rounded-3xl">
                            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80" alt="Serviços para organizações" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent"></div>
                            <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                                <div class="w-12 h-12 bg-innozza-diversidade text-white flex items-center justify-center text-lg mb-3 shadow-md rounded-2xl">
                                    <i class="fa-solid fa-heart-circle-check"></i>
                                </div>
                                <h3 class="font-bold text-lg mb-2 text-white font-display">Serviços para organizações</h3>
                                <p class="text-xs text-slate-100 leading-relaxed font-medium">Consultoria especializada, adequação estrutural e certificação oficial de inclusão para empresas.</p>
                            </div>
                        </div>

                        <div class="relative group h-96 overflow-hidden border border-slate-200 shadow-xl rounded-3xl">
                            <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=800&q=80" alt="Dados e impacto" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent"></div>
                            <div class="absolute inset-0 p-6 flex flex-col justify-end z-10">
                                <div class="w-12 h-12 bg-innozza-movimento text-white flex items-center justify-center text-lg mb-3 shadow-md rounded-2xl">
                                    <i class="fa-solid fa-chart-pie"></i>
                                </div>
                                <h3 class="font-bold text-lg mb-2 text-white font-display">Dados e impacto</h3>
                                <p class="text-xs text-slate-100 leading-relaxed font-medium">Indicadores de inclusão e relatórios analíticos avançados para orientar decisões estratégicas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Soluções Corporativas Section with Professional Wheelchair User Image -->
            <section id="servicos" class="py-20 bg-brand-50/60 border-b border-slate-200">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                        <div>
                            <span class="text-innozza-diversidade font-semibold text-xs uppercase tracking-wider block mb-2"><i class="fa-solid fa-handshake"></i> Soluções Corporativas</span>
                            <h2 class="text-3xl font-extrabold text-brand-500 font-display">Serviços para organizações</h2>
                            <p class="text-sm text-slate-600 mt-2">Empresas e instituições que querem se preparar melhor para receber pessoas com deficiência.</p>
                        </div>
                        <button onclick="switchView('company')" class="mt-4 md:mt-0 px-8 py-3 bg-brand-500 text-white font-medium text-xs hover:bg-brand-600 transition shadow-sm rounded-full">
                            Acessar Painel Corporativo
                        </button>
                    </div>

                    <div class="grid lg:grid-cols-12 gap-10 items-center">
                        <!-- Left: 3 text lines -->
                        <div class="lg:col-span-7 space-y-8">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-innozza-diversidade/10 text-innozza-diversidade flex items-center justify-center text-base border border-innozza-diversidade/20 shrink-0 mt-1 rounded-2xl">
                                    <i class="fa-solid fa-clipboard-check"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-brand-500 font-display">Consultoria para inclusão e acessibilidade</h3>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-1">Diagnóstico completo da maturidade da organização, acessibilidade digital/física e recomendações práticas para inclusão efetiva.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-innozza-inclusao/10 text-innozza-inclusao flex items-center justify-center text-base border border-innozza-inclusao/20 shrink-0 mt-1 rounded-2xl">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-brand-500 font-display">Processo de adequação</h3>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-1">Plano de ação estruturado e acompanhado por etapas até a implementação com equipes multidisciplinares e suporte especializado.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-innozza-energia/10 text-innozza-energia flex items-center justify-center text-base border border-innozza-energia/20 shrink-0 mt-1 rounded-2xl">
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-brand-500 font-display">Certificação Innozza</h3>
                                    <p class="text-xs text-slate-600 leading-relaxed mt-1">Reconhecimento demonstrativo oficial do preparo e compromisso institucional para receber pessoas com deficiência com excelência.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Dedicated Professional Wheelchair User Image -->
                        <div class="lg:col-span-5 relative">
                            <div class="rounded-3xl overflow-hidden border border-slate-200 shadow-xl bg-white">
                                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80" alt="Profissional em cadeira de rodas em ambiente corporativo inclusivo" class="w-full h-96 object-cover rounded-3xl" onerror="this.onerror=null; this.src='https://placehold.co/600x500/0B3A5B/ffffff?text=Inclusao+Innozza';">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Impact Section -->
            <section id="impacto" class="py-20 bg-brand-500 text-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-2xl mb-12">
                        <span class="px-4 py-1.5 bg-white/10 text-innozza-energia text-xs font-semibold uppercase tracking-wider mb-3 inline-block border border-white/20 rounded-full">
                            <i class="fa-solid fa-chart-column mr-1"></i> Dados demonstrativos
                        </span>
                        <h2 class="text-3xl font-extrabold text-white font-display">Impacto</h2>
                        <p class="text-sm text-slate-200 mt-2">Indicadores reais e simulados do ecossistema Innozza em todo o território nacional.</p>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                        <div class="p-6 bg-white/10 border border-white/15 text-center rounded-3xl">
                            <div class="text-3xl font-extrabold text-innozza-energia font-display">1.284</div>
                            <div class="text-xs text-slate-200 mt-1">Pessoas cadastradas</div>
                        </div>
                        <div class="p-6 bg-white/10 border border-white/15 text-center rounded-3xl">
                            <div class="text-3xl font-extrabold text-innozza-inclusao font-display">46</div>
                            <div class="text-xs text-slate-200 mt-1">Empresas participantes</div>
                        </div>
                        <div class="p-6 bg-white/10 border border-white/15 text-center rounded-3xl">
                            <div class="text-3xl font-extrabold text-innozza-movimento font-display">18</div>
                            <div class="text-xs text-slate-200 mt-1">Instituições parceiras</div>
                        </div>
                        <div class="p-6 bg-white/10 border border-white/15 text-center rounded-3xl">
                            <div class="text-3xl font-extrabold text-innozza-oportunidade font-display">312</div>
                            <div class="text-xs text-slate-200 mt-1">Bolsas disponibilizadas</div>
                        </div>
                        <div class="p-6 bg-white/10 border border-white/15 text-center rounded-3xl">
                            <div class="text-3xl font-extrabold text-innozza-diversidade font-display">197</div>
                            <div class="text-xs text-slate-200 mt-1">Pessoas em formação</div>
                        </div>
                        <div class="p-6 bg-white/10 border border-white/15 text-center rounded-3xl">
                            <div class="text-3xl font-extrabold text-innozza-energia font-display">84</div>
                            <div class="text-xs text-slate-200 mt-1">Contratações realizadas</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Candidate Dashboard View -->
        <div id="view-candidate" class="hidden max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="grid lg:grid-cols-12 gap-8">
                <div class="lg:col-span-3">
                    <div class="bg-brand-500 border border-brand-600 p-5 shadow-lg sticky top-28 text-white rounded-3xl flex flex-col justify-between min-h-[500px]">
                        <div>
                            <span class="block text-[10px] uppercase tracking-wider font-bold text-slate-200 mb-3 px-3">ESTUDANTE</span>
                            <nav class="space-y-2 font-display">
                                <button onclick="switchStudentTab('painel')" id="studentNav-painel" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-semibold bg-innozza-oportunidade text-white shadow-md rounded-full border border-brand-600">
                                    <i class="fa-solid fa-table-cells-large text-xs w-4"></i> Painel
                                </button>
                                <button onclick="switchStudentTab('perfil')" id="studentNav-perfil" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-user text-xs w-4 text-innozza-inclusao"></i> Meu perfil
                                </button>
                                <button onclick="switchStudentTab('vagas')" id="studentNav-vagas" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-briefcase text-xs w-4 text-innozza-energia"></i> Vagas
                                </button>
                                <button onclick="switchStudentTab('candidaturas')" id="studentNav-candidaturas" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-file-lines text-xs w-4 text-innozza-oportunidade"></i> Minhas candidaturas
                                </button>
                                <button onclick="switchStudentTab('cursos')" id="studentNav-cursos" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-graduation-cap text-xs w-4 text-innozza-movimento"></i> Cursos e bolsas
                                </button>
                                <button onclick="switchStudentTab('formacao')" id="studentNav-formacao" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-book-open text-xs w-4 text-innozza-diversidade"></i> Minha formação
                                </button>
                                <button onclick="switchStudentTab('vestibular')" id="studentNav-vestibular" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-clipboard-list text-xs w-4 text-innozza-energia"></i> Vestibular
                                </button>
                            </nav>
                        </div>
                        
                        <div class="pt-4 border-t border-white/20 mt-6">
                            <button onclick="logoutUser()" class="w-full flex items-center justify-center gap-2 px-4 py-3 text-xs font-semibold bg-rose-600/80 hover:bg-rose-600 text-white rounded-full transition shadow-sm">
                                <i class="fa-solid fa-right-from-bracket text-xs"></i> Sair da sessão
                            </button>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-9">
                    <div id="studentPage-painel" class="student-page space-y-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-2xl font-extrabold text-brand-500 font-display">Olá, <span id="candidateNameDisplay">Ana Lúcia Ferreira</span>!</h1>
                                <p class="text-xs text-slate-600 mt-1">Acompanhe sua jornada de empregabilidade e cursos inclusivos na Innozza.</p>
                            </div>
                            <button onclick="switchView('landing')" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-medium rounded-full">Voltar ao Início</button>
                        </div>

                        <div id="interviewAlertBox" class="p-5 bg-brand-500 text-white flex items-center justify-between gap-4 shadow-md rounded-3xl">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 bg-white/10 flex items-center justify-center text-innozza-energia rounded-2xl">
                                    <i class="fa-solid fa-bell animate-pulse"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-sm">Entrevista Agendada</h3>
                                    <p class="text-xs text-white/90">A empresa <span id="alertCompanyName" class="underline font-bold text-innozza-energia">TechCorp</span> convidou você para uma entrevista.</p>
                                </div>
                            </div>
                            <button onclick="confirmInterview()" class="px-5 py-2.5 bg-innozza-oportunidade hover:opacity-90 text-white font-bold text-xs rounded-full shadow-sm">Confirmar</button>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="bg-white p-6 border border-slate-200 shadow-sm rounded-3xl">
                                <span class="text-[11px] uppercase tracking-wider font-semibold text-slate-400">Candidaturas Ativas</span>
                                <h3 class="text-2xl font-extrabold text-brand-500 mt-1" id="candidateAppliedCountNum">2</h3>
                            </div>
                            <div class="bg-white p-6 border border-slate-200 shadow-sm rounded-3xl">
                                <span class="text-[11px] uppercase tracking-wider font-semibold text-slate-400">Bolsas / Cursos Ativos</span>
                                <h3 class="text-2xl font-extrabold text-brand-500 mt-1">1</h3>
                            </div>
                            <div class="bg-white p-6 border border-slate-200 shadow-sm rounded-3xl">
                                <span class="text-[11px] uppercase tracking-wider font-semibold text-slate-400">Progresso Geral</span>
                                <h3 class="text-2xl font-extrabold text-brand-500 mt-1">68%</h3>
                            </div>
                        </div>

                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl">
                            <h3 class="font-bold text-sm text-brand-500 mb-4 font-display">Vagas Recomendadas para o seu Perfil</h3>
                            <div class="grid md:grid-cols-2 gap-4" id="recommendedJobsContainer"></div>
                        </div>
                    </div>

                    <div id="studentPage-perfil" class="student-page hidden space-y-6">
                        <div class="grid lg:grid-cols-12 gap-6">
                            <div class="lg:col-span-8 bg-white border border-slate-200 p-6 shadow-sm rounded-3xl">
                                <form onsubmit="handleSaveCandidateProfile(event)" class="space-y-4">
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1">Nome completo</label>
                                        <input type="text" id="modalProfName" required class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white" value="Ana Lúcia Ferreira">
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-xs font-semibold text-slate-700 mb-1">E-mail</label>
                                            <input type="email" id="modalProfEmail" required class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white" value="estudante@demo.com">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-semibold text-slate-700 mb-1">Telefone</label>
                                            <input type="text" id="modalProfPhone" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white" value="(11) 98888-1122">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1">Endereço</label>
                                        <input type="text" id="modalProfAddress" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white" value="Rua das Acácias, 120">
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-xs font-semibold text-slate-700 mb-1">Cidade</label>
                                            <input type="text" id="modalProfCity" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white" value="São Paulo">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-semibold text-slate-700 mb-1">Estado (UF)</label>
                                            <input type="text" id="modalProfState" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white" value="SP">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1">Ocupação atual</label>
                                        <input type="text" id="modalProfOccupation" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white" value="Estudante">
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-xs font-semibold text-slate-700 mb-1">Escolaridade</label>
                                            <select id="modalProfEducation" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">
                                                <option selected>Ensino Superior Incompleto</option>
                                                <option>Ensino Superior Completo</option>
                                                <option>Ensino Médio</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label class="block text-xs font-semibold text-slate-700 mb-1">Tipo de deficiência</label>
                                            <select id="modalProfDisability" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">
                                                <option selected>Deficiência física</option>
                                                <option>Deficiência auditiva</option>
                                                <option>Deficiência visual</option>
                                                <option>Deficiência intelectual</option>
                                                <option>Múltipla</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="pt-4 border-t border-slate-200">
                                        <h4 class="font-bold text-sm text-brand-500 mb-3 font-display">Perfil profissional</h4>
                                        <div class="space-y-4">
                                            <div>
                                                <label class="block text-xs font-semibold text-slate-700 mb-1">Resumo profissional</label>
                                                <textarea id="modalProfSummary" rows="3" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">Profissional em transição para a área de tecnologia, com foco em desenvolvimento web.</textarea>
                                            </div>
                                            <div>
                                                <label class="block text-xs font-semibold text-slate-700 mb-1">Habilidades (separadas por vírgula)</label>
                                                <input type="text" id="modalProfSkills" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white" value="HTML, CSS, JavaScript, Comunicação">
                                            </div>
                                            <div>
                                                <label class="block text-xs font-semibold text-slate-700 mb-1">Currículo</label>
                                                <textarea id="modalProfCV" rows="3" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">Experiência em atendimento ao cliente (3 anos) e suporte administrativo (2 anos). Cursando formação em desenvolvimento web.</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="px-8 py-3 bg-brand-500 text-white font-medium text-xs hover:bg-brand-600 transition rounded-full shadow-sm">Salvar Alterações</button>
                                </form>
                            </div>

                            <div class="lg:col-span-4 space-y-6">
                                <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl space-y-4">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-bold text-slate-700">Situação</span>
                                        <span class="px-3 py-1 bg-emerald-100 text-emerald-800 text-[11px] font-bold rounded-full inline-flex items-center gap-1">
                                            <i class="fa-solid fa-circle text-[8px]"></i> Cadastro aprovado
                                        </span>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1">Tipo de documento</label>
                                        <select class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">
                                            <option selected>CIPCD</option>
                                            <option>Laudo Médico Oficial</option>
                                            <option>RG / CPF</option>
                                        </select>
                                    </div>
                                    <button type="button" onclick="showToast('Documento enviado com sucesso (simulado)')" class="w-full py-2.5 border border-slate-300 hover:bg-slate-50 text-slate-700 text-xs font-medium rounded-full flex items-center justify-center gap-2 transition shadow-sm">
                                        <i class="fa-solid fa-file-arrow-up text-innozza-inclusao"></i> Enviar documento (simulado)
                                    </button>
                                    <div class="p-3 bg-amber-50 border border-amber-200 rounded-2xl text-[11px] text-amber-900 flex items-start gap-2">
                                        <i class="fa-solid fa-circle-info text-amber-600 mt-0.5"></i>
                                        <span>O upload real de arquivos e a validação documental ainda serão definidos; aqui o envio é simulado.</span>
                                    </div>
                                </div>

                                <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl space-y-4">
                                    <h4 class="font-bold text-sm text-brand-500 font-display">Subsídio</h4>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-semibold text-slate-700">Situação</span>
                                        <span class="px-3 py-1 bg-slate-100 text-slate-700 text-[11px] font-bold rounded-full inline-flex items-center gap-1">
                                            <i class="fa-solid fa-circle text-[8px] text-slate-400"></i> Subsídio não solicitado
                                        </span>
                                    </div>
                                    <div class="p-3 bg-amber-50 border border-amber-200 rounded-2xl text-[11px] text-amber-900 flex items-start gap-2">
                                        <i class="fa-solid fa-circle-info text-amber-600 mt-0.5"></i>
                                        <span>Critérios e valores do subsídio são demonstrativos.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="studentPage-vagas" class="student-page hidden space-y-6">
                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl">
                            <h3 class="font-bold text-base text-brand-500 mb-4 font-display">Vagas Afirmativas Disponíveis</h3>
                            <div class="grid md:grid-cols-2 gap-4" id="studentVagasListContainer"></div>
                        </div>
                    </div>

                    <div id="studentPage-candidaturas" class="student-page hidden space-y-6">
                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl">
                            <h3 class="font-bold text-base text-brand-500 mb-4 font-display">Minhas Candidaturas</h3>
                            <div id="candidateAppliedList" class="space-y-3"></div>
                        </div>
                    </div>

                    <div id="studentPage-cursos" class="student-page hidden space-y-6">
                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl space-y-4">
                            <h3 class="font-bold text-base text-brand-500 font-display">Cursos e Bolsas Disponíveis</h3>
                            <p class="text-xs text-slate-600">Explore bolsas de estudos financiadas integralmente por empresas parceiras da Innozza.</p>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="p-5 border border-slate-200 bg-brand-50/50 space-y-2 rounded-3xl">
                                    <span class="text-[10px] bg-innozza-oportunidade text-white px-2.5 py-1 font-bold uppercase rounded-full">Bolsa 100%</span>
                                    <h4 class="font-bold text-sm text-brand-500">Desenvolvimento Web Inclusivo & Acessibilidade</h4>
                                    <p class="text-xs text-slate-600">Financiador: TechCorp • Carga horária: 120h</p>
                                    <button onclick="showToast('Inscrição na bolsa realizada com sucesso!')" class="px-6 py-2.5 bg-brand-500 text-white text-xs font-medium rounded-full shadow-sm">Quero esta bolsa</button>
                                </div>
                                <div class="p-5 border border-slate-200 bg-brand-50/50 space-y-2 rounded-3xl">
                                    <span class="text-[10px] bg-innozza-oportunidade text-white px-2.5 py-1 font-bold uppercase rounded-full">Bolsa 100%</span>
                                    <h4 class="font-bold text-sm text-brand-500">Marketing Digital Acessível & UX</h4>
                                    <p class="text-xs text-slate-600">Financiador: GrowthMedia • Carga horária: 90h</p>
                                    <button onclick="showToast('Inscrição na bolsa realizada com sucesso!')" class="px-6 py-2.5 bg-brand-500 text-white text-xs font-medium rounded-full shadow-sm">Quero esta bolsa</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="studentPage-formacao" class="student-page hidden space-y-6">
                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl">
                            <h3 class="font-bold text-base text-brand-500 mb-4 font-display">Minha Formação & Cursos Ativos</h3>
                            <div class="p-5 border border-slate-200 bg-brand-50/50 space-y-2 rounded-3xl">
                                <h4 class="font-bold text-sm text-brand-500">Desenvolvimento Web Inclusivo & Acessibilidade</h4>
                                <p class="text-xs text-slate-600">Financiamento integral por TechCorp • Conclusão prevista: Dez/2026</p>
                                <div class="w-full bg-slate-200 h-2 mt-2 rounded-full overflow-hidden">
                                    <div class="bg-innozza-oportunidade h-full w-[68%] rounded-full"></div>
                                </div>
                                <p class="text-[11px] text-slate-500 pt-1">Progresso atual: 68% concluído</p>
                            </div>
                        </div>
                    </div>

                    <div id="studentPage-vestibular" class="student-page hidden space-y-6">
                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl space-y-4">
                            <h3 class="font-bold text-base text-brand-500 font-display">Vestibular Inclusivo Innozza</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Inscreva-se no processo seletivo unificado para bolsas de graduação e cursos técnicos parceiros.</p>
                            <div class="p-5 border border-slate-200 bg-brand-50/50 space-y-3 rounded-3xl">
                                <h4 class="font-bold text-xs text-brand-500">Edital 2026/2 - Inclusão Superior</h4>
                                <p class="text-xs text-slate-600">Inscrições abertas até 30 de novembro de 2026. Provas adaptadas e suporte integral.</p>
                                <button onclick="showToast('Inscrição no Vestibular realizada com sucesso!')" class="px-8 py-3 bg-innozza-oportunidade text-white text-xs font-bold rounded-full shadow-sm">Inscrever-me no Vestibular</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Company Dashboard View -->
        <div id="view-company" class="hidden max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="grid lg:grid-cols-12 gap-8">
                <div class="lg:col-span-3">
                    <div class="bg-brand-500 border border-brand-600 p-5 shadow-lg sticky top-28 text-white rounded-3xl flex flex-col justify-between min-h-[500px]">
                        <div>
                            <span class="block text-[10px] uppercase tracking-wider font-bold text-slate-200 mb-3 px-3">Painel Corporativo</span>
                            <nav class="space-y-2 font-display">
                                <button onclick="switchCompanyTab('painel')" id="companyNav-painel" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-semibold bg-innozza-oportunidade text-white shadow-sm rounded-full">
                                    <i class="fa-solid fa-table-cells-large text-xs w-4"></i> Painel Geral
                                </button>
                                <button onclick="switchCompanyTab('vagas')" id="companyNav-vagas" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-briefcase text-xs w-4 text-innozza-energia"></i> Vagas Afirmativas
                                </button>
                                <button onclick="switchCompanyTab('nova-vaga')" id="companyNav-nova-vaga" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-plus-circle text-xs w-4 text-innozza-inclusao"></i> Cadastrar Vaga
                                </button>
                                <button onclick="switchCompanyTab('candidatos')" id="companyNav-candidatos" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-users text-xs w-4 text-innozza-movimento"></i> Analisar Talentos
                                </button>
                                <button onclick="switchCompanyTab('servicos')" id="companyNav-servicos" class="w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition">
                                    <i class="fa-solid fa-shield-halved text-xs w-4 text-innozza-diversidade"></i> Consultoria & Certificação
                                </button>
                            </nav>
                        </div>
                        
                        <div class="pt-4 border-t border-white/20 mt-6">
                            <button onclick="logoutUser()" class="w-full flex items-center justify-center gap-2 px-4 py-3 text-xs font-semibold bg-rose-600/80 hover:bg-rose-600 text-white rounded-full transition shadow-sm">
                                <i class="fa-solid fa-right-from-bracket text-xs"></i> Sair da sessão
                            </button>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-9">
                    <div id="companyPage-painel" class="company-page space-y-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-2xl font-extrabold text-brand-500 font-display">Painel da Empresa (<span id="companyNameHeader">TechCorp</span>)</h1>
                                <p class="text-xs text-slate-600 mt-1">Gerencie suas vagas afirmativas e processos de inclusão PCD.</p>
                            </div>
                            <button onclick="switchView('landing')" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-medium rounded-full">Voltar ao Início</button>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="bg-white p-6 border border-slate-200 shadow-sm rounded-3xl">
                                <span class="text-[11px] uppercase tracking-wider font-semibold text-slate-400">Vagas Ativas</span>
                                <h3 class="text-2xl font-extrabold text-brand-500 mt-1" id="companyActiveJobsCount">6</h3>
                            </div>
                            <div class="bg-white p-6 border border-slate-200 shadow-sm rounded-3xl">
                                <span class="text-[11px] uppercase tracking-wider font-semibold text-slate-400">Candidatos Inscritos</span>
                                <h3 class="text-2xl font-extrabold text-brand-500 mt-1" id="companyTotalApplicantsNum">2</h3>
                            </div>
                            <div class="bg-white p-6 border border-slate-200 shadow-sm rounded-3xl">
                                <span class="text-[11px] uppercase tracking-wider font-semibold text-slate-400">Certificação Innozza</span>
                                <h3 class="text-lg font-bold text-innozza-oportunidade mt-1">Aprovado (Nível Ouro)</h3>
                            </div>
                        </div>

                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl">
                            <h3 class="font-bold text-sm text-brand-500 mb-4">Suas Vagas Recentes</h3>
                            <div class="grid md:grid-cols-2 gap-4" id="companyRecentJobsContainer"></div>
                        </div>
                    </div>

                    <div id="companyPage-vagas" class="company-page hidden space-y-6">
                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="font-bold text-base text-brand-500 font-display">Vagas Afirmativas Publicadas</h3>
                                <button onclick="switchCompanyTab('nova-vaga')" class="px-6 py-2.5 bg-innozza-oportunidade text-white text-xs font-medium rounded-full shadow-sm">Nova Vaga</button>
                            </div>
                            <div class="grid md:grid-cols-2 gap-4" id="companyJobsList"></div>
                        </div>
                    </div>

                    <div id="companyPage-nova-vaga" class="company-page hidden space-y-6">
                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl">
                            <h3 class="font-bold text-base text-brand-500 mb-4 font-display">Cadastrar Nova Vaga Afirmativa</h3>
                            <form onsubmit="handleCreateJobFull(event)" class="space-y-4">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Título da Vaga</label>
                                    <input type="text" id="newJobTitleFull" required placeholder="Ex: Desenvolvedor Front-end Afirmativo PCD" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1">Empresa</label>
                                        <input type="text" id="newJobCompanyFull" required value="TechCorp" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-slate-700 mb-1">Localização</label>
                                        <input type="text" id="newJobLocationFull" required value="São Paulo / Híbrido" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Descrição da Vaga Afirmativa PCD</label>
                                    <textarea id="newJobDescFull" rows="3" required placeholder="Requisitos e apoio à acessibilidade..." class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white"></textarea>
                                </div>
                                <button type="submit" class="px-8 py-3 bg-brand-500 text-white font-medium text-xs hover:bg-brand-600 transition rounded-full shadow-sm">Publicar Vaga</button>
                            </form>
                        </div>
                    </div>

                    <div id="companyPage-candidatos" class="company-page hidden space-y-6">
                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl">
                            <h3 class="font-bold text-base text-brand-500 mb-4 font-display">Candidatos Inscritos</h3>
                            <div class="divide-y divide-slate-200" id="companyCandidatesList"></div>
                        </div>
                    </div>

                    <div id="companyPage-servicos" class="company-page hidden space-y-6">
                        <div class="bg-white border border-slate-200 p-6 shadow-sm rounded-3xl space-y-4">
                            <h3 class="font-bold text-base text-brand-500 font-display">Consultoria, Adequação & Certificação</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Sua empresa está em conformidade com o selo Innozza de Inclusão Plena. Nosso time realiza auditorias semestrais.</p>
                            <button onclick="showToast('Solicitação de consultoria enviada com sucesso!')" class="px-8 py-3 bg-innozza-oportunidade text-white text-xs font-medium rounded-full shadow-sm">Solicitar Nova Auditoria</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modals -->
    <div id="jobModal" class="fixed inset-0 z-50 bg-brand-950/40 backdrop-blur-sm hidden flex items-center justify-center p-4">
        <div class="bg-white max-w-lg w-full p-6 shadow-xl relative border border-slate-200 rounded-3xl">
            <button onclick="closeJobModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 w-8 h-8 bg-slate-100 flex items-center justify-center text-xs rounded-full">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div id="jobModalContent"></div>
        </div>
    </div>

    <div id="authModal" class="fixed inset-0 z-50 bg-brand-950/40 backdrop-blur-sm hidden flex items-center justify-center p-4">
        <div class="bg-white max-w-sm w-full p-6 shadow-xl relative text-center border border-slate-200 rounded-3xl">
            <button onclick="closeAuthModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 w-8 h-8 bg-slate-100 flex items-center justify-center text-xs rounded-full">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="w-12 h-12 bg-innozza-inclusao/10 text-innozza-inclusao flex items-center justify-center text-lg mx-auto mb-3 border border-innozza-inclusao/20 rounded-full">
                <i class="fa-solid fa-right-to-bracket"></i>
            </div>
            <h3 class="text-lg font-bold mb-1 text-brand-500 font-display">Acesso Innozza</h3>
            <p class="text-xs mb-4 text-slate-600">Escolha o painel que deseja acessar.</p>
            <div class="space-y-2.5">
                <button onclick="executeLogin('candidate')" class="w-full py-3 bg-brand-500 text-white font-medium text-xs hover:bg-brand-600 rounded-full shadow-sm">Entrar como Candidato</button>
                <button onclick="executeLogin('company')" class="w-full py-3 bg-innozza-oportunidade text-white font-medium text-xs hover:opacity-90 rounded-full shadow-sm">Entrar como Empresa</button>
            </div>
        </div>
    </div>

    <div id="resumeModal" class="fixed inset-0 z-50 bg-brand-950/40 backdrop-blur-sm hidden flex items-center justify-center p-4">
        <div class="bg-white max-w-md w-full p-6 shadow-xl relative border border-slate-200 rounded-3xl">
            <button onclick="closeResumeModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 w-8 h-8 bg-slate-100 flex items-center justify-center text-xs rounded-full">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <h3 class="text-lg font-bold mb-1 text-brand-500 font-display">Criar Cadastro na Innozza</h3>
            <p class="text-xs mb-4 text-slate-600">Preencha seus dados para iniciar sua jornada inclusiva.</p>
            <div class="space-y-3 text-left">
                <input type="text" id="regName" placeholder="Nome completo" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">
                <input type="email" id="regEmail" placeholder="Seu e-mail" class="w-full px-4 py-2.5 border border-slate-300 text-sm rounded-2xl bg-white">
                <button onclick="executeRegister()" class="w-full py-3 bg-innozza-oportunidade text-white font-medium text-xs hover:opacity-90 rounded-full shadow-sm">Concluir Cadastro</button>
            </div>
        </div>
    </div>

    <div id="toast" class="fixed bottom-6 right-6 z-50 transform translate-y-20 opacity-0 transition-all duration-300 bg-brand-900 text-white px-5 py-3 shadow-lg flex items-center gap-2.5 text-xs font-medium border border-brand-800 rounded-full">
        <i class="fa-solid fa-circle-check text-innozza-oportunidade text-sm"></i>
        <span id="toastMsg">Ação realizada com sucesso!</span>
    </div>

    <!-- Footer -->
    <footer class="border-t border-slate-200 bg-white">
        <div class="mx-auto grid max-w-7xl gap-8 px-4 py-12 md:grid-cols-4">
            <div class="md:col-span-2">
                <div class="flex items-center gap-2 mb-3">
                    <img src="img/logo.png" alt="Innozza Logo" class="h-8 w-auto object-contain" onerror="this.onerror=null; this.src='https://placehold.co/150x40/0B3A5B/ffffff?text=Innozza';">
                </div>
                <p class="text-xs text-slate-600 max-w-sm leading-relaxed">Plataforma de inclusão, formação educacional e empregabilidade de pessoas com deficiência. Todos os dados exibidos servem para demonstração.</p>
            </div>
            <div>
                <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-3">Plataforma</h2>
                <ul class="space-y-2 text-xs text-slate-600">
                    <li><a href="#como-funciona" class="hover:text-brand-500">Como funciona</a></li>
                    <li><a href="#servicos" class="hover:text-brand-500">Serviços para organizações</a></li>
                    <li><a href="#impacto" class="hover:text-brand-500">Dados e impacto</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-3">Acesso</h2>
                <ul class="space-y-2 text-xs text-slate-600">
                    <li><a href="#" onclick="openAuthModal()" class="hover:text-brand-500">Entrar</a></li>
                    <li><a href="#" onclick="openResumeModal()" class="hover:text-brand-500">Criar cadastro</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-100 py-4 text-center text-xs text-slate-400">
            Innozza &copy; 2026. Todos os direitos reservados.
        </div>
    </footer>

    <script>
        let jobsData = [
            { id: 1, title: 'Estágio em Desenvolvimento Afirmativo PCD', company: 'TechCorp', category: 'Tecnologia', location: 'São Paulo (Híbrido)', salary: 'R$ 2.200', desc: 'Vaga afirmativa PCD para estudantes de tecnologia com foco em desenvolvimento web acessível.', applicants: 12, status: 'Em Análise' },
            { id: 2, title: 'Analista de Marketing Digital Jr PCD', company: 'GrowthMedia', category: 'Marketing', location: 'Remoto', salary: 'R$ 2.500', desc: 'Gestão de campanhas inclusivas e acessibilidade digital para profissionais PCD.', applicants: 8, status: 'Ativa' },
            { id: 3, title: 'Finanças Corporativas & Bolsas PCD', company: 'CapitalInvest', category: 'Finanças', location: 'Rio de Janeiro', salary: 'R$ 2.000', desc: 'Apoio em modelagem financeira e programa de bolsas corporativas afirmativas PCD.', applicants: 15, status: 'Entrevista Agendada' }
        ];

        let isLoggedIn = false;

        window.onload = function() {
            renderJobs(jobsData);
            renderCandidateApplied();
            renderRecommendedJobs();
            renderStudentVagasPage();
            renderCompanyJobs();
            renderCompanyCandidates();
            renderCompanyRecentJobs();
        };

        function switchView(viewName) {
            document.getElementById('view-landing').classList.add('hidden');
            document.getElementById('view-candidate').classList.add('hidden');
            document.getElementById('view-company').classList.add('hidden');

            if (viewName === 'landing') {
                document.getElementById('view-landing').classList.remove('hidden');
            } else if (viewName === 'candidate') {
                document.getElementById('view-candidate').classList.remove('hidden');
                switchStudentTab('painel');
            } else if (viewName === 'company') {
                document.getElementById('view-company').classList.remove('hidden');
                switchCompanyTab('painel');
            }
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function switchStudentTab(tab) {
            document.querySelectorAll('.student-page').forEach(p => p.classList.add('hidden'));
            const targetPage = document.getElementById(`studentPage-${tab}`);
            if (targetPage) targetPage.classList.remove('hidden');
            
            ['painel', 'perfil', 'vagas', 'candidaturas', 'cursos', 'formacao', 'vestibular'].forEach(t => {
                const btn = document.getElementById(`studentNav-${t}`);
                if (!btn) return;
                if (t === tab) {
                    btn.className = 'w-full flex items-center gap-3 px-4 py-3 text-xs font-semibold bg-innozza-oportunidade text-white shadow-md rounded-full border border-brand-600';
                } else {
                    btn.className = 'w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition';
                }
            });
        }

        function switchCompanyTab(tab) {
            document.querySelectorAll('.company-page').forEach(p => p.classList.add('hidden'));
            const targetPage = document.getElementById(`companyPage-${tab}`);
            if (targetPage) targetPage.classList.remove('hidden');
            
            ['painel', 'vagas', 'nova-vaga', 'candidatos', 'servicos'].forEach(t => {
                const btn = document.getElementById(`companyNav-${t}`);
                if (!btn) return;
                if (t === tab) {
                    btn.className = 'w-full flex items-center gap-3 px-4 py-3 text-xs font-semibold bg-innozza-oportunidade text-white shadow-sm rounded-full';
                } else {
                    btn.className = 'w-full flex items-center gap-3 px-4 py-3 text-xs font-medium hover:bg-white/10 text-slate-200 rounded-full transition';
                }
            });
        }

        function renderJobs(jobs) {
            const container = document.getElementById('recommendedJobsContainer');
            if (!container) return;
            container.innerHTML = jobs.map(j => `
                <div class="p-5 border border-slate-200 bg-white rounded-3xl shadow-sm">
                    <h4 class="font-bold text-xs text-brand-500">${j.title}</h4>
                    <p class="text-[11px] text-slate-500 mt-1">${j.company} • ${j.location}</p>
                    <button onclick="openJobModal(${j.id})" class="mt-3 px-5 py-2.5 bg-slate-100 text-slate-700 text-xs font-medium rounded-full hover:bg-slate-200 transition">Ver Detalhes</button>
                </div>
            `).join('');
        }

        function renderRecommendedJobs() { renderJobs(jobsData); }
        function renderStudentVagasPage() {
            const container = document.getElementById('studentVagasListContainer');
            if (!container) return;
            container.innerHTML = jobsData.map(j => `
                <div class="p-5 border border-slate-200 bg-white rounded-3xl shadow-sm">
                    <h4 class="font-bold text-xs text-brand-500">${j.title}</h4>
                    <p class="text-[11px] text-slate-500 mt-1">${j.company} • ${j.salary}</p>
                    <button onclick="showToast('Candidatura enviada para ${j.company}!')" class="mt-3 px-5 py-2.5 bg-innozza-oportunidade text-white text-xs font-medium rounded-full shadow-sm hover:opacity-90">Candidatar-se</button>
                </div>
            `).join('');
        }

        function renderCandidateApplied() {
            const container = document.getElementById('candidateAppliedList');
            if (!container) return;
            container.innerHTML = `
                <div class="p-4 bg-brand-50/50 border border-slate-200 text-xs flex justify-between items-center rounded-3xl">
                    <span>Estágio em Desenvolvimento Afirmativo PCD (TechCorp)</span>
                    <span class="text-innozza-oportunidade font-bold">Em Análise</span>
                </div>
            `;
        }

        function renderCompanyJobs() {
            const container = document.getElementById('companyJobsList');
            if (!container) return;
            container.innerHTML = jobsData.map(j => `
                <div class="p-5 border border-slate-200 bg-white rounded-3xl shadow-sm">
                    <h4 class="font-bold text-xs text-brand-500">${j.title}</h4>
                    <p class="text-[11px] text-slate-500 mt-1">${j.applicants} candidatos inscritos</p>
                </div>
            `).join('');
        }

        function renderCompanyRecentJobs() {
            const container = document.getElementById('companyRecentJobsContainer');
            if (!container) return;
            container.innerHTML = jobsData.slice(0, 2).map(j => `
                <div class="p-4 border border-slate-200 bg-brand-50/50 rounded-3xl">
                    <h4 class="font-bold text-xs text-brand-500">${j.title}</h4>
                    <p class="text-[11px] text-slate-500">${j.location}</p>
                </div>
            `).join('');
        }

        function renderCompanyCandidates() {
            const container = document.getElementById('companyCandidatesList');
            if (!container) return;
            container.innerHTML = `
                <div class="p-4 flex justify-between items-center text-xs">
                    <div>
                        <strong>Ana Lúcia Ferreira</strong>
                        <p class="text-slate-500">Desenvolvimento Web Inclusivo • Fucape</p>
                    </div>
                    <button onclick="triggerInterviewAlert('TechCorp')" class="px-5 py-2.5 bg-innozza-oportunidade text-white font-medium rounded-full shadow-sm hover:opacity-90">Agendar Entrevista</button>
                </div>
            `;
        }

        function openJobModal(id) {
            const j = jobsData.find(x => x.id === id);
            document.getElementById('jobModalContent').innerHTML = `
                <h3 class="font-bold text-base text-brand-500 font-display mb-1">${j.title}</h3>
                <p class="text-xs text-slate-500 mb-3">${j.company} • ${j.location}</p>
                <p class="text-xs text-slate-700 leading-relaxed mb-4">${j.desc}</p>
                <button onclick="closeJobModal(); showToast('Candidatura realizada com sucesso!');" class="w-full py-3 bg-innozza-oportunidade text-white text-xs font-bold rounded-full shadow-sm hover:opacity-90">Candidatar-se à Vaga</button>
            `;
            document.getElementById('jobModal').classList.remove('hidden');
        }

        function closeJobModal() { document.getElementById('jobModal').classList.add('hidden'); }
        function openAuthModal() { document.getElementById('authModal').classList.remove('hidden'); }
        function closeAuthModal() { document.getElementById('authModal').classList.add('hidden'); }
        function openResumeModal() { document.getElementById('resumeModal').classList.remove('hidden'); }
        function closeResumeModal() { document.getElementById('resumeModal').classList.add('hidden'); }

        function executeLogin(type) {
            closeAuthModal();
            isLoggedIn = true;
            document.getElementById('notificationBellWrapper').classList.remove('hidden');
            document.getElementById('loggedOutAuthButtons').classList.add('hidden');

            if (type === 'candidate') switchView('candidate');
            else switchView('company');
            showToast('Login realizado com sucesso!');
        }

        function executeRegister() {
            closeResumeModal();
            isLoggedIn = true;
            const name = document.getElementById('regName').value || 'Ana Lúcia Ferreira';
            document.getElementById('candidateNameDisplay').innerText = name;
            
            document.getElementById('notificationBellWrapper').classList.remove('hidden');
            document.getElementById('loggedOutAuthButtons').classList.add('hidden');

            switchView('candidate');
            showToast('Cadastro realizado com sucesso na Innozza!');
        }

        function logoutUser() {
            isLoggedIn = false;
            document.getElementById('notificationBellWrapper').classList.add('hidden');
            document.getElementById('loggedOutAuthButtons').classList.remove('hidden');
            switchView('landing');
            showToast('Sessão encerrada com sucesso.');
        }

        function toggleNotificationDropdown() {
            const dropdown = document.getElementById('notificationDropdown');
            dropdown.classList.toggle('hidden');
        }

        function markAllNotificationsRead() {
            showToast('Todas as notificações foram marcadas como lidas');
            document.getElementById('notificationDropdown').classList.add('hidden');
        }

        function triggerInterviewAlert(comp) {
            document.getElementById('alertCompanyName').innerText = comp;
            document.getElementById('interviewAlertBox').classList.remove('hidden');
            showToast('Convite de entrevista enviado ao candidato!');
        }

        function confirmInterview() {
            showToast('Entrevista confirmada com sucesso!');
            document.getElementById('interviewAlertBox').classList.add('hidden');
        }

        function handleSaveCandidateProfile(e) {
            e.preventDefault();
            showToast('Perfil atualizado com sucesso!');
        }

        function handleCreateJobFull(e) {
            e.preventDefault();
            showToast('Nova vaga afirmativa PCD publicada com sucesso!');
            switchCompanyTab('vagas');
        }

        function showToast(msg) {
            const t = document.getElementById('toast');
            document.getElementById('toastMsg').innerText = msg;
            t.classList.remove('translate-y-20', 'opacity-0');
            setTimeout(() => t.classList.add('translate-y-20', 'opacity-0'), 3500);
        }
    </script>
</body>
</html>