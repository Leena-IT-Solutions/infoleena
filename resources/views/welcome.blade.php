<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Infoleena - The Unified Operating System for Your Business</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-[#F8FAFC] text-slate-900 font-sans" x-data="{ activeTab: 'payroll', billingCycle: 'monthly' }">

        <!-- Sticky Glassmorphic Header -->
        <header class="sticky top-0 z-50 w-full border-b border-slate-200/80 bg-white/80 backdrop-blur-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <!-- Logo -->
                    <div class="flex items-center gap-2">
                        <a href="#" class="flex items-center gap-1.5 font-outfit text-2xl font-black tracking-tight text-slate-900">
                            <span>infoleena</span>
                            <span class="h-2 w-2 rounded-full bg-indigo-600"></span>
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                        <a href="#products" class="hover:text-indigo-600 transition-colors">Products</a>
                        <a href="#architecture" class="hover:text-indigo-600 transition-colors">How it Works</a>
                        <a href="#pricing" class="hover:text-indigo-600 transition-colors">Pricing</a>
                        <a href="#faq" class="hover:text-indigo-600 transition-colors">FAQs</a>
                    </nav>

                    <!-- CTAs -->
                    <div class="flex items-center gap-4">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-slate-700 hover:text-indigo-600 transition-colors">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-700 hover:text-indigo-600 transition-colors">Sign In</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="hidden sm:inline-flex items-center justify-center rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 hover:shadow transition-all duration-200">
                                        Get Started Free
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <main>
            <!-- Hero Section -->
            <section class="relative overflow-hidden pt-12 pb-20 sm:pt-16 sm:pb-24 lg:pt-20 lg:pb-32">
                <!-- Soft background glow -->
                <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-40"></div>
                <div class="absolute top-0 right-1/4 -z-10 h-[400px] w-[400px] rounded-full bg-indigo-100/50 blur-3xl"></div>
                <div class="absolute bottom-0 left-1/4 -z-10 h-[300px] w-[300px] rounded-full bg-emerald-50/70 blur-3xl"></div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="lg:grid lg:grid-cols-12 lg:gap-12 items-center">
                        
                        <!-- Hero Left: Text -->
                        <div class="lg:col-span-6 space-y-8 text-center lg:text-left">
                            <div class="inline-flex items-center gap-2.5 rounded-full bg-indigo-50 px-3 py-1.5 text-xs font-semibold text-indigo-700 ring-1 ring-inset ring-indigo-700/10">
                                <span class="flex h-1.5 w-1.5 rounded-full bg-indigo-600"></span>
                                New: Seamless Multi-Subdomain Setup
                            </div>
                            
                            <h1 class="font-outfit text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-slate-900 leading-[1.1]">
                                The Operating System <br class="hidden sm:inline" />
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">for Your Business.</span>
                            </h1>
                            
                            <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                                Simplify your operations with a unified suite of powerful digital products. From Payroll and Restaurant POS to Real-time Fleet Tracking and School ERP—manage everything under one roof, running on your own custom subdomains.
                            </p>
                            
                            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                                <a href="#products" class="w-full sm:w-auto inline-flex items-center justify-center rounded-2xl bg-indigo-600 px-7 py-4 text-base font-semibold text-white shadow-md hover:bg-indigo-500 hover:shadow-lg transition-all duration-200">
                                    Explore the Suite
                                </a>
                                <a href="#pricing" class="w-full sm:w-auto inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-7 py-4 text-base font-semibold text-slate-700 shadow-sm hover:bg-slate-50 transition-all duration-200">
                                    Calculate Your Plan
                                </a>
                            </div>

                            <!-- Trust Badges -->
                            <div class="pt-4 border-t border-slate-200/80">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-3">Trusted by growing enterprises worldwide</p>
                                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-x-8 gap-y-4 opacity-60 grayscale">
                                    <span class="font-outfit font-bold text-lg text-slate-600">LEENA-TECH</span>
                                    <span class="font-outfit font-bold text-lg text-slate-600">NEXUS CORP</span>
                                    <span class="font-outfit font-bold text-lg text-slate-600">ACME GLOBAL</span>
                                    <span class="font-outfit font-bold text-lg text-slate-600">APEX LEARNING</span>
                                </div>
                            </div>
                        </div>

                        <!-- Hero Right: Interactive Dashboard Mockup -->
                        <div class="mt-16 lg:mt-0 lg:col-span-6 relative">
                            <div class="relative mx-auto max-w-[540px] lg:max-w-none">
                                <!-- Decorative colored circles -->
                                <div class="absolute -top-6 -left-6 w-12 h-12 rounded-full bg-rose-400/20 blur-lg"></div>
                                <div class="absolute -bottom-10 -right-6 w-20 h-20 rounded-full bg-emerald-400/20 blur-lg"></div>
                                
                                <!-- Main Dashboard Card -->
                                <div class="rounded-3xl border border-slate-200 bg-white p-4 shadow-xl ring-1 ring-slate-900/5">
                                    <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                                        <div class="flex gap-1.5">
                                            <span class="w-3 h-3 rounded-full bg-rose-400"></span>
                                            <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                                            <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                                        </div>
                                        <div class="rounded-lg bg-slate-100 px-3 py-1 text-xs font-medium text-slate-500 flex items-center gap-1">
                                            <svg class="h-3.5 w-3.5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                            <span>workspace.infoleena.com</span>
                                        </div>
                                        <div class="w-6"></div>
                                    </div>
                                    
                                    <!-- Inner mockup grid -->
                                    <div class="grid grid-cols-3 gap-4 pt-4">
                                        <!-- Mockup Sidebar -->
                                        <div class="col-span-1 border-r border-slate-100 pr-3 space-y-4">
                                            <div class="h-8 rounded-lg bg-indigo-50 flex items-center px-2.5 gap-2">
                                                <div class="h-4 w-4 rounded bg-indigo-600"></div>
                                                <div class="h-2 w-12 rounded bg-indigo-300"></div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="h-2 w-16 rounded bg-slate-200"></div>
                                                <div class="h-2 w-14 rounded bg-slate-100"></div>
                                                <div class="h-2 w-12 rounded bg-slate-100"></div>
                                                <div class="h-2 w-16 rounded bg-slate-100"></div>
                                            </div>
                                            <div class="pt-4 border-t border-slate-100 space-y-2">
                                                <div class="h-2 w-10 rounded bg-slate-200"></div>
                                                <div class="h-2.5 w-full rounded bg-emerald-50 border border-emerald-100 flex items-center justify-between px-1">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                                    <span class="w-6 h-1 rounded bg-emerald-200"></span>
                                                </div>
                                                <div class="h-2.5 w-full rounded bg-rose-50 border border-rose-100 flex items-center justify-between px-1">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                                                    <span class="w-6 h-1 rounded bg-rose-200"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Mockup Main Area -->
                                        <div class="col-span-2 space-y-4">
                                            <div class="flex items-center justify-between">
                                                <div class="space-y-1">
                                                    <div class="h-3.5 w-24 rounded bg-slate-800"></div>
                                                    <div class="h-2 w-16 rounded bg-slate-400"></div>
                                                </div>
                                                <div class="h-6 w-14 rounded-full bg-indigo-600/10 text-[10px] text-indigo-700 font-bold flex items-center justify-center">Active</div>
                                            </div>
                                            
                                            <!-- Chart Area -->
                                            <div class="h-24 rounded-2xl bg-slate-50 border border-slate-100 p-2.5 flex flex-col justify-between">
                                                <div class="flex justify-between items-center">
                                                    <div class="h-2 w-10 bg-slate-300 rounded"></div>
                                                    <div class="h-3 w-14 bg-slate-200 rounded"></div>
                                                </div>
                                                <div class="flex items-end gap-1.5 h-12 pt-2">
                                                    <div class="w-full bg-indigo-200 rounded-t h-4"></div>
                                                    <div class="w-full bg-indigo-200 rounded-t h-8"></div>
                                                    <div class="w-full bg-indigo-300 rounded-t h-6"></div>
                                                    <div class="w-full bg-indigo-600 rounded-t h-12"></div>
                                                    <div class="w-full bg-indigo-400 rounded-t h-10"></div>
                                                    <div class="w-full bg-indigo-500 rounded-t h-11"></div>
                                                </div>
                                            </div>
                                            
                                            <!-- Stats Row -->
                                            <div class="grid grid-cols-2 gap-3">
                                                <div class="p-2 border border-slate-100 rounded-xl space-y-1.5">
                                                    <div class="h-1.5 w-10 bg-slate-400 rounded"></div>
                                                    <div class="h-3 w-16 bg-slate-800 rounded"></div>
                                                </div>
                                                <div class="p-2 border border-slate-100 rounded-xl space-y-1.5">
                                                    <div class="h-1.5 w-8 bg-slate-400 rounded"></div>
                                                    <div class="h-3 w-12 bg-emerald-600 rounded"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Interactive Product Showcase Section -->
            <section id="products" class="py-20 sm:py-28 bg-white border-y border-slate-200/60">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16 sm:mb-20">
                        <h2 class="font-outfit text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">
                            One Platform. Four Powerful Apps.
                        </h2>
                        <p class="text-base sm:text-lg text-slate-600">
                            Choose the exact apps your business needs today. Launch each instantly on a dedicated subdomain under your account.
                        </p>
                    </div>

                    <!-- Alpine.js Tabs & Grid Layout -->
                    <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                        
                        <!-- Left: App Selection Cards -->
                        <div class="lg:col-span-5 space-y-4">
                            <!-- Card 1: Payroll -->
                            <button 
                                @click="activeTab = 'payroll'"
                                :class="activeTab === 'payroll' ? 'border-emerald-500 bg-emerald-50/40 ring-1 ring-emerald-500' : 'border-slate-200 hover:border-slate-300 bg-white'"
                                class="w-full text-left p-5 rounded-2xl border transition-all duration-200 flex items-start gap-4 group shadow-sm">
                                <div :class="activeTab === 'payroll' ? 'bg-emerald-500 text-white' : 'bg-emerald-100 text-emerald-600 group-hover:bg-emerald-200'" class="p-3 rounded-xl transition-colors">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-outfit font-bold text-lg text-slate-950">Payroll Management</h3>
                                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-700 uppercase">payroll.</span>
                                    </div>
                                    <p class="text-sm text-slate-600 leading-relaxed">
                                        Automate salaries, taxes, and employee benefits with precision and full compliance.
                                    </p>
                                </div>
                            </button>

                            <!-- Card 2: Restaurant POS -->
                            <button 
                                @click="activeTab = 'pos'"
                                :class="activeTab === 'pos' ? 'border-rose-500 bg-rose-50/40 ring-1 ring-rose-500' : 'border-slate-200 hover:border-slate-300 bg-white'"
                                class="w-full text-left p-5 rounded-2xl border transition-all duration-200 flex items-start gap-4 group shadow-sm">
                                <div :class="activeTab === 'pos' ? 'bg-rose-500 text-white' : 'bg-rose-100 text-rose-600 group-hover:bg-rose-200'" class="p-3 rounded-xl transition-colors">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-outfit font-bold text-lg text-slate-950">Restaurant POS</h3>
                                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-rose-100 text-rose-700 uppercase">pos.</span>
                                    </div>
                                    <p class="text-sm text-slate-600 leading-relaxed">
                                        Accelerate table service, manage digital ordering, kitchen workflows, and billing.
                                    </p>
                                </div>
                            </button>

                            <!-- Card 3: Location Tracker -->
                            <button 
                                @click="activeTab = 'tracker'"
                                :class="activeTab === 'tracker' ? 'border-indigo-500 bg-indigo-50/40 ring-1 ring-indigo-500' : 'border-slate-200 hover:border-slate-300 bg-white'"
                                class="w-full text-left p-5 rounded-2xl border transition-all duration-200 flex items-start gap-4 group shadow-sm">
                                <div :class="activeTab === 'tracker' ? 'bg-indigo-500 text-white' : 'bg-indigo-100 text-indigo-600 group-hover:bg-indigo-200'" class="p-3 rounded-xl transition-colors">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-outfit font-bold text-lg text-slate-950">Location Tracker</h3>
                                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-indigo-100 text-indigo-700 uppercase">tracker.</span>
                                    </div>
                                    <p class="text-sm text-slate-600 leading-relaxed">
                                        Monitor fleet deliveries, set up geofencing, and optimize routes in real-time.
                                    </p>
                                </div>
                            </button>

                            <!-- Card 4: School ERP -->
                            <button 
                                @click="activeTab = 'school'"
                                :class="activeTab === 'school' ? 'border-violet-500 bg-violet-50/40 ring-1 ring-violet-500' : 'border-slate-200 hover:border-slate-300 bg-white'"
                                class="w-full text-left p-5 rounded-2xl border transition-all duration-200 flex items-start gap-4 group shadow-sm">
                                <div :class="activeTab === 'school' ? 'bg-violet-500 text-white' : 'bg-violet-100 text-violet-600 group-hover:bg-violet-200'" class="p-3 rounded-xl transition-colors">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <div class="space-y-1.5">
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-outfit font-bold text-lg text-slate-950">School Management ERP</h3>
                                        <span class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-violet-100 text-violet-700 uppercase">school.</span>
                                    </div>
                                    <p class="text-sm text-slate-600 leading-relaxed">
                                        Manage student lifecycle, staff records, fee payments, and online assessments.
                                    </p>
                                </div>
                            </button>
                        </div>

                        <!-- Right: High-Fidelity Mockup Screen Showcase -->
                        <div class="lg:col-span-7 bg-slate-50 border border-slate-200/80 rounded-3xl p-6 shadow-md relative min-h-[420px] flex flex-col justify-between">
                            
                            <!-- Tab Content: Payroll -->
                            <div x-show="activeTab === 'payroll'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">
                                <div class="flex items-center justify-between border-b border-slate-200/60 pb-4">
                                    <div>
                                        <span class="text-xs font-semibold text-emerald-600 uppercase tracking-wider">App Preview</span>
                                        <h4 class="font-outfit text-xl font-bold text-slate-900">Leena Payroll</h4>
                                    </div>
                                    <span class="text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-100 rounded-lg px-2.5 py-1">demo.payroll.infoleena.com</span>
                                </div>
                                
                                <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-sm space-y-4">
                                    <div class="flex justify-between items-center">
                                        <div class="h-2.5 w-24 bg-slate-200 rounded"></div>
                                        <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">Running June Cycle</span>
                                    </div>
                                    
                                    <div class="grid grid-cols-3 gap-4">
                                        <div class="p-3 bg-slate-50 border border-slate-100 rounded-xl text-center">
                                            <p class="text-[10px] text-slate-500 font-medium uppercase">Total Disbursed</p>
                                            <p class="text-base font-extrabold text-slate-900 mt-1">$45,280</p>
                                        </div>
                                        <div class="p-3 bg-slate-50 border border-slate-100 rounded-xl text-center">
                                            <p class="text-[10px] text-slate-500 font-medium uppercase">Employees Paid</p>
                                            <p class="text-base font-extrabold text-slate-900 mt-1">32</p>
                                        </div>
                                        <div class="p-3 bg-slate-50 border border-slate-100 rounded-xl text-center">
                                            <p class="text-[10px] text-slate-500 font-medium uppercase">Taxes Accrued</p>
                                            <p class="text-base font-extrabold text-slate-900 mt-1">$8,450</p>
                                        </div>
                                    </div>

                                    <div class="space-y-2.5 pt-2">
                                        <div class="flex justify-between items-center text-sm py-2 border-b border-slate-100">
                                            <span class="font-medium text-slate-700">Alice Smith (Marketing)</span>
                                            <span class="font-semibold text-slate-900">$4,500.00</span>
                                        </div>
                                        <div class="flex justify-between items-center text-sm py-2 border-b border-slate-100">
                                            <span class="font-medium text-slate-700">Bob Johnson (Engineering)</span>
                                            <span class="font-semibold text-slate-900">$6,200.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content: POS -->
                            <div x-show="activeTab === 'pos'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">
                                <div class="flex items-center justify-between border-b border-slate-200/60 pb-4">
                                    <div>
                                        <span class="text-xs font-semibold text-rose-600 uppercase tracking-wider">App Preview</span>
                                        <h4 class="font-outfit text-xl font-bold text-slate-900">Leena Restaurant POS</h4>
                                    </div>
                                    <span class="text-xs font-medium bg-rose-50 text-rose-700 border border-rose-100 rounded-lg px-2.5 py-1">bistro.pos.infoleena.com</span>
                                </div>
                                
                                <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-sm space-y-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-bold text-slate-800">Active Tables & Orders</span>
                                        <span class="text-xs text-rose-600 font-bold bg-rose-50 px-2 py-0.5 rounded">14 Open Orders</span>
                                    </div>

                                    <div class="grid grid-cols-4 gap-3">
                                        <div class="p-2 border border-rose-200 bg-rose-50/30 rounded-xl text-center">
                                            <p class="text-xs font-bold text-slate-800">T1</p>
                                            <p class="text-[10px] text-rose-600 font-bold mt-1">$84.50</p>
                                        </div>
                                        <div class="p-2 border border-slate-200 rounded-xl text-center">
                                            <p class="text-xs font-bold text-slate-500">T2</p>
                                            <p class="text-[10px] text-slate-400 mt-1">Empty</p>
                                        </div>
                                        <div class="p-2 border border-rose-200 bg-rose-50/30 rounded-xl text-center">
                                            <p class="text-xs font-bold text-slate-800">T3</p>
                                            <p class="text-[10px] text-rose-600 font-bold mt-1">$122.00</p>
                                        </div>
                                        <div class="p-2 border border-emerald-200 bg-emerald-50/30 rounded-xl text-center">
                                            <p class="text-xs font-bold text-slate-800">T4</p>
                                            <p class="text-[10px] text-emerald-600 font-bold mt-1">Paid</p>
                                        </div>
                                    </div>

                                    <div class="pt-2">
                                        <p class="text-xs font-semibold text-slate-500 mb-2">Live Order Stream</p>
                                        <div class="bg-slate-50 rounded-xl p-3 border border-slate-100 flex items-center justify-between text-xs">
                                            <div class="flex gap-2 items-center">
                                                <span class="h-2 w-2 rounded-full bg-amber-500 animate-pulse"></span>
                                                <span class="font-bold text-slate-800">Order #4092</span>
                                                <span class="text-slate-500">2x Double Cheeseburger, 1x Truffle Fries</span>
                                            </div>
                                            <span class="font-bold text-slate-700">Kitchen</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content: Tracker -->
                            <div x-show="activeTab === 'tracker'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">
                                <div class="flex items-center justify-between border-b border-slate-200/60 pb-4">
                                    <div>
                                        <span class="text-xs font-semibold text-indigo-600 uppercase tracking-wider">App Preview</span>
                                        <h4 class="font-outfit text-xl font-bold text-slate-900">Leena Location Tracker</h4>
                                    </div>
                                    <span class="text-xs font-medium bg-indigo-50 text-indigo-700 border border-indigo-100 rounded-lg px-2.5 py-1">fleet.tracker.infoleena.com</span>
                                </div>
                                
                                <div class="bg-white rounded-2xl border border-slate-200/80 p-4 shadow-sm space-y-4">
                                    <!-- Map Placeholder Graphic -->
                                    <div class="h-40 rounded-xl bg-slate-100 border border-slate-200/60 relative overflow-hidden flex items-center justify-center">
                                        <!-- Grid/Map lines -->
                                        <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:1.5rem_1.5rem] opacity-40"></div>
                                        <!-- Route -->
                                        <svg class="absolute inset-0 w-full h-full" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M 50,80 Q 180,20 280,110 T 450,40" fill="none" stroke="#6366F1" stroke-width="4" stroke-dasharray="8 4" />
                                        </svg>
                                        <!-- Vehicle pins -->
                                        <div class="absolute top-[50px] left-[150px] flex flex-col items-center">
                                            <span class="bg-indigo-600 text-white text-[9px] font-bold px-1.5 py-0.5 rounded-md shadow">Van 1</span>
                                            <div class="w-3.5 h-3.5 bg-indigo-600 border-2 border-white rounded-full shadow animate-bounce mt-1"></div>
                                        </div>
                                        <div class="absolute bottom-[40px] right-[120px] flex flex-col items-center">
                                            <span class="bg-emerald-600 text-white text-[9px] font-bold px-1.5 py-0.5 rounded-md shadow">Van 2 (Delivered)</span>
                                            <div class="w-3.5 h-3.5 bg-emerald-600 border-2 border-white rounded-full shadow mt-1"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex justify-between items-center text-xs text-slate-500">
                                        <div class="flex gap-4">
                                            <span>🟢 4 Active Vehicles</span>
                                            <span>🔴 0 Alerts</span>
                                        </div>
                                        <span class="font-medium text-indigo-600">Open Map Dashboard →</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Tab Content: School -->
                            <div x-show="activeTab === 'school'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" class="space-y-6">
                                <div class="flex items-center justify-between border-b border-slate-200/60 pb-4">
                                    <div>
                                        <span class="text-xs font-semibold text-violet-600 uppercase tracking-wider">App Preview</span>
                                        <h4 class="font-outfit text-xl font-bold text-slate-900">Leena School ERP</h4>
                                    </div>
                                    <span class="text-xs font-medium bg-violet-50 text-violet-700 border border-violet-100 rounded-lg px-2.5 py-1">academy.school.infoleena.com</span>
                                </div>
                                
                                <div class="bg-white rounded-2xl border border-slate-200/80 p-5 shadow-sm space-y-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm font-bold text-slate-800">Academic Year Overview</span>
                                        <span class="text-xs text-violet-600 font-bold bg-violet-50 px-2 py-0.5 rounded">Term 2</span>
                                    </div>

                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="p-3 border border-slate-100 bg-slate-50 rounded-xl">
                                            <p class="text-[10px] text-slate-500 font-semibold uppercase">Total Enrollment</p>
                                            <p class="text-lg font-extrabold text-slate-900 mt-1">1,240</p>
                                            <span class="text-[9px] text-emerald-600 font-bold">↑ 8% from last year</span>
                                        </div>
                                        <div class="p-3 border border-slate-100 bg-slate-50 rounded-xl">
                                            <p class="text-[10px] text-slate-500 font-semibold uppercase">Fee Collection Rate</p>
                                            <p class="text-lg font-extrabold text-slate-900 mt-1">94.2%</p>
                                            <div class="w-full bg-slate-200 h-1.5 rounded-full mt-2">
                                                <div class="bg-violet-600 h-1.5 rounded-full" style="width: 94%"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-y-2">
                                        <p class="text-xs font-semibold text-slate-500">Quick Actions</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="px-2.5 py-1 text-xs font-medium border border-slate-200 hover:border-slate-300 rounded-lg cursor-pointer bg-white">Add Student</span>
                                            <span class="px-2.5 py-1 text-xs font-medium border border-slate-200 hover:border-slate-300 rounded-lg cursor-pointer bg-white">Publish Report Card</span>
                                            <span class="px-2.5 py-1 text-xs font-medium border border-slate-200 hover:border-slate-300 rounded-lg cursor-pointer bg-white">Generate Fee Invoice</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Shared bottom element -->
                            <div class="mt-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pt-4 border-t border-slate-200/60">
                                <p class="text-sm text-slate-500">
                                    Each app operates with dedicated databases, customizable dashboards, and full security isolation.
                                </p>
                                <a href="#pricing" class="inline-flex items-center justify-center gap-1 text-sm font-semibold text-indigo-600 hover:text-indigo-500 whitespace-nowrap">
                                    View Subscription Cost
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How It Works Section -->
            <section id="architecture" class="py-20 sm:py-28 bg-[#F8FAFC]">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16 sm:mb-20">
                        <h2 class="font-outfit text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">
                            Engineered for Seamless Scale.
                        </h2>
                        <p class="text-base sm:text-lg text-slate-600">
                            Our unified infrastructure gives your business the isolated security it needs with the centralized ease it deserves.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm space-y-4 flex flex-col justify-between">
                            <div class="space-y-4">
                                <div class="h-12 w-12 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center font-outfit text-xl font-bold">
                                    1
                                </div>
                                <h3 class="font-outfit font-bold text-xl text-slate-950">Select Your Domain</h3>
                                <p class="text-sm text-slate-600 leading-relaxed">
                                    Choose your main workspace subdomain (e.g., `yourcompany.infoleena.com`). This becomes your central dashboard portal.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-slate-100">
                                <span class="text-xs font-semibold text-indigo-600 bg-indigo-50 px-2 py-1 rounded">Unique Identity</span>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm space-y-4 flex flex-col justify-between">
                            <div class="space-y-4">
                                <div class="h-12 w-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center font-outfit text-xl font-bold">
                                    2
                                </div>
                                <h3 class="font-outfit font-bold text-xl text-slate-950">Provision Instantly</h3>
                                <p class="text-sm text-slate-600 leading-relaxed">
                                    Activate apps. They are instantly set up on individual subdomains like `payroll.yourcompany.com` or `yourcompany.payroll.infoleena.com`.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-slate-100">
                                <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded">No-Code Deployment</span>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="bg-white p-8 rounded-3xl border border-slate-200/80 shadow-sm space-y-4 flex flex-col justify-between">
                            <div class="space-y-4">
                                <div class="h-12 w-12 rounded-2xl bg-violet-50 text-violet-600 flex items-center justify-center font-outfit text-xl font-bold">
                                    3
                                </div>
                                <h3 class="font-outfit font-bold text-xl text-slate-950">Single Sign-On (SSO)</h3>
                                <p class="text-sm text-slate-600 leading-relaxed">
                                    Your team logs in once at the central portal and switches between all active apps with a single click, keeping data fully synchronized.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-slate-100">
                                <span class="text-xs font-semibold text-violet-600 bg-violet-50 px-2 py-1 rounded">Unified Access</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Dynamic Pricing Calculator Section -->
            <section id="pricing" class="py-20 sm:py-28 bg-white border-y border-slate-200/60" x-data="{
                payroll: true,
                pos: false,
                tracker: true,
                school: false,
                
                prices: {
                    monthly: { payroll: 29, pos: 49, tracker: 19, school: 79 },
                    yearly: { payroll: 24, pos: 39, tracker: 15, school: 64 }
                },
                
                get selectedCount() {
                    return (this.payroll ? 1 : 0) + (this.pos ? 1 : 0) + (this.tracker ? 1 : 0) + (this.school ? 1 : 0);
                },
                
                get discountPercentage() {
                    let count = this.selectedCount;
                    if (count === 2) return 10;
                    if (count === 3) return 20;
                    if (count >= 4) return 30;
                    return 0;
                },
                
                get totalRawPrice() {
                    let cycle = this.billingCycle === 'monthly' ? 'monthly' : 'yearly';
                    let total = 0;
                    if (this.payroll) total += this.prices[cycle].payroll;
                    if (this.pos) total += this.prices[cycle].pos;
                    if (this.tracker) total += this.prices[cycle].tracker;
                    if (this.school) total += this.prices[cycle].school;
                    return total;
                },
                
                get totalDiscountAmount() {
                    return Math.round(this.totalRawPrice * (this.discountPercentage / 100));
                },
                
                get finalPrice() {
                    return this.totalRawPrice - this.totalDiscountAmount;
                }
            }">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                        <h2 class="font-outfit text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">
                            Build Your Perfect Bundle.
                        </h2>
                        <p class="text-base sm:text-lg text-slate-600">
                            Only pay for the apps you actually use. Bundle multiple products together to unlock up to a 30% discount.
                        </p>
                        
                        <!-- Billing Cycle Toggle -->
                        <div class="inline-flex items-center gap-3 bg-slate-100 p-1 rounded-xl mt-6 border border-slate-200/40">
                            <button 
                                @click="billingCycle = 'monthly'"
                                :class="billingCycle === 'monthly' ? 'bg-white shadow text-indigo-600' : 'text-slate-600 hover:text-slate-800'"
                                class="px-4 py-2 text-sm font-semibold rounded-lg transition-all duration-200">
                                Monthly Billing
                            </button>
                            <button 
                                @click="billingCycle = 'yearly'"
                                :class="billingCycle === 'yearly' ? 'bg-white shadow text-indigo-600' : 'text-slate-600 hover:text-slate-800'"
                                class="px-4 py-2 text-sm font-semibold rounded-lg transition-all duration-200 flex items-center gap-1.5">
                                <span>Yearly Billing</span>
                                <span class="bg-indigo-100 text-indigo-700 text-[10px] font-bold px-1.5 py-0.5 rounded-full">Save 20%</span>
                            </button>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-12 gap-8 items-stretch">
                        <!-- Left: App Toggles -->
                        <div class="lg:col-span-7 space-y-4">
                            <!-- Toggle Payroll -->
                            <div 
                                @click="payroll = !payroll"
                                :class="payroll ? 'border-indigo-500 ring-1 ring-indigo-500 bg-indigo-50/10' : 'border-slate-200 hover:border-slate-300 bg-white'"
                                class="p-5 rounded-2xl border transition-all duration-200 cursor-pointer flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-4">
                                    <div :class="payroll ? 'bg-emerald-500 text-white' : 'bg-slate-100 text-slate-400'" class="p-2.5 rounded-xl transition-colors">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-outfit font-bold text-base text-slate-900">Leena Payroll</h3>
                                        <p class="text-xs text-slate-500">Automate salaries & payroll tax cycles</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="text-right">
                                        <span class="font-outfit font-bold text-lg text-slate-900" x-text="billingCycle === 'monthly' ? '$29' : '$24'"></span>
                                        <span class="text-xs text-slate-500">/mo</span>
                                    </div>
                                    <div class="w-5 h-5 rounded-md border flex items-center justify-center transition-all"
                                         :class="payroll ? 'bg-indigo-600 border-indigo-600 text-white' : 'border-slate-300'">
                                        <svg x-show="payroll" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Toggle Restaurant POS -->
                            <div 
                                @click="pos = !pos"
                                :class="pos ? 'border-indigo-500 ring-1 ring-indigo-500 bg-indigo-50/10' : 'border-slate-200 hover:border-slate-300 bg-white'"
                                class="p-5 rounded-2xl border transition-all duration-200 cursor-pointer flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-4">
                                    <div :class="pos ? 'bg-rose-500 text-white' : 'bg-slate-100 text-slate-400'" class="p-2.5 rounded-xl transition-colors">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-outfit font-bold text-base text-slate-900">Leena Restaurant POS</h3>
                                        <p class="text-xs text-slate-500">Table service, kitchen workflow, digital billing</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="text-right">
                                        <span class="font-outfit font-bold text-lg text-slate-900" x-text="billingCycle === 'monthly' ? '$49' : '$39'"></span>
                                        <span class="text-xs text-slate-500">/mo</span>
                                    </div>
                                    <div class="w-5 h-5 rounded-md border flex items-center justify-center transition-all"
                                         :class="pos ? 'bg-indigo-600 border-indigo-600 text-white' : 'border-slate-300'">
                                        <svg x-show="pos" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Toggle Location Tracker -->
                            <div 
                                @click="tracker = !tracker"
                                :class="tracker ? 'border-indigo-500 ring-1 ring-indigo-500 bg-indigo-50/10' : 'border-slate-200 hover:border-slate-300 bg-white'"
                                class="p-5 rounded-2xl border transition-all duration-200 cursor-pointer flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-4">
                                    <div :class="tracker ? 'bg-indigo-500 text-white' : 'bg-slate-100 text-slate-400'" class="p-2.5 rounded-xl transition-colors">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-outfit font-bold text-base text-slate-900">Leena Location Tracker</h3>
                                        <p class="text-xs text-slate-500">Real-time GPS fleet tracking & geofencing</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="text-right">
                                        <span class="font-outfit font-bold text-lg text-slate-900" x-text="billingCycle === 'monthly' ? '$19' : '$15'"></span>
                                        <span class="text-xs text-slate-500">/mo</span>
                                    </div>
                                    <div class="w-5 h-5 rounded-md border flex items-center justify-center transition-all"
                                         :class="tracker ? 'bg-indigo-600 border-indigo-600 text-white' : 'border-slate-300'">
                                        <svg x-show="tracker" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Toggle School ERP -->
                            <div 
                                @click="school = !school"
                                :class="school ? 'border-indigo-500 ring-1 ring-indigo-500 bg-indigo-50/10' : 'border-slate-200 hover:border-slate-300 bg-white'"
                                class="p-5 rounded-2xl border transition-all duration-200 cursor-pointer flex items-center justify-between shadow-sm">
                                <div class="flex items-center gap-4">
                                    <div :class="school ? 'bg-violet-500 text-white' : 'bg-slate-100 text-slate-400'" class="p-2.5 rounded-xl transition-colors">
                                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-outfit font-bold text-base text-slate-900">Leena School ERP</h3>
                                        <p class="text-xs text-slate-500">Student databases, admissions, fee payments</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="text-right">
                                        <span class="font-outfit font-bold text-lg text-slate-900" x-text="billingCycle === 'monthly' ? '$79' : '$64'"></span>
                                        <span class="text-xs text-slate-500">/mo</span>
                                    </div>
                                    <div class="w-5 h-5 rounded-md border flex items-center justify-center transition-all"
                                         :class="school ? 'bg-indigo-600 border-indigo-600 text-white' : 'border-slate-300'">
                                        <svg x-show="school" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Pricing Summary Card -->
                        <div class="lg:col-span-5">
                            <div class="bg-[#F8FAFC] border border-slate-200 p-8 rounded-3xl sticky top-24 space-y-6 flex flex-col justify-between h-full min-h-[380px]">
                                <div class="space-y-6">
                                    <h3 class="font-outfit font-bold text-xl text-slate-900">Order Summary</h3>
                                    
                                    <!-- App Count & Raw total -->
                                    <div class="space-y-3">
                                        <div class="flex justify-between text-sm text-slate-600">
                                            <span>Selected Products</span>
                                            <span class="font-bold text-slate-900" x-text="selectedCount + ' App(s)'"></span>
                                        </div>
                                        <div class="flex justify-between text-sm text-slate-600">
                                            <span>Subtotal</span>
                                            <span class="font-semibold text-slate-900" x-text="'$' + totalRawPrice + '/mo'"></span>
                                        </div>
                                        
                                        <!-- Bundle Discount -->
                                        <div class="flex justify-between text-sm text-emerald-600 bg-emerald-50/50 p-2.5 rounded-xl border border-emerald-100/50" x-show="discountPercentage > 0">
                                            <span class="flex items-center gap-1">
                                                🎉 Bundle Discount (<span x-text="discountPercentage"></span>%)
                                            </span>
                                            <span class="font-bold" x-text="'-$' + totalDiscountAmount + '/mo'"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-6 pt-6 border-t border-slate-200">
                                    <!-- Final Total Price -->
                                    <div class="flex items-baseline justify-between">
                                        <span class="text-sm font-semibold text-slate-800">Total Due</span>
                                        <div class="text-right">
                                            <span class="font-outfit text-4xl font-black text-slate-900" x-text="'$' + finalPrice"></span>
                                            <span class="text-sm font-semibold text-slate-500" x-text="billingCycle === 'monthly' ? '/month' : '/month (billed annually)'"></span>
                                        </div>
                                    </div>

                                    <!-- CTA -->
                                    <button 
                                        :disabled="selectedCount === 0"
                                        :class="selectedCount === 0 ? 'bg-slate-300 cursor-not-allowed text-slate-500' : 'bg-indigo-600 text-white hover:bg-indigo-500 shadow-md'"
                                        class="w-full py-4 rounded-2xl font-semibold transition-all duration-200 text-center">
                                        Create Bundle Account
                                    </button>
                                    <p class="text-center text-xs text-slate-500">14-day free trial on all selected apps • No credit card required</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section id="faq" class="py-20 sm:py-28 bg-[#F8FAFC]" x-data="{ openFaq: null }">
                <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center space-y-4 mb-16">
                        <h2 class="font-outfit text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">
                            Frequently Asked Questions
                        </h2>
                        <p class="text-base sm:text-lg text-slate-600">
                            Everything you need to know about the Infoleena platform, subdomains, and billing.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <!-- FAQ 1 -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-sm">
                            <button 
                                @click="openFaq = (openFaq === 1 ? null : 1)"
                                class="w-full flex items-center justify-between p-5 text-left font-semibold text-slate-800 hover:text-indigo-600 transition-colors">
                                <span>How do the product subdomains work?</span>
                                <svg :class="openFaq === 1 ? 'rotate-180 text-indigo-600' : 'text-slate-400'" class="h-5 w-5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="openFaq === 1" x-collapse class="px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                                When you create an account, you choose a main organization workspace (e.g., `acme.infoleena.com`). Once you activate a product, like Payroll, it is instantly provisioned and made available on a secure subdomain dedicated to that application (e.g., `acme.payroll.infoleena.com`).
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-sm">
                            <button 
                                @click="openFaq = (openFaq === 2 ? null : 2)"
                                class="w-full flex items-center justify-between p-5 text-left font-semibold text-slate-800 hover:text-indigo-600 transition-colors">
                                <span>Can I buy just one app, or do I need the whole suite?</span>
                                <svg :class="openFaq === 2 ? 'rotate-180 text-indigo-600' : 'text-slate-400'" class="h-5 w-5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="openFaq === 2" x-collapse class="px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                                Infoleena is completely modular. You can subscribe to a single app (like Restaurant POS) on its own. If you decide to add more apps later (e.g. Payroll or Location Tracker), you can activate them instantly, and our system will automatically apply a bundle discount to your subscription.
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-sm">
                            <button 
                                @click="openFaq = (openFaq === 3 ? null : 3)"
                                class="w-full flex items-center justify-between p-5 text-left font-semibold text-slate-800 hover:text-indigo-600 transition-colors">
                                <span>Is my data shared across the different subdomains?</span>
                                <svg :class="openFaq === 3 ? 'rotate-180 text-indigo-600' : 'text-slate-400'" class="h-5 w-5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="openFaq === 3" x-collapse class="px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                                Yes, where it makes sense! While each application's core transactional data is securely isolated (e.g., your school ERP gradebooks are separate from your restaurant POS menus), common resources like your employee directory, user accounts, and billing profiles are unified under your central Single Sign-On (SSO) system.
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl overflow-hidden shadow-sm">
                            <button 
                                @click="openFaq = (openFaq === 4 ? null : 4)"
                                class="w-full flex items-center justify-between p-5 text-left font-semibold text-slate-800 hover:text-indigo-600 transition-colors">
                                <span>Can I use my own custom domains?</span>
                                <svg :class="openFaq === 4 ? 'rotate-180 text-indigo-600' : 'text-slate-400'" class="h-5 w-5 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="openFaq === 4" x-collapse class="px-5 pb-5 text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-3">
                                Yes! In our premium plans, you can map your own custom domains (e.g., `payroll.yourcompany.com` or `school.youracademy.org`) to replace the default `infoleena.com` subdomains.
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Final CTA Section -->
            <section class="py-20 sm:py-24 bg-white relative overflow-hidden">
                <div class="absolute inset-0 -z-10 bg-[radial-gradient(30rem_30rem_at_bottom,theme(colors.indigo.50),white)] opacity-70"></div>
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-8">
                    <h2 class="font-outfit text-3xl sm:text-5xl font-black tracking-tight text-slate-900">
                        Ready to Transform Your Operations?
                    </h2>
                    <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto">
                        Get started with a 14-day free trial. Setup takes less than two minutes. Choose your apps, configure your subdomain, and launch.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="#pricing" class="w-full sm:w-auto inline-flex items-center justify-center rounded-2xl bg-indigo-600 px-8 py-4 text-base font-semibold text-white shadow-md hover:bg-indigo-500 hover:shadow-lg transition-all duration-200">
                            Build Your Bundle
                        </a>
                        <a href="{{ route('register') }}" class="w-full sm:w-auto inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-8 py-4 text-base font-semibold text-slate-700 shadow-sm hover:bg-slate-50 transition-all duration-200">
                            Create Free Account
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-slate-900 text-slate-400 py-12 sm:py-16 border-t border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-5 gap-8 md:gap-12 pb-12 border-b border-slate-800">
                    
                    <!-- Brand Column -->
                    <div class="col-span-2 space-y-4">
                        <a href="#" class="flex items-center gap-1.5 font-outfit text-2xl font-black tracking-tight text-white">
                            <span>infoleena</span>
                            <span class="h-2 w-2 rounded-full bg-indigo-500"></span>
                        </a>
                        <p class="text-sm text-slate-400 leading-relaxed max-w-sm">
                            A modular operating system of integrated business tools designed to help you automate operations, track assets, and scale effortlessly.
                        </p>
                    </div>

                    <!-- Products -->
                    <div class="space-y-3">
                        <h4 class="text-xs font-semibold text-white uppercase tracking-wider">Products</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#products" @click="activeTab = 'payroll'" class="hover:text-white transition-colors">Leena Payroll</a></li>
                            <li><a href="#products" @click="activeTab = 'pos'" class="hover:text-white transition-colors">Leena POS</a></li>
                            <li><a href="#products" @click="activeTab = 'tracker'" class="hover:text-white transition-colors">Leena Tracker</a></li>
                            <li><a href="#products" @click="activeTab = 'school'" class="hover:text-white transition-colors">School ERP</a></li>
                        </ul>
                    </div>

                    <!-- Platform -->
                    <div class="space-y-3">
                        <h4 class="text-xs font-semibold text-white uppercase tracking-wider">Platform</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#architecture" class="hover:text-white transition-colors">Subdomain Routing</a></li>
                            <li><a href="#pricing" class="hover:text-white transition-colors">Pricing Structure</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Security & Isolation</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Custom Domains</a></li>
                        </ul>
                    </div>

                    <!-- Company -->
                    <div class="space-y-3">
                        <h4 class="text-xs font-semibold text-white uppercase tracking-wider">Company</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom bar -->
                <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs">
                    <p>&copy; {{ date('Y') }} Leena IT Solutions. All rights reserved.</p>
                    <p class="flex gap-4">
                        <a href="#" class="hover:text-white transition-colors">Status</a>
                        <a href="#" class="hover:text-white transition-colors">Security</a>
                        <a href="#" class="hover:text-white transition-colors">API Docs</a>
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>
