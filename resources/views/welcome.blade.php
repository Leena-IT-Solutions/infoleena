<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Welcome to Infoleena, a modern, secure, and lightning-fast platform for intelligent information synthesis and content management, powered by Laravel and Livewire.">

        <title>Infoleena - Next-Gen Information Platform</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-12px); }
            }
            @keyframes pulse-glow {
                0%, 100% { opacity: 0.4; transform: scale(1); }
                50% { opacity: 0.7; transform: scale(1.05); }
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            .animate-float-delayed {
                animation: float 6s ease-in-out infinite;
                animation-delay: 3s;
            }
            .animate-pulse-glow {
                animation: pulse-glow 8s ease-in-out infinite;
            }
        </style>
    </head>
    <body class="antialiased bg-zinc-950 text-zinc-300 font-sans relative min-h-screen overflow-x-hidden selection:bg-purple-600 selection:text-white">
        
        <!-- Animated Background Glow Blobs -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-indigo-600/10 rounded-full blur-3xl animate-pulse-glow"></div>
            <div class="absolute top-1/3 right-1/4 w-[30rem] h-[30rem] bg-purple-600/10 rounded-full blur-3xl animate-pulse-glow" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-80 h-80 bg-pink-600/5 rounded-full blur-3xl animate-pulse-glow" style="animation-delay: 4s;"></div>
        </div>

        <div class="relative z-10 min-h-screen flex flex-col justify-between">
            
            <!-- Sticky Glassmorphic Header -->
            <header class="sticky top-0 w-full backdrop-blur-md bg-zinc-950/50 border-b border-white/5 z-50">
                <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
                    <a href="/" id="brand-logo" class="flex items-center gap-2 group focus:outline-none">
                        <span class="w-9 h-9 rounded-xl bg-gradient-to-tr from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:scale-105 transition-transform duration-300">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </span>
                        <span class="text-xl font-bold tracking-tight text-white font-outfit">
                            Info<span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-500 group-hover:text-purple-400 transition-colors duration-300">leena</span>
                        </span>
                    </a>

                    @if (Route::has('login'))
                        <livewire:welcome.navigation />
                    @endif
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-grow flex flex-col justify-center items-center py-16 px-6 max-w-7xl mx-auto w-full">
                
                <!-- Hero Section -->
                <section class="text-center max-w-3xl mx-auto mb-20 relative">
                    <!-- Premium Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 text-xs font-semibold text-purple-300 tracking-wide mb-8 shadow-inner shadow-white/5 animate-float">
                        <span class="w-1.5 h-1.5 rounded-full bg-purple-400 animate-ping"></span>
                        Introducing Infoleena Platform
                    </div>

                    <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight text-white mb-6 font-outfit leading-tight">
                        Welcome to <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-500 filter drop-shadow-[0_0_30px_rgba(168,85,247,0.3)]">Infoleena</span>
                    </h1>

                    <p class="text-lg md:text-xl text-zinc-400 mb-10 leading-relaxed font-light">
                        A next-generation digital ecosystem designed to consolidate, manage, and secure your information. Experience blazing-fast search, robust authentication, and intuitive design workflows.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                id="hero-dashboard-btn"
                                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-400 hover:via-purple-400 hover:to-pink-400 rounded-full shadow-[0_0_25px_rgba(168,85,247,0.35)] hover:shadow-[0_0_35px_rgba(168,85,247,0.55)] transition-all duration-300 transform hover:-translate-y-1 focus:outline-none"
                            >
                                Go to Dashboard
                                <svg class="w-5 h-5 ml-2 -mr-1 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        @else
                            <a
                                href="{{ route('register') }}"
                                id="hero-register-btn"
                                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:from-indigo-400 hover:via-purple-400 hover:to-pink-400 rounded-full shadow-[0_0_25px_rgba(168,85,247,0.35)] hover:shadow-[0_0_35px_rgba(168,85,247,0.55)] transition-all duration-300 transform hover:-translate-y-1 focus:outline-none"
                            >
                                Start Your Journey
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                            <a
                                href="{{ route('login') }}"
                                id="hero-login-btn"
                                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-zinc-300 hover:text-white bg-white/5 hover:bg-white/10 border border-white/15 hover:border-white/25 rounded-full transition-all duration-300 backdrop-blur-sm transform hover:-translate-y-1 focus:outline-none"
                            >
                                Sign In
                            </a>
                        @endauth
                    </div>
                </section>

                <!-- Interactive Visual Separator -->
                <div class="w-full max-w-4xl mx-auto mb-20 animate-float-delayed pointer-events-none">
                    <div class="relative rounded-2xl overflow-hidden border border-white/10 shadow-[0_0_50px_rgba(99,102,241,0.15)] aspect-[16/8] bg-zinc-900/40 backdrop-blur-md flex items-center justify-center">
                        <!-- Abstract Dashboard Art -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500/5 via-purple-500/5 to-transparent"></div>
                        <div class="w-3/4 h-3/4 rounded-xl border border-white/5 bg-zinc-950/60 p-6 flex flex-col gap-4 shadow-2xl">
                            <div class="flex items-center justify-between border-b border-white/5 pb-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-3 h-3 rounded-full bg-rose-500/50"></div>
                                    <div class="w-3 h-3 rounded-full bg-amber-500/50"></div>
                                    <div class="w-3 h-3 rounded-full bg-emerald-500/50"></div>
                                </div>
                                <div class="w-32 h-2.5 rounded-full bg-white/10"></div>
                            </div>
                            <div class="grid grid-cols-3 gap-4 flex-grow">
                                <div class="col-span-2 rounded-lg bg-white/5 p-4 flex flex-col gap-3">
                                    <div class="w-1/2 h-3 rounded-full bg-indigo-400/40"></div>
                                    <div class="w-full h-2 rounded-full bg-white/5"></div>
                                    <div class="w-5/6 h-2 rounded-full bg-white/5"></div>
                                    <div class="w-2/3 h-2 rounded-full bg-white/5"></div>
                                </div>
                                <div class="rounded-lg bg-gradient-to-br from-purple-500/10 to-pink-500/10 border border-purple-500/20 p-4 flex flex-col justify-between">
                                    <div class="w-8 h-8 rounded-lg bg-purple-500/20 flex items-center justify-center text-purple-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                                    </div>
                                    <div class="w-full h-3 rounded-full bg-purple-400/30"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section -->
                <section class="w-full mb-10">
                    <h2 class="text-3xl font-bold tracking-tight text-white text-center mb-12 font-outfit">
                        Engineered for High Performance
                    </h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        
                        <!-- Feature 1 -->
                        <div id="feature-synthesis" class="group relative rounded-2xl p-8 bg-white/5 hover:bg-white/10 border border-white/5 hover:border-indigo-500/30 transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-black/10">
                            <div class="absolute inset-0 bg-gradient-to-b from-indigo-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-inner">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-3 font-outfit group-hover:text-indigo-300 transition-colors duration-300">Intelligent Synthesis</h3>
                            <p class="text-zinc-400 text-sm leading-relaxed">
                                Consolidate complex and disparate datasets into clean, readable, and queryable search models built for instant retrieval.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div id="feature-livewire" class="group relative rounded-2xl p-8 bg-white/5 hover:bg-white/10 border border-white/5 hover:border-purple-500/30 transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-black/10">
                            <div class="absolute inset-0 bg-gradient-to-b from-purple-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="w-12 h-12 rounded-xl bg-purple-500/10 text-purple-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-inner">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-3 font-outfit group-hover:text-purple-300 transition-colors duration-300">Livewire Core</h3>
                            <p class="text-zinc-400 text-sm leading-relaxed">
                                Feel the speed of a single-page application with none of the complexity. Experience reactive data binding and zero-latency user flows.
                            </p>
                        </div>

                        <!-- Feature 3 -->
                        <div id="feature-security" class="group relative rounded-2xl p-8 bg-white/5 hover:bg-white/10 border border-white/5 hover:border-pink-500/30 transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-black/10">
                            <div class="absolute inset-0 bg-gradient-to-b from-pink-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="w-12 h-12 rounded-xl bg-pink-500/10 text-pink-400 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-inner">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-3 font-outfit group-hover:text-pink-300 transition-colors duration-300">Shielded Security</h3>
                            <p class="text-zinc-400 text-sm leading-relaxed">
                                Rest easy with secure session management, strong encryption defaults, and built-in protection against cross-site security threats.
                            </p>
                        </div>

                    </div>
                </section>
            </main>

            <!-- Footer -->
            <footer id="footer-info" class="border-t border-white/5 py-8 backdrop-blur-sm bg-zinc-950/40 z-10 text-center text-xs text-zinc-500">
                <div class="max-w-7xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <span>Infoleena Platform &bull; v1.0.0</span>
                    <span>Powered by Laravel v{{ Illuminate\Foundation\Application::VERSION }} &bull; PHP v{{ PHP_VERSION }}</span>
                    <span>&copy; 2026 Infoleena. All rights reserved.</span>
                </div>
            </footer>
        </div>
    </body>
</html>
