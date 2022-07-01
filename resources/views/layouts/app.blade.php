<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css') }}" /> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        <style>
            /* This example part of kwd-dashboard see https://kamona-wd.github.io/kwd-dashboard/ */
            /* So here we will write some classes to simulate dark mode and some of tailwind css config in our project */
            :root {
                --light: #edf2f9;
                --dark: #152e4d;
                --darker: #12263f;
            }
    
            .dark .dark\:text-light {
                color: var(--light);
            }
    
            .dark .dark\:bg-dark {
                background-color: var(--dark);
            }
    
            .dark .dark\:bg-darker {
                background-color: var(--darker);
            }
    
            .dark .dark\:text-gray-300 {
                color: #d1d5db;
            }
    
            .dark .dark\:text-indigo-500 {
                color: #6366f1;
            }
    
            .dark .dark\:text-indigo-100 {
                color: #e0e7ff;
            }
    
            .dark .dark\:hover\:text-light:hover {
                color: var(--light);
            }
    
            .dark .dark\:border-indigo-800 {
                border-color: #3730a3;
            }
    
            .dark .dark\:border-indigo-700 {
                border-color: #4338ca;
            }
    
            .dark .dark\:bg-indigo-600 {
                background-color: #4f46e5;
            }
    
            .dark .dark\:hover\:bg-indigo-600:hover {
                background-color: #4f46e5;
            }
    
            .dark .dark\:border-indigo-500 {
                border-color: #6366f1;
            }
    
            .hover\:overflow-y-auto:hover {
                overflow-y: auto;
            }
        </style>

        <div class="min-h-screen bg-gray-100">
            {{-- @livewire('navigation-menu') --}}
            <!-- Page Content -->
            <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark }" @resize.window="watchScreen()">
                {{-- AQUI CAMBIA EL FONDO DEL MENU LATERAL PRINCIPAL --}}
                <div class="flex h-screen antialiased text-gray-400 bg-neutral-800 dark:bg-dark dark:text-light">
                    <!-- Loading screen -->
                    <div x-ref="loading"
                        class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-neutral-800">
                        Cargando Sistema Mecanica.....
                    </div>
        
                    <!--MENU PRINCIPAL -->
                    <!-- Backdrop -->
                    <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-indigo-800 lg:hidden"
                        style="opacity: 0.5" aria-hidden="true"></div>
        
                    <aside x-show="isSidebarOpen" x-transition:enter="transition-all transform duration-300 ease-in-out"
                        x-transition:enter-start="-translate-x-full opacity-0"
                        x-transition:enter-end="translate-x-0 opacity-100"
                        x-transition:leave="transition-all transform duration-300 ease-in-out"
                        x-transition:leave-start="translate-x-0 opacity-100"
                        x-transition:leave-end="-translate-x-full opacity-0" x-ref="sidebar"
                        @keydown.escape="window.innerWidth <= 1024 ? isSidebarOpen = false : ''" tabindex="-1"
                        class="fixed inset-y-0 z-10 flex-shrink-0 w-64 bg-neutral-800 rounded-r-2xl border-r-2 lg:static dark:border-yellow-600 dark:bg-darker focus:outline-none">
                        <div class="flex flex-col h-full">
                            <!-- MENU LATERAL IZQUIERDO -->
                            <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
                                <div class="py-6 flex justify-center">
                                    <img class="w-32 text-center object-cover" src="{{ asset('fotos/mecanica-1.jpg') }}" alt="">
                                </div>
                                <div class="font-bold text-center text-3xl text-yellow-600 pb-5">
                                    MECANICA
                                </div>
                                <!-- Dashboards links -->
                                <div x-data="{ isActive: false, open: false }">
                                    <!-- active & hover classes 'bg-indigo-100 dark:bg-indigo-600' -->
                                    <a href="{{ route('home')}}"
                                        class="flex items-center p-2 text-gray-300 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-yellow-600">
                                        <span aria-hidden="true">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                        </span>
                                        <span class="ml-2 text-sm"> Inicio</span>
                                    </a>
                                    <a href="#" @click="$event.preventDefault(); open = !open"
                                        class="flex items-center p-2 text-gray-300 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-yellow-600"
                                        :class="{ 'bg-indigo-100 dark:bg-yellow-600': isActive || open }" role="button"
                                        aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                        <span aria-hidden="true">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                            </svg>
                                        </span>
                                        
                                        <span class="ml-2 text-sm"> Engranajes Rectos</span>
                                        <span class="ml-auto" aria-hidden="true">
                                            <!-- active class 'rotate-180' -->
                                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </a>
                                    <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                                        <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                        <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                        <a href="{{ route('recto-ingles')}}" role="menuitem"
                                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-200 dark:hover:text-light hover:text-gray-500">
                                            Engranajes Rectos (Ingles) 
                                        </a>
                                        <a href="{{ route('recto-metricos')}}" role="menuitem"
                                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-200 dark:hover:text-light hover:text-gray-500">
                                            Engranajes Rectos (Metricos) 
                                        </a>
                                    </div>
                                </div>
                                <!-- Authentication links -->
                                <div x-data="{ isActive: false, open: false }">
                                    <!-- active & hover classes 'bg-indigo-100 dark:bg-yellow-600' -->
                                    <a href="#" @click="$event.preventDefault(); open = !open"
                                        class="flex items-center p-2 text-gray-300 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-yellow-600"
                                        :class="{ 'bg-indigo-100 dark:bg-yellow-600': isActive || open }" role="button"
                                        aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                        <span aria-hidden="true">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </span>
                                        <span class="ml-2 text-sm"> Engranajes Helicoidales </span>
                                        <span aria-hidden="true" class="ml-auto">
                                            <!-- active class 'rotate-180' -->
                                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </a>
                                    <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                                        <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                        <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                        <a href="{{route('helicoidal-ingles')}}" role="menuitem"
                                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                            Engranajes Helicoidales (Ingles)
                                        </a>
                                        <a href="{{route('helicoidal-metrico')}}" role="menuitem"
                                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                            Engranajes Helicoidales (Metrico)
                                        </a>
                                    </div>
                                </div>

                                <div x-data="{ isActive: false, open: false }">
                                    <!-- active & hover classes 'bg-indigo-100 dark:bg-yellow-600' -->
                                    <a href="#" @click="$event.preventDefault(); open = !open"
                                        class="flex items-center p-2 text-gray-300 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-yellow-600"
                                        :class="{ 'bg-indigo-100 dark:bg-yellow-600': isActive || open }" role="button"
                                        aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                        <span aria-hidden="true">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </span>
                                        <span class="ml-2 text-sm"> Engranajes Conicos </span>
                                        <span aria-hidden="true" class="ml-auto">
                                            <!-- active class 'rotate-180' -->
                                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </a>
                                    <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                                        <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                        <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                        <a href="{{route('conico-ingles')}}" role="menuitem"
                                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                            Engranajes Conicos (Ingles)
                                        </a>
                                        <a href="{{route('conico-metrico')}}" role="menuitem"
                                            class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                            Engranajes Conicos (Metrico)
                                        </a>
                                    </div>
                                </div>        
                                <!-- Layouts links -->
                                {{-- <div x-data="{ isActive: true, open: true }">
                                    <!-- active & hover classes 'bg-indigo-100 dark:bg-yellow-600' -->
                                    <a href="#" @click="$event.preventDefault(); open = !open"
                                        class="flex items-center p-2 text-gray-300 transition-colors rounded-md dark:text-light hover:bg-indigo-100 dark:hover:bg-yellow-600"
                                        :class="{ 'bg-indigo-100 dark:bg-yellow-600': isActive || open }" role="button"
                                        aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                        <span aria-hidden="true">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                            </svg>
                                        </span>
                                        <span class="ml-2 text-sm"> Opcion </span>
                                        <span aria-hidden="true" class="ml-auto">
                                            <!-- active class 'rotate-180' -->
                                            <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </span>
                                    </a>
                                    <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Authentication">
                                        <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                        <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                        <a href="#" role="menuitem"
                                            class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                                            Two Columns Sidebar
                                        </a>
                                    </div>
                                </div> --}}
                            </nav>
                            <!-- PIE DEL SIDEBAR -->
                            <div class="relative flex items-center justify-center flex-shrink-0 px-2 py-4 space-x-4">
                                <!-- BOTON DE BUSCAR -->
                                <button @click="openSearchPanel"
                                    class="block transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100 hover:scale-105 bg-red-600">
                                    <span class="sr-only">Open search panel</span>
                                    {{-- <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg> --}}
                                    <img class="w-12 h-12 rounded-full"
                                            src="{{ asset('fotos/mecanica-1.jpg') }}"
                                            alt="mecanica" />
                                </button>
        
                                {{-- <!-- BOTON DE LA FOTO -->
                                <div class="" x-data="{ open: false }">
                                    <button @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
                                        type="button" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'"
                                        class="block transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100">
                                        <span class="sr-only">User menu</span>
                                        <img class="w-12 h-12 rounded-full"
                                            src="{{ asset('fotos/mecanica-1.jpg') }}"
                                            alt="Ahmed Kamel" />
                                    </button>
        
                                    <!-- User dropdown menu -->
                                    <div x-show="open" x-ref="userMenu" x-transition:enter="transition-all transform ease-out"
                                        x-transition:enter-start="-translate-y-1/2 opacity-0"
                                        x-transition:enter-end="translate-y-0 opacity-100"
                                        x-transition:leave="transition-all transform ease-in"
                                        x-transition:leave-start="translate-y-0 opacity-100"
                                        x-transition:leave-end="-translate-y-1/2 opacity-0" @click.away="open = false"
                                        @keydown.escape="open = false"
                                        class="absolute max-w-xs py-1 bg-white rounded-md shadow-lg min-w-max left-5 right-5 bottom-full ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                                        tabindex="-1" role="menu" aria-orientation="vertical" aria-label="User menu">
                                        <a href="#" role="menuitem"
                                            class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-indigo-600">
                                            Your Profile
                                        </a>
                                        <a href="#" role="menuitem"
                                            class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-indigo-600">
                                            Settings
                                        </a>
                                        <a href="#" role="menuitem"
                                            class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-indigo-600">
                                            Logout
                                        </a>
                                    </div>
                                </div> --}}
        
                               {{--  <!-- BOTON DE CONFIGURACION -->
                                <button @click="openSettingsPanel"
                                    class="p-2 text-indigo-400 transition-colors duration-200 rounded-full bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:bg-indigo-100 dark:focus:bg-indigo-700 focus:ring-indigo-800">
                                    <span class="sr-only">Panel de configuracion dark o Light</span>
                                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </button> --}}
                            </div>
                        </div>
                    </aside>
        
                    <div class="flex flex-col h-screen w-full">
                        {{-- BARRA SUPERIOR --}}
                        <header class="bg-neutral-800 p-3 flex justify-around">
                            <div class="block">
                                <button @click="isSidebarOpen = !isSidebarOpen; $nextTick(() => { $refs.sidebar.focus() })"
                                    class="p-1 text-indigo-400 transition-colors duration-200 rounded-md bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:ring">
                                    <span class="sr-only">Toggle main manu</span>
                                    <span aria-hidden="true">
                                        <svg x-show="!isSidebarOpen" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                        </svg>
                                        <svg x-show="isSidebarOpen" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('home') }}">
                                    {{-- <x-jet-application-mark class="block h-9 w-auto" /> --}}
                                    <img class="block h-9 w-auto rounded-full"
                                            src="{{ asset('fotos/espoch.png') }}"
                                            alt="Ahmed Kamel" />
                                </a>
                            </div>
                            {{-- OPCIONES DE BARRA SUPERIOR --}}
                            {{-- <div class="hidden space-x-8 sm:-my-px sm:flex">
                                <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                                     <span class="text-white">{{ __('Inicio') }}</span>
                                </x-jet-nav-link>
                                <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                                    <span class="text-white">{{ __('Inicio') }}</span>
                                </x-jet-nav-link>
                            </div> --}}
                            <div>
                                <button class="py-1 px-3 bg-yellow-600 rounded-full" @click="openSettingsPanel">
                                    <span class="text-sm font-semibold">Matriz</span> <span>X</span>
                                </button>
                            </div>
                        </header>

                        {{-- CONTENIDO DINAMICO --}}
                        <div class="bg-neutral-600 flex-grow p-2 md:p-6 overflow-y-auto ">
                            <main>
                                @yield('content')
                            </main>
                        </div>

                        <footer class="bg-neutral-800 p-1 text-center">
                            <span class="text-white text-xs ">Todos los derechos reservados por Grupo 20 Mecanica</span>
                        </footer>
                    </div>
                    <!-- BOTONES PARA ABIR MENUS -->
                    {{-- <div class="fixed flex items-center space-x-4 top-5 right-10 lg:hidden">
                        <button @click="isSidebarOpen = true; $nextTick(() => { $refs.sidebar.focus() })"
                            class="p-1 text-indigo-400 transition-colors duration-200 rounded-md bg-indigo-50 hover:text-indigo-600 hover:bg-indigo-100 dark:hover:text-light dark:hover:bg-indigo-700 dark:bg-dark focus:outline-none focus:ring">
                            <span class="sr-only">Toggle main manu</span>
                            <span aria-hidden="true">
                                <svg x-show="!isSidebarOpen" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                                <svg x-show="isSidebarOpen" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </span>
                        </button>
                    </div> --}}
                    <!-- Contenido principal -->
                    {{-- <main class="flex-1">
                        <div
                            class="flex bg-red-500 flex-col items-center justify-center flex-1 h-full min-h-screen p-4 overflow-x-hidden overflow-y-auto">
                            <h1 class="mb-4 text-2xl font-semibold text-center md:text-3xl">Contenido Dinamico pilas</h1>
                        </div>
                    </main> --}}
        
                    <!-- Panels -->
        
                    <!-- Settings Panel -->
                    <!-- Backdrop -->
                    <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSettingsPanelOpen"
                        {{-- opacidad del sobrante de tabla --}}
                        @click="isSettingsPanelOpen = false" class="fixed inset-0 z-10 bg-neutral-400" style="opacity: 0.5"
                        aria-hidden="true"></div>
                    <!-- PANEL DE PDF -->
                    <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" x-ref="settingsPanel"
                        tabindex="-1" x-show="isSettingsPanelOpen" @keydown.escape="isSettingsPanelOpen = false"
                        class="fixed inset-y-0 right-0 z-20 w-full max-w-xs bg-neutral-800 rounded-l-2xl border-l-2 border-yellow-600 shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none"
                        aria-labelledby="settinsPanelLabel">
                        <div class="absolute left-0 p-2 transform -translate-x-full">
                            <!-- Close button -->
                            <button @click="isSettingsPanelOpen = false"
                                class="p-2 text-white rounded-md focus:outline-none focus:ring">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <!-- Panel content -->
                        <div class="flex flex-col h-screen">
                            <!-- Panel header -->
                            <div
                                class="flex flex-col items-center justify-center flex-shrink-0 px-4 py-8 space-y-4 border-b dark:border-yellow-600">
                                <span aria-hidden="true" class="text-gray-500 dark:text-yellow-600">
                                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                    </svg>
                                </span>
                                <h2 id="settinsPanelLabel" class="text-xl font-BOLD text-gray-300 dark:text-light ">TABLA DE DATOS
                                </h2>
                            </div>
                            <!-- Content -->
                            <div class="flex-1 overflow-hidden hover:overflow-y-auto">
                                <!-- Theme -->
                                {{-- <div class="p-4 space-y-4 md:p-8">
                                    <h6 class="text-lg font-medium text-gray-300 dark:text-light">Modo</h6>
                                    <div class="flex items-center space-x-8">
                                        <!-- Light button -->
                                        <button @click="setLightTheme"
                                            class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-indigo-600 dark:hover:text-indigo-100 dark:hover:border-indigo-500 focus:outline-none focus:ring focus:ring-indigo-400 dark:focus:ring-indigo-700"
                                            :class="{ 'border-gray-900 text-gray-900 dark:border-yellow-600 dark:text-indigo-100': !
                                                    isDark, 'text-gray-500 dark:text-indigo-500': isDark }">
                                            <span>
                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                                </svg>
                                            </span>
                                            <span>Claro</span>
                                        </button>
        
                                        <!-- Dark button -->
                                        <button @click="setDarkTheme"
                                            class="flex items-center justify-center px-4 py-2 space-x-4 transition-colors border rounded-md hover:text-gray-900 hover:border-gray-900 dark:border-indigo-600 dark:hover:text-indigo-100 dark:hover:border-indigo-500 focus:outline-none focus:ring focus:ring-indigo-400 dark:focus:ring-indigo-700"
                                            :class="{ 'border-gray-900 text-gray-900 dark:border-indigo-500 dark:text-indigo-100': isDark, 'text-gray-500 dark:text-indigo-500':
                                                    !isDark }">
                                            <span>
                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                                </svg>
                                            </span>
                                            <span>Oscuro</span>
                                        </button>
                                    </div>
                                </div> --}}
                                Datos de los diferentes temas con archivos PDF
                            </div>
                        </div>
                    </section>
        
                    <!-- Search panel -->
                    <!-- Backdrop -->
                    <div x-transition:enter="transition duration-300 ease-in-out" x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300 ease-in-out"
                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-show="isSearchPanelOpen"
                        @click="isSearchPanelOpen = false" class="fixed inset-0 z-10 bg-neutral-400" style="opacity: 0.5"
                        aria-hidden="ture"></div>
                    <!-- Panel -->
                    <section x-transition:enter="transition duration-300 ease-in-out transform sm:duration-500"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                        x-show="isSearchPanelOpen" @keydown.escape="isSearchPanelOpen = false"
                        class="fixed inset-y-0 z-20 w-full max-w-xs bg-neutral-800 text-yellow-600 rounded-r-2xl shadow-xl dark:bg-darker dark:text-light sm:max-w-md focus:outline-none">
                        <div class="absolute right-0 p-2 transform translate-x-full">
                            <!-- Close button -->
                            <button @click="isSearchPanelOpen = false"
                                class="p-2 text-white rounded-md focus:outline-none focus:ring">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
        
                        <h2 class="sr-only">Datos Generales</h2>
                        <!-- Panel content -->
                        <div class="flex flex-col h-screen">
                            <!-- Panel header (Search input) -->
                            <div class="relative flex-shrink-0 px-4 py-6 text-gray-400 flex justify-center">
                                <img class="w-28 text-center object-center " src="{{ asset('fotos/mecanica-1.jpg') }}" alt="">
                            </div>
                            <div class="text-lg text-center font-bold pb-4">
                                <span>FACULTAD DE MECANICA</span>
                            </div>
                            <hr>
                            <!-- Panel content (Search result) -->
                            <div class="flex-1 px-4 py-4 space-y-4 overflow-y-hidden h hover:overflow-y-auto">
                                <article>
                                    <header class="py-3 text-center">
                                       <p class="text-white">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                            Quam doloremque unde error, provident numquam voluptatem 
                                            eum veniam pariatur reiciendis dolorum nostrum nulla iure 
                                            fuga perspiciatis totam, nisi, odio debitis magni?
                                        </p>
                                    </header>
                                    <div class="text-center">
                                        <div class="font-semibold py-3 uppercase text-base">
                                            Integrantes:
                                        </div>
                                        <ul class="text-white">
                                            <li>
                                                Carolina 
                                            </li>
                                            <li>
                                                Santiago
                                            </li>
                                            <li>
                                                Stalin
                                            </li>
                                            <li>
                                                Compañero 4 
                                            </li>
                                            <li>
                                                Compañero 5 
                                            </li>
                                            <li>
                                                Compañero 6 
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
        </div>

        @stack('modals')

        @livewireScripts
        <script src="{{ asset('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
        <script>
            const setup = () => {
                const getTheme = () => {
                    if (window.localStorage.getItem('dark')) {
                        return JSON.parse(window.localStorage.getItem('dark'))
                    }
                    return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
                }
    
                const setTheme = (value) => {
                    window.localStorage.setItem('dark', value)
                }
    
                return {
                    loading: true,
                    isDark: getTheme(),
                    toggleTheme() {
                        this.isDark = !this.isDark
                        setTheme(this.isDark)
                    },
                    setLightTheme() {
                        this.isDark = false
                        setTheme(this.isDark)
                    },
                    setDarkTheme() {
                        this.isDark = true
                        setTheme(this.isDark)
                    },
                    watchScreen() {
                        if (window.innerWidth <= 1024) {
                            this.isSidebarOpen = false
                            //this.isSecondSidebarOpen = false
                        } else if (window.innerWidth >= 1024) {
                            this.isSidebarOpen = false
                            //this.isSecondSidebarOpen = true
                        }
                    },
                    isSidebarOpen: window.innerWidth >= 1024 ? false : false,
                    toggleSidbarMenu() {
                        this.isSidebarOpen = !this.isSidebarOpen
                    },
                    /* isSecondSidebarOpen: window.innerWidth >= 1024 ? true : false,
                    toggleSecondSidbarColumn() {
                        this.isSecondSidebarOpen = !this.isSecondSidebarOpen
                    }, */
                    isSettingsPanelOpen: false,
                    openSettingsPanel() {
                        this.isSettingsPanelOpen = true
                        this.$nextTick(() => {
                            this.$refs.settingsPanel.focus()
                        })
                    },
                    isSearchPanelOpen: false,
                    openSearchPanel() {
                        this.isSearchPanelOpen = true
                        this.$nextTick(() => {
                            this.$refs.searchInput.focus()
                        })
                    },
                }
            }

            Fancybox.bind("[data-fancybox]", {
                // Your options go here
            });
        </script>
    </body>
</html>
